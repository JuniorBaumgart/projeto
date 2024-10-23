<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('historicoTecnico.update', $historicoTecnicos->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="id_tecnico">Tecnico</label>
                <input type="text" id="id_tecnico" name="id_tecnico" value="{{ old('id_tecnico', $historicoTecnicos->id_tecnico) }}" class="form-input">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('historicoTecnico.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>