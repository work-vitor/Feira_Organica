<?php

namespace App\Http\Controllers\Fornecedor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fornecedor\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function create(){
        return view('fornecedores.auth.login');
    }

    public function store(LoginRequest $request){
        
        $credentials = [
            'cpf' => $request->cpf,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect()
                ->route('fornecedores.index');
        }

        return redirect()
            ->route('fornecedores.loginF')
            ->with('warning', 'Autenticaçao falhou')
            ->withInput();
    }

    public function destroy(){
        Auth::logout();
        return redirect()
            ->route('fornecedores.loginF');
    }
}
