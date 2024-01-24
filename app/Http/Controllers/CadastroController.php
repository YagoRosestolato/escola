<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroUsers;


class CadastroController extends Controller
{

    public function index()
    {
        return view('novoCadastro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    {
        try {
            $request->validate([
                'name' => 'required',
                'lastName' => 'required',
                'email' => 'required|email|unique:cadastro_users',
                'password' => 'required',
                'role' => 'required|in:diretor,fornecedor',
            ], [
                'name.required' => 'Este campo é obrigatório',
                'lastName.required' => 'Este campo é obrigatório',
                'email.required' => 'Este campo é obrigatório',
                'email.email' => 'Digite um endereço de e-mail válido',
                'email.unique' => 'Este e-mail já está sendo usado',
                'password.required' => 'Este campo é obrigatório',
                'role.required' => 'Escolha uma opção entre diretor e fornecedor',
                'role.in' => 'Escolha uma opção válida entre diretor e fornecedor',
            ]);
        
            $cat = new CadastroUsers();
            $cat->name = $request->name;
            $cat->lastName = $request->lastName;
            $cat->email = $request->email;
            $cat->password = $request->password;
            $cat->role = $request->role;
            $cat->save();
        
                return redirect('/login');
    
            dd('Usuário salvo com sucesso!'); // Adicione esta linha para depurar
    
            return redirect('/login');
        } catch (\Exception $e) {
            dd($e->getMessage()); // Exiba mensagens de erro em caso de exceção
        }
    }
    
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
