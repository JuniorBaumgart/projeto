<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Gerenciamento de Chamados</title>

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
                            <i class="bi bi-card-checklist"></i> Chamados
                        </div>
                    </caption>
                    <table class="table-auto border-collapse border border-gray-300 w-full text-sm shadow-lg rounded-lg overflow-hidden bg-white">
                        <thead class="bg-gray-200 text-gray-800 rounded-t-lg">
                            <tr>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Descrição</th>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Status</th>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Usuário</th>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Técnico</th>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Categoria</th>
                                <th scope="col" class="border border-gray-300 px-4 py-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chamados as $chamado)
                                <tr class="hover:bg-gray-100">
                                    <td class="border border-gray-300 px-4 py-2">{{ $chamado->descricao }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $chamado->status }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $chamado->id_usuario }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $chamado->id_tecnico }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $chamado->id_categoria }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="{{ route('chamado.edit', $chamado->id) }}" class="text-blue-600 hover:underline">
                                            <i class="bi bi-vector-pen"></i> Editar
                                        </a>
                                        <form action="{{ route('chamado.destroy', $chamado->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline ml-2">
                                                <i class="bi bi-trash3"></i> Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row" colspan="6" class="text-left p-4 bg-gray-200">
                                    <a href="{{ url('/chamado/create') }}" class="text-blue-600 hover:underline font-medium">
                                        <i class="bi bi-plus-lg font-bold"></i> Inserir Chamado
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
