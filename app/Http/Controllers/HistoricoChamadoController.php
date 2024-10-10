<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historicochamado;

class HistoricoChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todo o historico do chamado do DB utilizando o model HistoricoChamado
        $historicoChamado = HistoricoChamado::all();
        //Retorna a view 'historicoChamado.index'
        return view('historicoChamado.index', compact('historicoChamado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //retorna a view 'historicoChamado.create'
        return view('historicoChamado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cria uma nova instancia do model 'historicoChamado' com os dados fornecidos pelo request
        $historicoChamado = new HistoricoChamado([
            'id_chamado' => $request->input('id_chamado')
        ]);

        $historicoChamado->save();
        return redirect()->route('historicoChamado.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
