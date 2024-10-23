<x-app-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('tecnico.update', $tecnicos->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $tecnicos->nome) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="especializacao">Especialização</label>
                <input type="text" id="especializacao" name="especializacao" value="{{ old('especializacao', $tecnicos->especializacao) }}" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-group" for="disponibilidade">Disponibilidade</label>
                <input type="text" id="disponibilidade" name="disponibilidade" value="{{ old('disponibilidade', $tecnicos->disponibilidade) }}" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-secondary">Salvar</button>
                <a href="{{ route('tecnico.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>