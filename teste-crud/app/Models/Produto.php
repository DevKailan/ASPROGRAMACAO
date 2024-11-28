<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos via mass assignment
    protected $fillable = ['descricao', 'categoria_id'];

    // Relacionamento: Um produto pertence a uma categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
