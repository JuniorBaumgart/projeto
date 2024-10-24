<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('categoria.update', $categorias->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $categorias->nome) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $categorias->descricao) }}" class="form-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('categoria.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>