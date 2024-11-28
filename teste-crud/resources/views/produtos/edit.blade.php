@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-green-700">Editar Produto</h1>

<form method="POST" action="{{ route('produtos.update', $produto) }}" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
        <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao }}"
            class="w-full border-gray-300 rounded shadow-sm focus:border-green-500 focus:ring-green-500"
            required>
    </div>

    <div>
        <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoria</label>
        <select id="categoria_id" name="categoria_id"
            class="w-full border-gray-300 rounded shadow-sm focus:border-green-500 focus:ring-green-500"
            required>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $produto->categoria_id == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nome }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit"
        class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded shadow-md transition duration-200">
        Atualizar Produto
    </button>
</form>
@endsection