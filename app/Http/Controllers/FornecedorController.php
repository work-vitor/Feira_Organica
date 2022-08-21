<?php

namespace App\Http\Controllers;

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

    
    public function store(Request $request)
    {
        return $request->all();
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
