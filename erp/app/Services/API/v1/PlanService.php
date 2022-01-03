<?php

namespace App\Services\API\v1;
use Illuminate\Support\Facades\Http;

class PlanService 
{

    /**
     * Novo Plano de Assinatura.
     *
     * @return void
     */
    public function createPlan(array $data)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->post('https://sandbox.ipag.com.br/service/resources/plans', $data);
        return [$response->status(), $response->collect()];
    }

    /**
     * Listar Planos de Assinatura.
     *
     * @return void
     */
    public function listPlans($page = null)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->get('https://sandbox.ipag.com.br/service/resources/plans', [
            'page' => $page
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    /**
     * Consultar Plano de Assinatura.
     *
     * @return void
     */
    public function getPlan(string $id)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->get("https://sandbox.ipag.com.br/service/resources/plans?id={$id}");    
        return [$response->status(), $response->collect()];
    }

    /**
     * Alterar Plano de Assinatura.
     *
     * @return void
     */
    public function updatePlan(string $id, array $data)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->put("https://sandbox.ipag.com.br/service/resources/plans?id={$id}", $data);
        return $response->successful();
    }

    /**
     * Deletar Plano de Assinatura.
     *
     * @return void
     */
    public function deletePlan(string $id)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->delete("https://sandbox.ipag.com.br/service/resources/plans?id={$id}");
        return $response->successful();
    }

    /**
     * Nova Assinatura.
     *
     * @return void
     */
    public function createSubscription(array $data)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->post('https://sandbox.ipag.com.br/service/resources/subscriptions', $data);
        return [$response->status(), $response->collect()];
    }

    /**
     * Alterar Assinatura.
     *
     * @return void
     */
    public function updateSubscription(string $id, array $data)
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->put("https://sandbox.ipag.com.br/service/resources/subscriptions?id={$id}", $data);
        return [$response->status(), $response->collect()];
    }
}