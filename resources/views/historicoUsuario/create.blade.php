<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Registro</h1>

    <br>

    <div class='container'>
        <form action="{{ route('historicoUsuario.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Usuario</label>
                <input name ="id_usuario" type="text" class="form-control" id="id_usuario">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>