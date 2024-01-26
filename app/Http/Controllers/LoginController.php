<?php

namespace App\Http\Controllers;

use App\Models\CadastroUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha inválidos';
        };
        if ($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para ter acesso a pagina';
        };
        return view('login', ['erro' => $erro]);
    }


    public function autenticar(Request $request)
    {

        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $feedback = [
            'email.required' => 'O email deve ser preenchido',
            'email.email' => 'O email deve ser um email válido',
            'password.required' => 'A senha deve ser preenchida'
        ];

        $request->validate($rules, $feedback);

        $email = $request->get('email');
        $password = $request->get('password');

        $user = new CadastroUsers();
        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('login', ['erro' => 1]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function sair()
    {
        echo 'sair';
    }
}
