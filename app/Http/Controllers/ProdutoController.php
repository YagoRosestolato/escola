<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::all();
        return view('produtos', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'Este campo é obrigatório',
            'description.required' => 'Este campo é obrigatório',
            'price.required' => 'Este campo é obrigatório',
        ]);


        $cat = new Produto();
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->price = $request->price;
        $cat->save();
        return redirect('/produtos');
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
        $cat = Produto::find($id);
        if (isset($cat)) {
            return view('editaProduto', compact('cat'));
        }

        return redirect('/produtos');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cat = Produto::find($id);
        if (isset($cat)) {
            $cat->name = $request->input('name');
            $cat->description = $request->input('description');
            $cat->price = $request->input('price');
            $cat->save();
        }

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Produto::find($id);
        if (isset($cat)) {
            $cat->delete();
            return redirect('/produtos');
        }
    }
}
