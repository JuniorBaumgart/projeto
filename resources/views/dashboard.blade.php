<x-app-layout>
    <style>
        .badges-dash {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            align-items: flex-start;
            padding: 0 30px;
            min-height: 200px;
            padding-bottom: 70px
        }

        .badge-dash {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 300px;
            height: 350px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .badge img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .badge h3 {
            font-size: 18px;
            margin: 10px 0;
            text-align: left;
            width: 100%;
            padding-left: 10px;
        }

        .badge p {
            font-size: 14px;
            color: #666;
            margin-top: auto;
            text-align: left;
            padding-left: 10px;
        }

        .badges-container {
            padding: 0 10%;
            width: 100%;
            box-sizing: border-box;
        }

        .bottom-bar {
            background-color: #000;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>    
    
    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
         
        </div>
    </div>

    <div class="py-12 badges-dash">
        @if (Route::has('tecnico.index'))
            <a href="{{ route('tecnico.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Tecnico') }}">
                <img class="rounded-md" src="../tecnicoImg.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Tecnico') }}</span>
            </a>
        @endif

        @if (Route::has('usuario.index'))
            <a href="{{ route('usuario.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Usuario') }}">
                <img class="rounded-md"  src="../usuarioImg.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Usuario') }}</span>
            </a>
        @endif

        @if (Route::has('categoria.index'))
            <a href="{{ route('categoria.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Categoria') }}">
                <img class="rounded-md" src="../categoriasImg.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Categoria') }}</span>
            </a>
        @endif
        
        @if (Route::has('chamado.index'))
            <a href="{{ route('chamado.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Chamado') }}">
                <img class="rounded-md" src="../chamadoImg.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Chamado') }}</span>
            </a>
        @endif
        
        
        @if (Route::has('historicoUsuario.index'))
            <a href="{{ route('historicoUsuario.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Historico Usuario') }}">
                <img class="rounded-md" src="../historico_usuario.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Historico Usuario') }}</span>
            </a>
        @endif

        @if (Route::has('historicoTecnico.index'))
            <a href="{{ route('historicoTecnico.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Historico Tecnico') }}">
                <img class="rounded-md" src="../historico_tecnico.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Historico Tecnico') }}</span>
            </a>
        @endif

        @if (Route::has('historicoChamado.index'))
            <a href="{{ route('historicoChamado.index') }}"
                class="badge-dash rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-black"
                role="link" aria-label="{{ __('Historico Chamado') }}">
                <img class="rounded-md" src="../historico_chamado.jpg" alt="Imagem 1">
                <span class="text-black font-bold">{{ __('Historico Chamado') }} </span>
            </a>
        @endif
    </div>

    <footer class="py-4 bottom-bar">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-sm">
                <span class="text-gray-200">© 2024 InovaTech, Inc.</span>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Terms</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Privacy</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Manage cookies</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Do not share my personal information</a>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-x"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok"></i></a>
                <a href="https://github.com/JuniorBaumgart/projeto" class="text-gray-400 hover:text-white"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
</x-app-layout>
