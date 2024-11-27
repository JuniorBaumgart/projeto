<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-person-lines-fill"></i> Novo Registro de Técnico
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form action="{{ route('historicoTecnico.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Técnico -->
                    <div>
                        <label for="id_tecnico" class="block text-sm font-medium text-gray-700">Técnico</label>
                        <input name="id_tecnico" type="text" id="id_tecnico"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('historicoTecnico.index') }}" class="btn btn-secondary text-gray-600 hover:text-red-600">
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
