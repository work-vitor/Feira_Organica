<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feiras;
use App\Http\Requests\StoreUpdateFeira;

class FeiraController extends Controller
{
    public function index() {
        $feiras = Feiras::all();
        $feiras = Feiras::orderBy('nome')->paginate(5);
        return view ('feiras.index', compact('feiras'));
    }

    public function create() {
        return view('feiras.create');
    }

    public function store(StoreUpdateFeira $request) {
        Feiras::create($request->all());
        return redirect()->route('feiras.index');
    }

    public function search(Request $request) {
        $filters = $request->except('_token');
        $feiras = Feiras::where('nome','LIKE',"%$request->search%")
                            ->orWhere('bairro','LIKE', "%$request->search%")
                            ->paginate();

        return view('feiras.index', compact('feiras', 'filters'));
    }
}
