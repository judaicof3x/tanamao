<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    /**
     * Retorna a página inicial do painel
     */
    public function home() {
        return view('painel.home');
    }
}
