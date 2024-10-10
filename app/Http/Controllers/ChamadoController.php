<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chamado;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todos os chamados do DB utilizando o model Chamado 
        $chamado = Chamado::all();
        //Retorna a view 'chamado.index'
        return view('chamado.index', compact('chamado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retorna a view 'chamado.create'
        return view('chamado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cria uma nova instancia do model 'Chamado' com os dados fornecidos no request
        $chamado = new Chamado([
            'descricao' => $request->input('descricao'),
            'status' => $request->input('status'),
            'id_usuario' => $request->input('id_usuario'),
            'id_tecnico' => $request->input('id_tecnico'),
            'id_categoria' => $request->input('id_categoria')
        ]);

        $chamado->save();
        return redirect()->route('chamado.index');
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
