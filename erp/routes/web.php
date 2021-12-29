<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\Supervisao\RoleController;
use App\Http\Controllers\API\v1\PlanController;
use App\Http\Controllers\Supervisao\Planos\DetailController;

/**
 * Excluir inicio
 */
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/**
 * Excluir fim
 */

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('painel')
    ->name('painel.')
    ->group(function(){
    
        // Rotas do painel
        Route::get('', [PainelController::class, 'home'])->name('home'); // vai para a página inicial

        // Rotas Supervisão -> Usuários -> Perfis
        Route::get('cargos', [RoleController::class, 'index'])->name('cargos.index'); // lista os cargos

        // Rotas Supervisão -> Planos -> Detalhes
        Route::get('planos/detalhes', [DetailController::class, 'index'])->name('planos.detalhes.index'); // lista os detalhes dos planos
        Route::get('planos/detalhes/adicionar', [DetailController::class, 'create'])->name('planos.detalhes.create'); // exibe o form de criação
        Route::post('planos/detalhes/adicionar', [DetailController::class, 'store'])->name('planos.detalhes.store'); // salva o detalhe no banco
        Route::get('planos/detalhes/{slug}', [DetailController::class, 'show'])->name('planos.detalhes.show'); // exibe o detalhe
        Route::get('planos/detalhes/{slug}/editar', [DetailController::class, 'edit'])->name('planos.detalhes.edit'); // exibe o form de edição
        Route::put('planos/detalhes/{id}/editar', [DetailController::class, 'update'])->name('planos.detalhes.update'); // atualiza o detalhe no banco
        Route::delete('planos/detalhes/{id}', [DetailController::class, 'destroy'])->name('planos.detalhes.destroy'); // desativa o detalhe no banco
        Route::post('planos/detalhes/{id}', [DetailController::class, 'restore'])->name('planos.detalhes.restore'); // ativa o detalhe no banco

        // Rotas Supervisão -> Planos
        Route::get('planos', [PlanController::class, 'index'])->name('planos.index'); // lista os planos
        Route::get('planos/adicionar', [PlanController::class, 'create'])->name('planos.create'); // exibe o form de criação
        Route::post('planos/adicionar', [PlanController::class, 'store'])->name('planos.store'); // salva o plano no banco
        Route::get('planos/{slug}', [PlanController::class, 'show'])->name('planos.show'); // exibe o plano
        Route::get('planos/{slug}/editar', [PlanController::class, 'edit'])->name('planos.edit'); // exibe o form de edição
        Route::put('planos/{id}/editar', [PlanController::class, 'update'])->name('planos.update'); // atualiza o plano no banco
        Route::delete('planos/{id}', [PlanController::class, 'destroy'])->name('planos.destroy'); // remove o plano no banco
});