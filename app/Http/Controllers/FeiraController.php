<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feiras;
use App\Http\Requests\StoreUpdateFeira;

class FeiraController extends Controller
{
    public function index() {
        $feiras = Feiras::all();
        return view ('feiras.index', compact('feiras'));
    }

    public function create() {
        return view('feiras.create');
    }

    public function store(StoreUpdateFeira $request) {
        Feiras::create($request->all());
        return redirect()->route('feiras.index');
    }
}
