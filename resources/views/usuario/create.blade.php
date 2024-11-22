<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-person-plus"></i> Novo Usuario
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form action="{{ route('usuario.store') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input name="nome" type="text" id="nome" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" id="email" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- CPF/CNPJ -->
                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF/CNPJ</label>
                        <input name="cpf" type="text" id="cpf" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Login -->
                    <div>
                        <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
                        <input name="login" type="text" id="login" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Senha -->
                    <div>
                        <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input name="senha" type="password" id="senha" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Tipo do Usuário (Dropdown) -->
                    <div>
                        <label for="tipoUsuario" class="block text-sm font-medium text-gray-700">Tipo do Usuário</label>
                        <select name="tipoUsuario" id="tipoUsuario" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                            <option value="1">Admin</option>
                            <option value="2">Editor</option>
                            <option value="3">Viewer</option>
                        </select>
                    </div>

                    <!-- Ações -->
                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('usuario.index') }}" class="btn btn-secondary text-gray-600 hover:text-red-600">
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
