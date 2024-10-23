<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Tecnico</h1>

    <br>

    <div class='container'>
        <form action="{{ route('categoria.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Nome</label>
                <input name ="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Descrição</label>
                <input name ="descricao" type="text" class="form-control" id="descricao">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>