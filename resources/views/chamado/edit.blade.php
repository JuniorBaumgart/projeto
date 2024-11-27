<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-pencil-square"></i> Editar Chamado
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('chamado.update', $chamados->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Descrição -->
                    <div>
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <input type="text" id="descricao" name="descricao" 
                               value="{{ old('descricao', $chamados->descricao) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <input type="text" id="status" name="status" 
                               value="{{ old('status', $chamados->status) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Usuário -->
                    <div>
                        <label for="id_usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                        <input type="text" id="id_usuario" name="id_usuario" 
                               value="{{ old('id_usuario', $chamados->id_usuario) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Técnico -->
                    <div>
                        <label for="id_tecnico" class="block text-sm font-medium text-gray-700">Técnico</label>
                        <input type="text" id="id_tecnico" name="id_tecnico" 
                               value="{{ old('id_tecnico', $chamados->id_tecnico) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Categoria -->
                    <div>
                        <label for="id_categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                        <input type="text" id="id_categoria" name="id_categoria" 
                               value="{{ old('id_categoria', $chamados->id_categoria) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500
