<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  
    public function index()
    {
        return 'index';
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
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
