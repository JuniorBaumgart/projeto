<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Gerenciamento de Usuários</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-gray-100 text-gray-800">
<div class="min-h-screen">
    @include('layouts.navigation')

    <!-- Page Content -->
    <main class="p-6">
        <div class="container mx-auto">
            <caption class="text-2xl font-bold p-4 text-gray-700">
                <div class="section-title">
                    <i class="bi bi-person"></i> Usuários
                </div>
            </caption>
            <table class="table-auto border-collapse border border-gray-300 w-full text-sm shadow-lg rounded-lg overflow-hidden bg-white">
                <thead class="bg-gray-200 text-gray-800 rounded-t-lg">
                    <tr>
                        <th scope="col" class="border border-gray-300 px-4 py-2">Nome</th>
                        <th scope="col" class="border border-gray-300 px-4 py-2">Email</th>
                        <th scope="col" class="border border-gray-300 px-4 py-2">CPF</th>
                        <th scope="col" class="border border-gray-300 px-4 py-2">Login</th>
                        <th scope="col" class="border border-gray-300 px-4 py-2">Tipo</th>
                        <th scope="col" class="border border-gray-300 px-4 py-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->nome }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->cpf }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->login }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <span class=" px-2 py-1 rounded-full text-white text-xs font-semibold
                                    @if($usuario->tipoUsuario === "1") bg-green-600 
                                    @elseif($usuario->tipoUsuario === "2") bg-yellow-600 
                                    @elseif($usuario->tipoUsuario === "3") bg-blue-600
                                    @else bg-gray-200 text-gray-700 
                                    @endif">
                                    @if($usuario->tipoUsuario === "1") Admin
                                    @elseif($usuario->tipoUsuario === "2") Editor
                                    @elseif($usuario->tipoUsuario === "3") Viewer
                                    @else Nenhum
                                    @endif
                                </span>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('usuario.edit', $usuario->id) }}" class="text-blue-600 hover:underline"><i class="bi bi-vector-pen"></i> Editar</a>
                                <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2"><i class="bi bi-trash3"></i> Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="6" class="text-left p-4 bg-gray-200">
                            <a href="{{ route('usuario.create') }}" class="text-blue-600 hover:underline font-medium">
                                <i class="bi bi-plus-lg font-bold"></i> Adicionar Novo Usuário
                            </a>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
</div>
</body>
</html>
