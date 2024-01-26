<?php

use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('principal')->middleware('log.acesso');

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index');
Route::get('/cadastro/novo', 'App\Http\Controllers\CadastroController@create')->name('cadastro');
Route::post('/cadastro', 'App\Http\Controllers\CadastroController@store');

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@create');
Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store');
Route::get('/produtos/apagar/{id}', 'App\Http\Controllers\ProdutoController@destroy');
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutoController@edit');
Route::post('/produtos/{id}', 'App\Http\Controllers\ProdutoController@update');

Route::get('/login/{erro?}', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@autenticar')->name('login');

Route::get('/fornecedor/novo', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/fornecedor/novo', [FornecedorController::class, 'store'])->name('fornecedor.store');

Route::get('/lista-fornecedor', 'App\Http\Controllers\ListaFornecedorController@index');

Route::middleware('autenticacao:padrao, home')
    ->get('/home', 'App\Http\Controllers\HomeController@index')
    ->name('app.home');
Route::middleware('autenticacao:padrao, diretor')
    ->get('/diretor', 'App\Http\Controllers\DiretorController@index')
    ->name('app.diretor');
Route::middleware('autenticacao:padrao, fornecedor')
    ->get('/fornecedor', 'App\Http\Controllers\FornecedorController@index')
    ->name('app.fornecedor');
Route::middleware('autenticacao:padrao')->get('/sair', 'App\Http\Controllers\LoginController@sair')->name('app.sair');


// Route::middleware(['autenticacao:padrao, home', 'diretor'])->get('/diretor', 'App\Http\Controllers\HomeController@index')->name('app.home');

// Route::middleware(['autenticacao:padrao, fornecedor', 'fornecedor'])->get('/fornecedor', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedor');


//Route::get('/login/novo', 'App\Http\Controllers\LoginController@create');
//Route::post('/login','App\Http\Controllers\LoginController@update');
