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

        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Este campo é obrigatório',
            'lastName.required' => 'Este campo é obrigatório',
            'email.required' => 'Este campo é obrigatório',
            'password.required' => 'Este campo é obrigatório',
        ]);
        $cat = new CadastroUsers();
        $cat->name = $request->name;
        $cat->lastName = $request->lastName;
        $cat->email = $request->email;
        $cat->password = $request->password;
        $cat->save();
        return redirect('/login');
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
