<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria;

class Produto extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'categoria_id',
        'preco',
        'quantidade',
        'tp_unidade',
        'imagem'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria'); // exibir os dados da categoria na view do produtos
    }
}
