<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Tecnico</h1>

    <br>

    <div class='container'>
        <form action="{{ route('tecnico.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Nome</label>
                <input name ="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Especialização</label>
                <input name ="especializacao" type="text" class="form-control" id="especializacao">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Disponibilidade</label>
                <input name ="disponibilidade" type="text" class="form-control" id="disponibilidade" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>