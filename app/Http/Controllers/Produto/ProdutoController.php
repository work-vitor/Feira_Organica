<?php

namespace App\Http\Controllers\Produto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produtos.index');
    }

    
    public function create()
    {
        return view('produtos.create');
    }

    
    public function store(Request $request)
    {
        return $request->all();
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
