<?php

namespace App\Http\Controllers\Supervisao\Planos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisao\Planos\DetailRequest;
use App\Models\Supervisao\Planos\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    /**
     * Exibe a lista de detalhes do plano.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $details = Detail::withTrashed()->get();
        return view('painel.supervisao.planos.detalhes.index', compact('details'));
    }

    /**
     * Mostra o formulário de criação de um detalhe.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('painel.supervisao.planos.detalhes.create');
    }

    /**
     * Salva um novo detalhe no banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DetailRequest $request)
    {
        $detail = Detail::create($request->except('_token'));
        if($detail->status === 'inativo') {
            Detail::withTrashed()->where('slug', '=', $detail->slug)->delete();
        }
        return redirect()->route('painel.planos.detalhes.index');
    }

    /**
     * Exibe um detalhe.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        $detail = Detail::where('slug', $slug)->withTrashed()->firstOrFail();
        return view('painel.supervisao.planos.detalhes.show', compact('detail'));
    }

    /**
     * Exibe o formulário de edição de um detalhe.
     *
     * @param  string  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($slug)
    {
        $detail = Detail::where('slug', $slug)->withTrashed()->firstOrFail();
        return view('painel.supervisao.planos.detalhes.edit', compact('detail'));
    }

    /**
     * Atualiza um detalhe no banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $detail = Detail::withTrashed()->findOrFail($id)->update($request->except('_token'));
        $detail = Detail::withTrashed()->findOrFail($id);
        if($detail->status === 'inativo') {
            Detail::withTrashed()->where('slug', '=', $detail->slug)->delete();
        }
        if($detail->status === 'ativo') {
            Detail::withTrashed()->where('slug', '=', $detail->slug)->restore();
        }
        return redirect()->route('painel.planos.detalhes.edit', $detail->slug);
    }

    /**
     * Desativa um detalhe no banco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Detail::withTrashed()->where('slug', '=', $slug)->delete();
        return redirect()->route('painel.planos.detalhes.index');
    }

    /**
     * Ativa um detalhe no banco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($slug)
    {
        Detail::withTrashed()->where('slug', '=', $slug)->restore();
        return redirect()->route('painel.planos.detalhes.index');
    }

    /**
     * Deleta um detalhe no banco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($slug)
    {
        Detail::withTrashed()->where('slug', '=', $slug)->forceDelete();
        return redirect()->route('painel.planos.detalhes.index');
    }
}
