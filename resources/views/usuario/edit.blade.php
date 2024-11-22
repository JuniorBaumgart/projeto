<x-app-layout>
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-gray-700">
                <i class="bi bi-pencil-square"></i> Editar Usuário
            </h1>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <form method="POST" action="{{ route('usuario.update', $usuarios->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" id="nome" name="nome" 
                               value="{{ old('nome', $usuarios->nome) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $usuarios->email) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- CPF/CNPJ -->
                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF/CNPJ</label>
                        <input type="number" id="cpf" name="cpf" 
                               value="{{ old('cpf', $usuarios->cpf) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Login -->
                    <div>
                        <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
                        <input type="text" id="login" name="login" 
                               value="{{ old('login', $usuarios->login) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Senha -->
                    <div>
                        <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input type="password" id="senha" name="senha" 
                               value="{{ old('senha', $usuarios->senha) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                    </div>

                    <!-- Tipo do Usuário -->
                    <div>
                        <label for="tipoUsuario" class="block text-sm font-medium text-gray-700">Tipo do Usuário</label>
                        <select id="tipoUsuario" name="tipoUsuario" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                            <option value="1" @if($usuarios->tipoUsuario === 'admin') selected @endif>Admin</option>
                            <option value="2" @if($usuarios->tipoUsuario === 'editor') selected @endif>Editor</option>
                            <option value="3" @if($usuarios->tipoUsuario === 'viewer') selected @endif>Viewer</option>
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
