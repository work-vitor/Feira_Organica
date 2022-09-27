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
        $produtos = Produto::all();
        $produtos = Produto::orderBy('nome')->paginate(5);
        return view('produtos.index', compact('produtos'));
        
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
            $imagem = $request->imagem->storeAs('imagem/produto' , $nameFile);
            $requestData['imagem'] = $imagem;
        }

        Produto::create($requestData);
        return redirect()
            ->route('produtos.index')
            ->with('success', 'Conta criada com sucesso! Efetue Login');

        return 'erro';
    }

    
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.produtos.show');
    }

    
    public function destroy($id)
    {
        //
    }

    public function search(Request $request) {
        $filters = $request->except('_token');
        $produtos = Produto::where('nome','LIKE',"%$request->search%")
                            ->orWhere('preco','LIKE', "%$request->search%")
                            ->paginate();

        return view('produtos.index', compact('produtos', 'filters'));
    }

    public function show() {
        $produtos = Produto::all();
        $produtos = Produto::orderBy('nome')->paginate(5);
        return view('produtos.show', compact('produtos'));
    }
}
