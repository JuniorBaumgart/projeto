<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                <container>
                    <table>
                        <caption>Vamo ver se Funciona</caption>
                        <thead>
                            <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">Status</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Tecnico</th>
                                <th scope="col">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chamados as $chamado)
                                <tr>
                                    <th>{{ $chamado->descricao }}</th>
                                    <td>{{ $chamado->status }}</td>
                                    <td>{{ $chamado->id_usuario }}</td>
                                    <td>{{ $chamado->id_tecnico }}</td>
                                    <td>{{ $chamado->id_categoria }}</td>
                                    <td>
                                        <!-- Link para editar a categoria -->
                                        <a href="{{ route('chamado.edit', $chamado->id) }}">Aterar Chamado</a>

                                        <!-- Formulário para deletar o técnico -->
                                        <form action="{{ route('chamado.destroy', $chamado->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row" colspan="2">
                                    <a href="{{ url('/chamado/create') }}">Inserir Chamado</a>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </container>
            </main>
        </div>
    </body>
</html>
