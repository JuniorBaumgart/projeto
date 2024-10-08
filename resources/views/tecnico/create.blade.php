<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class='container'>
            <h1> Novo Tecnico </h1>
            <form action="{{ route('tecnico.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="especializacao">Especialização:</label>
                    <input type="text" name="especializacao">
                </div>
                <div class="form-group">
                    <label for="disponibilidade">Disponibilidade:</label>
                    <input type="text" name="disponibilidade">
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('tecnico.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </body>
</html>