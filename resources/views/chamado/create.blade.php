<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Tecnico</h1>

    <br>

    <div class='container'>
        <form action="{{ route('chamado.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Descrição</label>
                <input name ="descricao" type="text" class="form-control" id="descricao">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Status</label>
                <input name ="status" type="text" class="form-control" id="status">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Usuário</label>
                <input name ="id_usuario" type="number" class="form-control" id="id_usuario">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Tecnico</label>
                <input name ="id_tecnico" type="number" class="form-control" id="id_tecnico">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Categoria</label>
                <input name ="id_categoria" type="number" class="form-control" id="id_categoria">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>