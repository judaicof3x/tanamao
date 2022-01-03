<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Supervisao\Planos\Detail;
use App\Models\Supervisao\Planos\Plan;
use Illuminate\Http\Request;
use App\Services\API\v1\PlanService;

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

    /**
     * Lista os planos de assinatura.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
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
        
        return view('painel.supervisao.planos.index', compact('plans', 'details'));
    }

    /**
     * Exibe o form de criação de plano de assinatura.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.supervisao.planos.create');
    }

    /**
     * Salva o plano de assinatura no banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanService $planService, Request $request)
    {
        $plan = $this->plan;

        // cria o plano na iPag
        $response = $planService->createPlan([
            'name'          => $request->name,
            'description'   => $request->description,
            'amount'        => $request->amount,
            'frequency'     => $request->frequency,
            'interval'      => $request->interval
        ]);

        // se criar na iPag, ele cria no nosso banco
        if ($response[0] === 201) {
            $response = json_decode($response[1]);
            $plan->api_id = $response->id;
            //$plan->details()->sync([$response->details]);
            $plan->save();
            return redirect()->route('painel.planos.index');
        }

        return 'Erro ao criar';
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $plan = $this->plan->where('slug', $slug)->firstOrFail();
        $plan = $this->planService->getPlan($plan->api_id);
        //dd($plan[1]['attributes']);
        return view('painel.supervisao.planos.show', compact('plan'));
    }

    /**
     * Editar Plano de Assinatura.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = $this->planService->getPlan($id);

        $plan = $response->json()['attributes']; // lista os atributos do plano
        $plan = (object) $plan; // converte para objeto

        return view('painel.supervisao.planos.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanService $planService, Request $request, $id)
    {
        $response = $planService->updatePlan('747', [
            'name'          => 'Plano Diamante 2022',
            'description'   => 'Plano Diamante com até 8 treinos por semana',
            'amount'        => '220.00',
            'frequency'     => 'monthly',
            'interval'      => '1'
        ]);

        if ($response) {
            return 'Atualizado com sucesso';
        }

        return 'Erro ao atualizar';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = $this->planService->deletePlan($id);

        if ($response) {
            return 'Deletado com sucesso';
        }

        return 'Erro ao deletar';
    }
}
