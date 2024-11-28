<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'AS PROGRAMACAO WEB' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* TailwindCSS Inline Fallback */
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        /* Resumo de estilos aqui para fallback */
        /* Copie o conteúdo gerado no build de produção do Tailwind e cole aqui */
    </style>
    @endif
</head>

<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-lg font-bold">
                <a href="{{ route('dashboard') }}" class="hover:text-gray-300">AS PROGRAMACAO WEB</a>
            </h1>
            <nav class="space-x-4">
                @auth
                <a href="{{ route('categorias.index') }}" class="hover:text-gray-300">Categorias</a>
                <a href="{{ route('produtos.index') }}" class="hover:text-gray-300">Produtos</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-gray-300">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                <a href="{{ route('register') }}" class="hover:text-gray-300">Registrar</a>
                @endauth
            </nav>
        </div>
    </header>

   
    <main class="container mx-auto py-8">
        @yield('content') 
    </main>


</html>