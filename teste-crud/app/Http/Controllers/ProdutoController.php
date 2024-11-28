<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('produtos.index', compact('produtos'));
    }

    // Exibe o formulário para criar um novo produto
    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    // Armazena o novo produto no banco
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    // Exibe o formulário para editar um produto existente
    public function edit(Produto $produto)
    {
        $categorias = Categoria::all();
        return view('produtos.edit', compact('produto', 'categorias'));
    }

    // Atualiza o produto no banco
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    // Remove o produto do banco
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
