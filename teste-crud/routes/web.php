<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', function () {
        $totalCategorias = \App\Models\Categoria::count();
        $totalProdutos = \App\Models\Produto::count();
        return view('dashboard', compact('totalCategorias', 'totalProdutos'));
    })->name('dashboard');

    
    Route::resource('categorias', CategoriaController::class);

    
    Route::resource('produtos', ProdutoController::class);

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php'; 
