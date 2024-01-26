<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class DiretorController extends Controller
{

    public function index()
    {
        $produto = Produto::all();
        return view('diretor', compact('produto'));
    }
}
