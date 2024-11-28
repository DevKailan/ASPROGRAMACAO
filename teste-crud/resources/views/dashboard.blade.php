<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Título da Dashboard -->
            <div class="bg-white p-6 rounded shadow-md">
                <h1 class="text-3xl font-bold text-blue-600">Bem-vindo(a) à Dashboard!</h1>
                <p class="mt-2 text-gray-600">Aqui você pode gerenciar categorias e produtos.</p>
            </div>

            <!-- Cards de Estatísticas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-100 p-6 rounded shadow">
                    <h2 class="text-xl font-bold text-blue-600">Categorias</h2>
                    <p class="text-2xl font-semibold text-blue-800">{{ $totalCategorias }}</p>
                    <a href="{{ route('categorias.index') }}" class="text-blue-500 hover:underline mt-2 block">Ver Categorias</a>
                </div>

                <div class="bg-green-100 p-6 rounded shadow">
                    <h2 class="text-xl font-bold text-green-600">Produtos</h2>
                    <p class="text-2xl font-semibold text-green-800">{{ $totalProdutos }}</p>
                    <a href="{{ route('produtos.index') }}" class="text-green-500 hover:underline mt-2 block">Ver Produtos</a>
                </div>

                <div class="bg-gray-100 p-6 rounded shadow">
                    <h2 class="text-xl font-bold text-gray-600">Perfil</h2>
                    <p class="text-2xl font-semibold text-gray-800">Gerencie sua conta</p>
                    <a href="{{ route('profile.edit') }}" class="text-gray-500 hover:underline mt-2 block">Editar Perfil</a>
                </div>
            </div>

            <!-- Outras Informações -->
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-bold text-gray-700">Informações Gerais</h2>
                <p class="mt-2 text-gray-600">
                    Este é o painel administrativo do sistema. Utilize as seções acima para navegar e gerenciar as
                    funcionalidades principais.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>