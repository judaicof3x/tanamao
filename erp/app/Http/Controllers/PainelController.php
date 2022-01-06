<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PainelController extends Controller
{

    /**
     * Retorna a página inicial do painel
     */
    public function home() {
        if(auth()->user()->is_admin) {

            // Role::create(['name' => 'admin']);
            // Permission::create(['name' => 'write post']);

            // $role = Role::findById(1);
            // $role->givePermissionTo('edit post');

            // $role = Role::findByName('writer');

             auth()->user()->assignRole(['admin']);
            // auth()->user()->givePermissionTo('write post');

            // $permissions = auth()->user()->permissions;
            // dd($permissions);
            return view('painel.welcome.admin');
        } elseif(auth()->user()->is_financial) {
            return view('painel.welcome.financial');
        } elseif(auth()->user()->is_salesman) {
            return view('painel.welcome.salesman');
        } elseif(auth()->user()->is_administrative) {
            return view('painel.welcome.administrative');
        } elseif(auth()->user()->is_operational) {
            return view('painel.welcome.operational');
        } elseif(auth()->user()->is_clerk) {
            return view('painel.welcome.clerk');
        } elseif(auth()->user()->is_customer) {
            $tenant = User::find(auth()->user()->id)->tenant()->get();
            if(!empty($tenant[0])) {
                if($tenant[0]['status'] === 1) {
                    return redirect()->route('painel.customer.index'); // existe empresa ativa
                } else {
                    return redirect()->route('painel.customer.aviso'); // existe empresa, mas inativa
                }
            } else {
                return redirect()->route('painel.customer.welcome'); // não existe empresa.
            }
        }
    }

    /**
     * Retorna a conta do usuário
     */
    public function perfil() {
        //dd(auth()->user()->tenant->subscriptions->where('status', '=', 'p')->first());
        return view('painel.perfil.index');
    }

    /**
     * Retorna as configurações da conta do usuário
     */
    public function editar() {
        return view('painel.perfil.editar');
    }

    /**
     * Atualiza as configurações da conta do usuário
     */
    public function atualizar(Request $request) {
        $user = User::findOrFail(auth()->user()->id);
        $user->update($request->except('_token'));
        if($request->avatar_remove == 1) {
            $user->profile_photo_path = 'blank.png';
            $user->update();
        }
        return redirect()->route('painel.perfil.editar');
    }

    public function customer() {
        echo "cliente";
    }

    public function admin() {
        echo "super admin";
    }
}
