<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todos os tecnicos do DB utilizando o model Tecnico
        $tecnicos = Tecnico::all();
        //Retorna a view 'tecnico.index'
        return view('tecnico.index', compact('tecnicos'));
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
            'nome' => $request->input('nome'),
            'especializacao' => $request->input('especializacao'),
            'disponibilidade' => $request->input('disponibilidade')
        ]);

        $tecnico->save();
        return redirect()->route('tecnico.index');
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
        //Busca o tecnico pelo id no banco e se encontrar renorta a view 'tecnico.edit'
        $tecnicos = Tecnico::findOrFail($id);
        return view('tecnico.edit', compact('tecnicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Busca o técnico pelo id no banco de dados
        $tecnico = Tecnico::findOrFail($id);

        // Atualiza os campos com os dados do formulário
        $tecnico->nome = $request->input('nome');
        $tecnico->especializacao = $request->input('especializacao');
        $tecnico->disponibilidade = $request->input('disponibilidade');

        $tecnico->save();
        return redirect()->route('tecnico.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Busca um tecnico pelo ID no banco de dados e deleta caso encontre
        $tecnico = Tecnico::findOrFail($id);

        $tecnico->delete();
        return redirect()->route('tecnico.index');
    }
}
