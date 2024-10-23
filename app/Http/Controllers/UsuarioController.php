<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todos os usuarios do DB utilizando o model Usuario
        $usuarios = Usuario::all();
        //Retorna a view 'usuario.index'
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retorna a view 'usuario.create'
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cria uma nova instancia do model 'Usuario' com os dados fornecidos no request
        $usuario = new Usuario([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'login' => $request->input('login'),
            'senha' => $request->input('senha'),
            'tipoUsuario' => $request->input('tipoUsuario')
        ]);

        $usuario->save();
        return redirect()->route('usuario.index');
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
        //Busca o usuario pelo id no banco e se encontrar retorna a view 'usuario.edit'
        $usuarios = Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Busca o técnico pelo id no banco de dados
        $usuario = Usuario::findOrFail($id);

        //Atualiza os campos com os dados do formulário
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->cpf = $request->input('cpf');
        $usuario->login = $request->input('login');
        $usuario->senha = $request->input('senha');
        $usuario->tipoUsuario = $request->input('tipoUsuario');

        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Busca um tecnico pelo Id no banco de dados e deleta caso encontre
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
