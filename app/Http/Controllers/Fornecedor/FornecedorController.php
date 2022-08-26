<?php

namespace App\Http\Controllers\Fornecedor;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use App\Http\Requests\Forncedor\RegisterRequest;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('fornecedores.index');
    }

    
    public function create()
    {
        return view('fornecedores.create');
    }

    
    public function store(RegisterRequest $request)
    {
        $requestData = $request->all();

        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password;

        Fornecedor::create($requestData);

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
