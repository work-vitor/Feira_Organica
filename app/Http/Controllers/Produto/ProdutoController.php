<?php

namespace App\Http\Controllers\Produto;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\Forncedor\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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

        if ($request->imagem->isValid()) {
            $nameFile = Str::of($request->nome)->slug('-') . '.' . $request->imagem->getClientOriginalExtension();
            $imagem = $request->imagem->storeAs('imagem/' . $request->pastaFornecedor, $nameFile);
            $requestData['imagem'] = $imagem;
            Produto::create($requestData);
            return 'certo';
        }

        return 'erro';
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
