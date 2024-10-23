<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Novo Tecnico</h1>

    <br>

    <div class='container'>
        <form action="{{ route('usuario.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Nome</label>
                <input name ="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Email</label>
                <input name ="email" type="text" class="form-control" id="email" required>
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">CPF/CNPJ</label>
                <input name ="cpf" type="text" class="form-control" id="cpf" required>
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Login</label>
                <input name ="login" type="text" class="form-control" id="login" required>
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Senha</label>
                <input name ="senha" type="text" class="form-control" id="senha" required>
            </div>
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Tipo</label>
                <input name ="tipoUsuario" type="text" class="form-control" id="tipoUsuario">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>