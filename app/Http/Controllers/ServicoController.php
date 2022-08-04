<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;


class ServicoController extends Controller
{
    public function index()
    {

        $servicos = Servico::paginate(10);
        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {

        return view('servicos.create');
    }

    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');

        Servico::create($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com Sucesso!');
    }

    /**
     * Undocumented function
     *
     * @param Servico $servico
     * @return void
     */
    public function edit(Servico $servico)
    {

        return view('servicos.edit', compact('servico'));
    }

    /**
     * Undocumented function
     *
     * @param Servico $servico
     * @param ServicoRequest $request
     * @return void
     */
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->except('_token', '_method');

        $servico->update($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com Sucesso!');
    }

    public function delete(int $id)
    {

        $servico = Servico::findOrFail($id);
        $servico->delete();

        return redirect()->route('servicos.index');
    }
}
