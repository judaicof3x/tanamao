<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\API\v1\PlanService;
use App\Models\Supervisao\Planos\Detail;
use App\Models\Supervisao\Planos\Plan;
use App\Models\User;

class PlanController extends Controller
{
    private $planService;
    private $plan;
    private $details;

    public function __construct(PlanService $planService, Plan $plan, Detail $details)
    {
        $this->planService = $planService;
        $this->plan = $plan;
        $this->details = $details;
    }

    public function index() {

        $plansDB = $this->plan->all()->toArray(); // puxa os planos do banco de dados
        $plansApi = $this->planService->listPlans(); // puxa os planos da api
        $details = $this->details->where('status', 'ativo')->get(); // puxa todos os detalhes de plano do banco de dados

        $p = [];

        for($i = 1; $i <= $plansApi['meta']['last_page']; $i++){
            $plansApi = $this->planService->listPlans($i);
            $p = array_merge($p, $plansApi['data']);
        }

        $plans = [];
        foreach($plansDB as $plan) {
            $indiceApi = array_search($plan['api_id'], array_column($p, 'id')); // pega o indice no array de planos da api (filtrando pelo campo api_id = id)
            $idPlanApi = $p[$indiceApi]; // guarda os dados em uma variavel somente daquele indice

            $detailsPlan = $this->plan->find($plan['id'])->details; // pega os detalhes daquele plano para juntar no array

            array_push($plan, $idPlanApi, $detailsPlan); // insere o plano da api junto com o do banco de dados
            $plans[] = $plan; // adiciona no array de planos para usar na view
        }
        
        return view('painel.cliente.index', compact('plans', 'details'));
    }

    public function assinar($slug) {
        $plan = $this->plan->where('slug', $slug)->first();
        return view('painel.plano.assinar', compact('plan'));
    }

    public function pagar(Request $request, $slug) {
        $plan = $this->plan->where('slug', $slug)->first();
        $user = Auth::user();

        $response = $this->planService->updateSubscription(2650, [
            'is_active'     => false,
            'plan'    => [
                'id' => '762',
            ]
        ]);

        dd($response);

        // cria a assinatura na iPag
        $response = $this->planService->createSubscription([
            'is_active'     => true,
            'profile_id'    => "SUB_" . $user->id . $plan->id,
            'plan_id'       => $plan->api_id,
            'customer_id'   => 26364, // alterar
            'starting_date' => date('Y-m-d', strtotime(now())),
            'callback_url'  => "https://minhaloja.com/callback" // alterar
        ]);

        dd($response);

        // se criar na iPag, ele cria no nosso banco
        if ($response[0] === 201) {
            $response = json_decode($response[1]);
            $plan->api_id = $response->id;
            //$plan->details()->sync([$response->details]);
            $plan->save();
            return redirect()->route('painel.planos.index');
        }
    }
}
