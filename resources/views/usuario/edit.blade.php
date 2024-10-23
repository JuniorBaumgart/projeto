<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('usuario.update', $usuarios->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $usuarios->nome) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="email">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email', $usuarios->email) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="cpf">CPF/CNPJ</label>
                <input type="number" id="cpf" name="cpf" value="{{ old('cpf', $usuarios->cpf) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="login">Login</label>
                <input type="text" id="login" name="login" value="{{ old('login', $usuarios->login) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="senha">Senha</label>
                <input type="text" id="senha" name="senha" value="{{ old('senha', $usuarios->senha) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="tipoUsuario">Tipo do Usuario</label>
                <input type="text" id="tipoUsuario" name="tipoUsuario" value="{{ old('tipoUsuario', $usuarios->tipoUsuario) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('usuario.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>