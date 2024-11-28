<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos via mass assignment
    protected $fillable = ['nome', 'preco'];

    // Relacionamento: Uma categoria tem muitos produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
