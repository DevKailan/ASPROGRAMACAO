<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Lista todas as categorias
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    // Exibe o formulário para criar uma nova categoria
    public function create()
    {
        return view('categorias.create');
    }

    // Armazena a nova categoria no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria criada com sucesso!');
    }

    // Exibe o formulário para editar uma categoria existente
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    // Atualiza a categoria no banco
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria atualizada com sucesso!');
    }

    // Remove a categoria do banco
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria excluída com sucesso!');
    }
}
