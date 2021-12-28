<?php

namespace App\Http\Controllers\Supervisao\Planos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisao\Planos\DetailRequest;
use App\Models\Supervisao\Planos\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Exibe a lista de detalhes do plano.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $details = Detail::all();
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
        $detail = Detail::where('slug', $slug)->firstOrFail();
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
        $detail = Detail::where('slug', $slug)->firstOrFail();
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
        $detail = Detail::findOrFail($id)->update($request->except('_token'));
        $detail = Detail::findOrFail($id);
        return redirect()->route('painel.planos.detalhes.edit', $detail->slug);
    }

    /**
     * Remove um detalhe no banco.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detail::findOrFail($id)->destroy($id);
        return redirect()->route('painel.planos.detalhes.index');
    }
}
