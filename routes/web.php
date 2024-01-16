<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index');
Route::get('/cadastro/novo', 'App\Http\Controllers\CadastroController@create');
Route::post('/cadastro', 'App\Http\Controllers\CadastroController@store');

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@create');
Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store');
Route::get('/produtos/apagar/{id}', 'App\Http\Controllers\ProdutoController@destroy');
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutoController@edit');
Route::post('/produtos/{id}', 'App\Http\Controllers\ProdutoController@update');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::get('/login/novo', 'App\Http\Controllers\LoginController@create');
Route::post('/login','App\Http\Controllers\LoginController@update');
