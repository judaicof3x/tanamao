<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Supervisao\Planos\Detail;
use App\Models\Supervisao\Planos\Plan;
use Illuminate\Http\Request;
use App\Services\API\v1\PlanService;
use Illuminate\Support\Facades\DB;

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
        $plansApi = $plansApi['data']; // limpa o array dos planos que vem da api
        $details = $this->details->where('status', 'ativo')->get(); // puxa todos os detalhes de plano do banco de dados

        $plans = [];
        foreach($plansDB as $plan) {

            $indiceApi = array_search($plan['api_id'], array_column($plansApi, 'id')); // pega o indice no array de planos da api (filtrando pelo campo api_id = id)
            $idPlanApi = $plansApi[$indiceApi]; // guarda os dados em uma variavel somente daquele indice

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
        $response = $planService->createPlan([
            'name'          => 'Plano Diamante',
            'description'   => 'Plano Diamante com até 8 treinos por semana',
            'amount'        => '180.00',
            'frequency'     => 'monthly',
            'interval'      => '1'
        ]);

        if ($response) {
            return 'Criado com sucesso';
        }

        return 'Erro ao criar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
