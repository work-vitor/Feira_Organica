<?php

namespace App\Http\Requests\Forncedor;

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
            'name' => 'required',
            'password' => ['required', 'min: 5'],
            'segmento' => 'required',
            'celular' => ['required', 'size: 15'],
            'foto' => 'nullable',
        ];
    }
}
