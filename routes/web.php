<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;



Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');

