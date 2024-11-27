<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center space-x-2">
                <i class="bi bi-pencil-square text-gray-600"></i>
                <span>Editar Histórico do Chamado</span>
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('historicoChamado.update', $historicoChamados->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Chamado -->
                    <div>
                        <label for="id_chamado" class="block text-sm font-medium text-gray-700">
                            Chamado
                        </label>
                        <input type="text" id="id_chamado" name="id_chamado"
                               value="{{ old('id_chamado', $historicoChamados->id_chamado) }}"
                               class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                               placeholder="Informe o ID do chamado" 
                               required>
                    </div>

                    <!-- Ações -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('historicoChamado.index') }}" 
                           class="text-gray-600 hover:text-red-600 font-medium text-sm flex items-center space-x-2">
                            <i class="bi bi-arrow-left"></i>
                            <span>Cancelar</span>
                        </a>
                        <button type="submit" 
                                class="px-6 py-2 bg-green-600 text-white font-medium text-sm rounded-lg hover:bg-green-500 transition-all flex items-center space-x-2">
                            <i class="bi bi-save"></i>
                            <span>Salvar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>
