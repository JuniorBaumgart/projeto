<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('historicoUsuario.update', $historicoUsuarios->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="id_usuario">Usuario</label>
                <input type="text" id="id_usuario" name="id_usuario" value="{{ old('id_usuario', $historicoUsuarios->id_usuario) }}" class="form-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('historicoUsuario.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>