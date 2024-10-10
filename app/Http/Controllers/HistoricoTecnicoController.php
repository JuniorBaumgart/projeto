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
        $historicoTecnico = HistoricoTecnico::all();
        //Retorna a view 'historicoTecnico.index'
        return view('historicoTecnico.index', compact('historicoTecnico'));
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
            'id_tecnico' => $request->input('is_tecnico')
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
