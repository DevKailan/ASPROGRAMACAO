@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-green-700">Criar Novo Produto</h1>

<form method="POST" action="{{ route('produtos.store') }}" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf

    <div>
        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
        <input type="text" id="descricao" name="descricao"
            class="w-full border-gray-300 rounded shadow-sm focus:border-green-500 focus:ring-green-500"
            required>
    </div>

    <div>
        <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoria</label>
        <select id="categoria_id" name="categoria_id"
            class="w-full border-gray-300 rounded shadow-sm focus:border-green-500 focus:ring-green-500"
            required>
            <option value="">Selecione uma Categoria</option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit"
        class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded shadow-md transition duration-200">
        Salvar Produto
    </button>
</form>
@endsection