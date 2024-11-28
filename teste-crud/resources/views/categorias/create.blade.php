@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-blue-700">Criar Nova Categoria</h1>

<form method="POST" action="{{ route('categorias.store') }}" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf

    <div>
        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
        <input type="text" id="nome" name="nome"
            class="w-full border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring-blue-500"
            required>
    </div>

    <div>
        <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
        <input type="number" id="preco" name="preco" step="0.01"
            class="w-full border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring-blue-500"
            required>
    </div>

    <button type="submit"
        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded shadow-md transition duration-200">
        Salvar Categoria
    </button>
</form>
@endsection