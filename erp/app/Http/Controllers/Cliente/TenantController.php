<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeTenantRequest;
use App\Models\Segment;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function createTenant() {
        $segments = Segment::all();
        return view('painel.cliente.empresa.create', compact('segments'));
    }

    public function storeTenant(storeTenantRequest $request) {
        dd($request);
        
        $response = new Tenant();
        $response->user_id = auth()->user()->id;
        $response->name = $request->name;
        $response->cnpj = $request->cnpj;
        $response->save();

        return redirect()->route('painel.customer.welcome.success');
    }

    public function successTenant() {
        return view('painel.cliente.empresa.success');
    }

    public function aviso() {
        return view('painel.cliente.empresa.inactive');
    }
}
