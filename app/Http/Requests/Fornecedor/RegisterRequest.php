<?php

namespace App\Http\Requests\Fornecedor;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\cpf;
use Illuminate\Validation\Rules\Unique;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => ['required', new Cpf, "unique:fornecedores,cpf"],
            'password' => ['required', 'min: 5', 'confirmed'],
            'segmento' => 'required',
            'celular' => ['required', 'size: 15'],
            'foto' => 'nullable',
        ];
    }
}
