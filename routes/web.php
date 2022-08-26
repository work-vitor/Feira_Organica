<?php

use App\Http\Controllers\Fornecedor\Auth\LoginController;
use App\Http\Controllers\Fornecedor\FornecedorController;
use App\Http\Controllers\Produto\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['as' => 'produtos.'], function(){
    Route::get('produtos', [ProdutoController::class, 'index'])->name('index');
    Route::get('createP', [ProdutoController::class, 'create'])->name('createP.create')->middleware('auth');
    Route::post('createP', [ProdutoController::class, 'store'])->name('createP.store');
});


Route::group(['as' => 'fornecedores.'], function(){
    Route::get('fornecedores', [FornecedorController::class, 'index'])->name('index');
    Route::get('createF', [FornecedorController::class, 'create'])->name('createF.create');
    Route::post('createF', [FornecedorController::class, 'store'])->name('createF.store');
    //Login
    Route::get('loginF', [LoginController::class, 'create'])->name('loginF');
});

