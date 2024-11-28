@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-green-700">Produtos</h1>
<a href="{{ route('produtos.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded shadow-md transition duration-200">
    + Novo Produto
</a>

<table class="table-auto w-full mt-6 bg-white shadow-md rounded">
    <thead>
        <tr class="bg-green-100 text-green-700">
            <th class="px-4 py-2">Descrição</th>
            <th class="px-4 py-2">Categoria</th>
            <th class="px-4 py-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr class="border-t">
            <td class="px-4 py-2">{{ $produto->descricao }}</td>
            <td class="px-4 py-2">{{ $produto->categoria->nome ?? 'Sem Categoria' }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('produtos.edit', $produto) }}" class="text-green-600 hover:text-green-700 font-semibold">Editar</a>
                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-700 font-semibold ml-2">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection