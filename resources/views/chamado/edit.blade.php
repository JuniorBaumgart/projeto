<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('chamado.update', $chamados->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $chamados->descricao) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="status">Status</label>
                <input type="text" id="status" name="status" value="{{ old('status', $chamados->status) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="id_usuario">Usuario</label>
                <input type="text" id="id_usuario" name="id_usuario" value="{{ old('id_usuario', $chamados->id_usuario) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="id_tecnico">Tecnico</label>
                <input type="text" id="id_tecnico" name="id_tecnico" value="{{ old('id_tecnico', $chamados->id_tecnico) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="id_categoria">Categoria</label>
                <input type="text" id="id_categoria" name="id_categoria" value="{{ old('id_categoria', $chamados->id_categoria) }}" class="form-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('chamado.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>