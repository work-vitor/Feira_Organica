<?php

namespace App\Http\Controllers\Produto;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\Forncedor\RegisterRequest;
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
        $requestData = $request->all();

        Produto::create($requestData);
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
