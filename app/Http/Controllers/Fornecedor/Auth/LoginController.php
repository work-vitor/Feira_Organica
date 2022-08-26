<?php

namespace App\Http\Controllers\Fornecedor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function create(){
        return view('fornecedores.auth.login');
    }
}
