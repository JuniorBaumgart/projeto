<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-bug"></i> Novo Chamado
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form action="{{ route('chamado.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Descrição -->
                    <div>
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <input name="descricao" type="text" id="descricao"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <input name="status" type="text" id="status"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Usuário -->
                    <div>
                        <label for="id_usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                        <input name="id_usuario" type="number" id="id_usuario"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Técnico -->
                    <div>
                        <label for="id_tecnico" class="block text-sm font-medium text-gray-700">Técnico</label>
                        <input name="id_tecnico" type="number" id="id_tecnico"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Categoria -->
                    <div>
                        <label for="id_categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                        <input name="id_categoria" type="number" id="id_categoria"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('chamado.index') }}" class="btn btn-secondary text-gray-600 hover:text-red-600">
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
