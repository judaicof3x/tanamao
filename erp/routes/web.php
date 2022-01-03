<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\Cliente\ClientController;
use App\Http\Controllers\Cliente\TenantController;
use App\Http\Controllers\Cliente\PlanController as ClientPlanController;
use App\Http\Controllers\Supervisao\Planos\DetailController;
use App\Http\Controllers\Supervisao\RoleController;
use App\Http\Controllers\API\v1\PlanController;

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('')
    ->name('painel.')
    ->group(function(){
    
        // Rotas de dashboard
        Route::get('', [PainelController::class, 'home'])->name('home'); // vai para a página inicial

        // Rotas da minha conta
        Route::get('minha-conta', [PainelController::class, 'perfil'])->name('perfil'); // vai para a minha conta
        Route::get('minha-conta/configuracoes', [PainelController::class, 'editar'])->name('perfil.editar'); // vai para as configurações da conta
        Route::put('minha-conta/configuracoes', [PainelController::class, 'atualizar'])->name('perfil.atualizar'); // atualiza as configurações da conta

        // Cliente
        Route::group(['middleware' => 'is_customer', 'as' => 'customer.'], function() {

            // Registro de empresa
            Route::get('bem-vindo', [TenantController::class, 'createTenant'])->name('welcome')->middleware('can:tenant_null'); // exibe o formulário de cadastro da empresa
            Route::post('bem-vindo', [TenantController::class, 'storeTenant'])->name('welcome.store')->middleware('can:tenant_null'); // realiza o cadastro da empresa
            Route::get('bem-vindo/sucesso', [TenantController::class, 'successTenant'])->name('welcome.success')->middleware('can:tenant_active'); // exibe a tela de sucesso
            Route::get('aviso', [TenantController::class, 'aviso'])->name('aviso')->middleware('can:tenant_inactive');
            
            // Home do cliente
            Route::get('dashboard', [ClientController::class, 'index'])->name('index')->middleware('can:tenant_active');

            // Contratar um plano
            Route::get('planos', [ClientPlanController::class, 'index'])->name('planos.index')->middleware(['can:tenant_active', 'can:subscription_null']); // lista os planos

        });

        // Admin
        Route::group(['middleware' => 'is_admin', 'name' => 'admin.'], function() {
            
            Route::get('admin', [PainelController::class, 'admin'])->name('admin');
        });
        
        // Rotas de Plano -> Ver planos
        
        Route::get('planos/{slug}/assinar', [ClientPlanController::class, 'assinar'])->name('cliente.planos.assinar'); // checkout
        //Route::post('planos/{slug}/pagar', [ClientPlanController::class, 'pagar'])->name('cliente.planos.pagar'); // captura o pagamento do plano

        // Rotas Supervisão -> Usuários -> Perfis
        Route::get('cargos', [RoleController::class, 'index'])->name('cargos.index'); // lista os cargos

        // Rotas Supervisão -> Planos -> Detalhes
        Route::get('supervisao/planos/detalhes', [DetailController::class, 'index'])->name('planos.detalhes.index'); // lista os detalhes dos planos
        Route::get('supervisao/planos/detalhes/adicionar', [DetailController::class, 'create'])->name('planos.detalhes.create'); // exibe o form de criação
        Route::post('supervisao/planos/detalhes/adicionar', [DetailController::class, 'store'])->name('planos.detalhes.store'); // salva o detalhe no banco
        Route::get('supervisao/planos/detalhes/{slug}', [DetailController::class, 'show'])->name('planos.detalhes.show'); // exibe o detalhe
        Route::get('supervisao/planos/detalhes/{slug}/editar', [DetailController::class, 'edit'])->name('planos.detalhes.edit'); // exibe o form de edição
        Route::put('supervisao/planos/detalhes/{id}/editar', [DetailController::class, 'update'])->name('planos.detalhes.update'); // atualiza o detalhe no banco
        Route::delete('supervisao/planos/detalhes/{slug}', [DetailController::class, 'destroy'])->name('planos.detalhes.destroy'); // desativa o detalhe no banco
        Route::post('supervisao/planos/detalhes/{slug}', [DetailController::class, 'restore'])->name('planos.detalhes.restore'); // ativa o detalhe no banco
        Route::delete('supervisao/planos/detalhes/{slug}/editar', [DetailController::class, 'forceDelete'])->name('planos.detalhes.forceDelete'); // deleta o detalhe no banco

        // Rotas Supervisão -> Planos
        Route::get('supervisao/planos', [PlanController::class, 'index'])->name('planos.index'); // lista os planos
        Route::get('supervisao/planos/adicionar', [PlanController::class, 'create'])->name('planos.create'); // exibe o form de criação
        Route::post('supervisao/planos/adicionar', [PlanController::class, 'store'])->name('planos.store'); // salva o plano no banco
        Route::get('supervisao/planos/{slug}', [PlanController::class, 'show'])->name('planos.show'); // exibe o plano
        Route::get('supervisao/planos/{slug}/editar', [PlanController::class, 'edit'])->name('planos.edit'); // exibe o form de edição
        Route::put('supervisao/planos/{id}/editar', [PlanController::class, 'update'])->name('planos.update'); // atualiza o plano no banco
        Route::delete('supervisao/planos/{id}', [PlanController::class, 'destroy'])->name('planos.destroy'); // remove o plano no banco
});