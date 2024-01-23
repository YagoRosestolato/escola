<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('principal')->middleware('log.acesso');

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index');
Route::get('/cadastro/novo', 'App\Http\Controllers\CadastroController@create')->name('cadastro');
Route::post('/cadastro', 'App\Http\Controllers\CadastroController@store');




Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@create');
Route::post('/produtos', 'App\Http\Controllers\ProdutoController@store');
Route::middleware('autenticacao:padrao, fornecedor')->get('/produtos/apagar/{id}', 'App\Http\Controllers\ProdutoController@destroy');
Route::middleware('autenticacao:padraom, fornecedor')->get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutoController@edit');
Route::post('/produtos/{id}', 'App\Http\Controllers\ProdutoController@update');

Route::get('/login/{erro?}', 'App\Http\Controllers\LoginController@index')->name('login');

Route::post('/login', 'App\Http\Controllers\LoginController@autenticar')->name('login');


//Route::get('/login/novo', 'App\Http\Controllers\LoginController@create');
//Route::post('/login','App\Http\Controllers\LoginController@update');
