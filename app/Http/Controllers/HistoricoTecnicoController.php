<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historicotecnico;

class HistoricoTecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todo o historico do tecnico do DB utilizando o mode HistoricoTecnico
        $historicoTecnicos = HistoricoTecnico::all();
        //Retorna a view 'historicoTecnico.index'
        return view('historicoTecnico.index', compact('historicoTecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retorna a view 'historicoTecnico.create'
        return view('historicoTecnico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cria uma nova instancia do model HistoricoTecnico' com os dados fornecidos pelo request
        $historicoTecnico = new HistoricoTecnico([
            'id_tecnico' => $request->input('id_tecnico')
        ]);

        $historicoTecnico->save();
        return redirect()->route('historicoTecnico.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Busca o tecnico do Chamado pelo id no banco e retorna a view 'historicoTecnico.edit'
        $historicoTecnicos = HistoricoTecnico::findOrFail($id);
        return view('historicoTecnico.edit', compact('historicoTecnicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Busca o historico do tecnico do chamados pelo ID no banco de dados
        $historicoTecnico = HistoricoTecnico::findOrFail($id);

        //Atualiza os campos com os dados fornecidos no formulario
        $historicoTecnico->id_tecnico = $request->input('id_tecnico');
        
        $historicoTecnico->save();
        return redirect()->route('historicoTecnico.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Busca o historico de um tecnico pelo Id no banco de dados e deleta caso encontre
        $historicoTecnico = HistoricoTecnico::findOrFail($id);

        $historicoTecnico->delete();
        return redirect()->route('historicoTecnico.index');
    }
}