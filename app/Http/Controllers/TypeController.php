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
        $type = Type::find($id);

        return view('types.edit')->with('type',$type);
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category'=>'required',
           
        ]); 
        $type = Type::find($id);
        // Getting values from the blade template form
        $type->type =  $request->get('category');
       
        $type->save();
 
        return redirect('/types')->with('success', 'employee updated.'); 
  
        return Back()->withInput();
        //
    }


    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete(); // Easy right?
 
        return redirect('/types')->with('success', 'Stock removed.');
        //
    }
}