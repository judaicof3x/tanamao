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
        return $response->successful();
    }

    /**
     * Listar Planos de Assinatura.
     *
     * @return void
     */
    public function listPlans()
    {
        $response = Http::withBasicAuth(env('BASIC_API_ID'), env('BASIC_API_KEY'))->get('https://sandbox.ipag.com.br/service/resources/plans');

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
        return $response->successful();
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
}