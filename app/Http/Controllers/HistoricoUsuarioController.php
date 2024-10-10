<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historicousuario;

class HistoricoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todo o historico do usuario do DB utilizando o model HistoricoUsuario
        $historicoUsuario = HistoricoUsuario::all();
        //Retorna a view 'historicoUsuario.index'
        return view('historicoUsuario.index', compact('historicoUsuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retorna a view 'historicoUsuario.create'
        return view('historicoUsuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cria uma nova instancia do model 'historicoUsuario' com os dados fornecidos no request
        $historicoUsuario = new HistoricoUsuario([
            'id_usuario' => $request->input('id_usuario')
        ]);

        $historicoUsuario->save();
        return redirect()->route('historicoUsuario.index');
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
