<?php

namespace App\Http\Controllers\Fornecedor;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use App\Http\Requests\Fornecedor\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('fornecedores.index');
    }

    
    public function create()
    {
        return view('fornecedores.auth.create');
    }

    
    public function store(RegisterRequest $request)
    {
        $requestData = $request->all();

        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password;

        if ($request->foto->isValid()) {
            $nameFile = Str::of($request->foto)->slug('-') . '.' . $request->foto->getClientOriginalExtension();
            $imagem = $request->foto->storeAs('imagem/fornecedor' , $nameFile);
            $requestData['foto'] = $imagem;
            Fornecedor::create($requestData);
            return redirect()
                ->route('fornecedores.loginF')
                ->with('success', 'Conta criada com sucesso! Efetue Login');
        }

        
        
        

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}