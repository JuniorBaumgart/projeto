<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todos os tecnicos do DB utilizando o model Tecnico
        $tecnico = Tecnico::all();
        //Retorna a view 'tecnico.index'
        return view('tecnico.index', compact('tecnico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retorna a view 'tecnico.create'
        return view('tecnico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cria uma nova instancia do model 'Tecnico' com os dados fornecidos no request
        $tecnico = new Tecnico([
            'especializacao' => $request->input('especializacao'),
            'disponibilidade' => $request->input('disponibilidade')
        ]);
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
