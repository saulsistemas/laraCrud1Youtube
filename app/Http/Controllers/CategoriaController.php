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
        return 'create';

    }

 
    public function store(Request $request)
    {
        return 'store';
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
