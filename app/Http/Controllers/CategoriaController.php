<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  
    public function index()
    {
        $categorias = Categoria::all();
        $data = [
            'categorias'=>$categorias,
        ];
        return view('categorias.index',$data);
    }


    public function create()
    {
        return view('categorias.create');
    }

 
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->codigo = $request->codigo;
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        return $id;
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        return $id;
    }
}
