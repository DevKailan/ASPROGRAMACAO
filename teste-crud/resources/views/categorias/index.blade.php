@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-blue-700">Categorias</h1>
<a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded shadow-md transition duration-200">
    + Nova Categoria
</a>

<table class="table-auto w-full mt-6 bg-white shadow-md rounded">
    <thead>
        <tr class="bg-blue-100 text-blue-700">
            <th class="px-4 py-2">Nome</th>
            <th class="px-4 py-2">Preço</th>
            <th class="px-4 py-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr class="border-t">
            <td class="px-4 py-2">{{ $categoria->nome }}</td>
            <td class="px-4 py-2">R$ {{ number_format($categoria->preco, 2, ',', '.') }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('categorias.edit', $categoria) }}" class="text-blue-600 hover:text-blue-700 font-semibold">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="inline">
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