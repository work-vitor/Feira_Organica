<?php

namespace App\Http\Requests\Produto;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required',
            'categoria_id' => 'required',
            'preco' => 'required',
            'quantidade' => ['required', 'min: 1'],
        ];
    }
}
