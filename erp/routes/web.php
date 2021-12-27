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
        Route::get('planos/detalhes/cadastrar', [DetailController::class, 'create'])->name('planos.detalhes.create'); // exibe o form de criação
        Route::post('planos/detalhes/cadastrar', [DetailController::class, 'store'])->name('planos.detalhes.store'); // salva o detalhe no banco
        Route::get('planos/detalhes/{slug}', [DetailController::class, 'edit'])->name('planos.detalhes.edit'); // exibe o form de edição
        Route::put('planos/detalhes/{slug}', [DetailController::class, 'update'])->name('planos.detalhes.update'); // atualiza o detalhe no banco
        Route::delete('planos/detalhes/{slug}', [DetailController::class, 'destroy'])->name('planos.detalhes.destroy'); // remove o detalhe no banco

        // Rotas Supervisão -> Planos
        Route::get('planos', [PlanController::class, 'index'])->name('planos.index'); // lista os planos
        Route::get('planos/cadastrar', [PlanController::class, 'create'])->name('planos.create'); // exibe o form de criação
        Route::post('planos/cadastrar', [PlanController::class, 'store'])->name('planos.store'); // salva o plano no banco
        Route::get('planos/{slug}', [PlanController::class, 'edit'])->name('planos.edit'); // exibe o form de edição
        Route::put('planos/{slug}', [PlanController::class, 'update'])->name('planos.update'); // atualiza o plano no banco
        Route::delete('planos/{slug}', [PlanController::class, 'destroy'])->name('planos.destroy'); // remove o plano no banco
});