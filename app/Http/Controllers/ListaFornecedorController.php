<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ListaFornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('listaFornecedor', compact('fornecedor'));
    }
}
