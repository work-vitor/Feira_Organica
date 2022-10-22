<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feiras extends Model
{
    use HasFactory;

    protected $table = 'feiras';

    protected $fillable = ['nome', 'data', 'cep', 'rua','bairro','cidade'];
}
