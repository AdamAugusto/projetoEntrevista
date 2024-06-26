<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('cadastroCategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomeCategoria' => 'required|unique:categorias,nome',
        ], [
            "nomeCategoria.unique" => "Categoria já cadastrada"
        ]);

        $categoria = new Categoria();
        $categoria->nome = $request->input('nomeCategoria');
        $categoria->save();
        return redirect('/');
    }
}
