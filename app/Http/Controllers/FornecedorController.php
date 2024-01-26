<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor', compact('fornecedor'));
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

            ], [
                'name.required' => 'Este campo é obrigatório',
                'cnpj.required' => 'Este campo é obrigatório',
                'endereco.required' => 'Este campo é obrigatório',
      
            ]);

            $fornecedor = new Fornecedor();
            $fornecedor->name = $request->name;
            $fornecedor->cnpj = $request->cnpj;
            $fornecedor->endereco = $request->endereco;

            $fornecedor->save();

            return redirect('/fornecedor');
            dd('Usuário salvo com sucesso!'); 
            return redirect('/fornecedor');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
