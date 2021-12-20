<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\Supervisao\RoleController;

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
        Route::get('', [PainelController::class, 'home'])->name('home');

        // Rotas Supervisão -> Usuários -> Perfis
        Route::get('cargos', [RoleController::class, 'index'])->name('cargos.index');
});