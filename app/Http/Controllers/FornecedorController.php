<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {
        return view('fornecedor');
    }

    public function create()
    {
        return view('novoFornecedor');
    }

    public function store(Request $request)
{
    try {
        $request->validate([
            'name' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'empresa' => 'required',
        ], [
            'name.required' => 'Este campo é obrigatório',
            'cnpj.required' => 'Este campo é obrigatório',
            'endereco.required' => 'Este campo é obrigatório',
            'empresa.required' => 'Este campo é obrigatório',
        ]);

        $fornecedor = new Fornecedor(); 
        $fornecedor->name = $request->name;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->empresa = $request->empresa;
        $fornecedor->save();

        return redirect('/fornecedor')->with('success', 'Fornecedor cadastrado com sucesso!');
    } catch (\Exception $e) {
        return redirect('/fornecedor/novo')->with('error', 'Erro ao cadastrar fornecedor: ' . $e->getMessage());
    }
}
}
