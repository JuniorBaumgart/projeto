<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-pencil-square"></i> Editar Histórico do Usuário
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('historicoUsuario.update', $historicoUsuarios->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Usuário -->
                    <div>
                        <label for="id_usuario" class="block text-sm font-medium text-gray-700">
                            Usuário
                        </label>
                        <input type="text" id="id_usuario" name="id_usuario"
                               value="{{ old('id_usuario', $historicoUsuarios->id_usuario) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                               placeholder="Informe o ID do usuário" 
                               required>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center justify-end space-x-4">
                    <a href="{{ route('historicoUsuario.index') }}" class="btn btn-secondary text-gray-600 hover:text-red-600">
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
