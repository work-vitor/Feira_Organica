<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fornecedor extends Authenticatable
{
    use HasFactory;

    protected $table = 'fornecedores';

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'password',
        'foto',
        'celular',
        'segmento'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
