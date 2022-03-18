<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{

    public function index()
    {
        $types = Type::all();
        return view('types',compact('types'));
    }


    public function create()
    {
        return view('types.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'category' => 'required',
             
        ]);

        $type = Type::create([ 
             'category' => $request->category, 
         
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $type= Type::find($id); 
        return view('types.show',compact('type'));
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