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
        'feira_id',
        'fornecedor_id',
        'imagem'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria'); // exibir os dados da categoria na view do produtos
    }

    public function feira()
    {
        return $this->belongsTo('App\Models\Feiras'); // exibir os dados da categoria na view do produtos
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Models\Fornecedor'); // exibir os dados da categoria na view do produtos
    }
}
