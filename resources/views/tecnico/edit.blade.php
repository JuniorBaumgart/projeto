<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-pencil-square"></i> Editar Técnico
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('tecnico.update', $tecnicos->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" id="nome" name="nome" 
                               value="{{ old('nome', $tecnicos->nome) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Especialização -->
                    <div>
                        <label for="especializacao" class="block text-sm font-medium text-gray-700">Especialização</label>
                        <input type="text" id="especializacao" name="especializacao" 
                               value="{{ old('especializacao', $tecnicos->especializacao) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Disponibilidade -->
                    <div>
                        <label for="disponibilidade" class="block text-sm font-medium text-gray-700">Disponibilidade</label>
                        <input type="text" id="disponibilidade" name="disponibilidade" 
                               value="{{ old('disponibilidade', $tecnicos->disponibilidade) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('tecnico.index') }}" class="btn btn-secondary text-gray-600 hover:text-red-600">
                            <i class="bi bi-arrow-left"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-success hover:text-green-300">
                            <i class="bi bi-save"></i> Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>
