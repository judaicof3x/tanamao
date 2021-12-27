<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\API\v1\PlanService;

class PlanController extends Controller
{

    private $planService;

    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }

    /**
     * Lista os planos de assinatura.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $plans = $this->planService->listPlans();
        $plans = $plans['data'];
        return view('painel.supervisao.planos.index', compact('plans'));
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
