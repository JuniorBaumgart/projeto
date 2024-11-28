<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-pencil-square"></i> Editar Chamado
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('chamado.update', $chamado->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Descrição -->
                    <div>
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <input type="text" id="descricao" name="descricao" 
                               value="{{ old('descricao', $chamado->descricao) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <input type="text" id="status" name="status" 
                               value="{{ old('status', $chamado->status) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Usuário -->
                    <div>
                        <label for="id_usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                        <select id="id_usuario" name="id_usuario" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}" {{ $usuario->id == $chamado->id_usuario ? 'selected' : '' }}>
                                    {{ $usuario->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Técnico -->
                    <div>
                        <label for="id_tecnico" class="block text-sm font-medium text-gray-700">Técnico</label>
                        <select id="id_tecnico" name="id_tecnico" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                            @foreach($tecnicos as $tecnico)
                                <option value="{{ $tecnico->id }}" {{ $tecnico->id == $chamado->id_tecnico ? 'selected' : '' }}>
                                    {{ $tecnico->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Categoria -->
                    <div>
                        <label for="id_categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                        <select id="id_categoria" name="id_categoria" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ $categoria->id == $chamado->id_categoria ? 'selected' : '' }}>
                                    {{ $categoria->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botões -->
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
