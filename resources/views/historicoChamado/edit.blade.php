<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('historicoChamado.update', $historicoChamados->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="id_chamado">Chamado</label>
                <input type="text" id="id_chamado" name="id_chamado" value="{{ old('id_chamado', $historicoChamados->id_chamado) }}" class="form-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('historicoChamado.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>