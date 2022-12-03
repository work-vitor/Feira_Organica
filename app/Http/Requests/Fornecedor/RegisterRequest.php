<?php

namespace App\Http\Requests\Fornecedor;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\cpf;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
            'email' => ['required', 'unique:fornecedores,email->ignore(Auth::id())'],
            'cpf' => ['required', new Cpf, Rule::unique('fornecedores')->ignore(Auth::id())],
            'password' => ['required', 'min: 5', 'confirmed'],
            'segmento' => 'required',
            'celular' => ['required', 'size: 15'],
            'foto' => 'nullable',
        ];
    }
}
