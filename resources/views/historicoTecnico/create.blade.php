<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Registro</h1>

    <br>

    <div class='container'>
        <form action="{{ route('historicoTecnico.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Tecnico</label>
                <input name ="id_tecnico" type="text" class="form-control" id="id_tecnico">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>