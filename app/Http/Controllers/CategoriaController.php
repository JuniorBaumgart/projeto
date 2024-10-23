<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todas as categorias do DB utilizando o model Categoria
        $categorias = Categoria::all();
        //Retorna a view 'categoria.index'
        return view('categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cria uma nova instancia do model 'Categoria' com os dados fornecidos no request
        $categoria = new Categoria([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao')
        ]);

        $categoria->save();
        return redirect()->route('categoria.index');
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
        //Busca o tecnico pelo id no banco e se encontrar retorna a view 'categoria.edit'
        $categorias = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Busca a categoria pelo id no banco de dados
        $categoria = Categoria::findOrFail($id);

        //Atualiza os campos com os dados fornecidos no formulario 
        $categoria->nome = $request->input('nome');
        $categoria->descricao = $request->input('descricao');

        $categoria->save();
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Busca uma categoria pelo Id no banco de dados e deleta caso encontre
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
