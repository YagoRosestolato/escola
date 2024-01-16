<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Este campo é obrigatório',
            'email.email' => 'O email deve ser um email válido',
            'password.required' => 'Este campo é obrigatório',
        ]);

        $credenciais = $request->only('email', 'password');
        $autenticacao = Auth::attempt($credenciais);

        if (!$autenticacao) {
            return redirect()->route('login.index')->withErrors(['error'=>'Email ou senha inválidos.']);
        } 

        return redirect()->route('login.index')->with('success', 'Login efetuado com sucesso!');

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
