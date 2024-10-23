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
                                <th scope="col">Registro</th>
                                <th scope="col">Chamado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historicoChamados as $historico)
                                <tr>
                                    <th>{{ $historico->id }}</th>
                                    <td>{{ $historico->id_chamado }}</td>
                                    <td>
                                        <!-- Link para editar o historico do chamado -->
                                        <a href="{{ route('historicoChamado.edit', $historico->id) }}">Aterar Historico do Chamado</a>

                                        <!-- Formulário para deletar o historico do chamado -->
                                        <form action="{{ route('historicoChamado.destroy', $historico->id) }}" method="POST" style="display: inline;">
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
                                    <a href="{{ url('/historicoChamado/create') }}">Inserir Registro</a>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </container>
            </main>
        </div>
    </body>
</html>
