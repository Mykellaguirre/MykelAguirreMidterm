<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{

    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments',compact('equipments'));
    }


    public function create()
    {
        return view('equipments.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'manufacturer_man_Name' => 'required',
             'note_note' => 'required',
             'price' => 'required',
             'name' => 'required',
             'invoice_Num' => 'required',
             'type_category' => 'required',
             'specs' => 'required',
        ]);

        $equipment = Equipment::create([ 
             'manufacturer_man_Name' => $request->manufacturer_id, 
             'note_note' => $request->note_id, 
             'price' => $request->price,
             'name' => $request->name, 
             'invoice_Num' => $request->invoice_Num, 
             'type_category' => $request->type_id, 
             'specs' => $request->specs,  

        ]);

        return $this->index();
    }

    public function show($id)
    {
        $equipment= Equipment::find($id); 
        return view('equipments.show',compact('equipment'));
    }


    public function edit($id)
    {
        $equipment = Equipment::find($id);

        return view('equipments.edit')->with('equipment',$equipment);
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'manufacturer_man_Name' => 'required',
            'note_note' => 'required',
            'price' => 'required',
            'name' => 'required',
            'invoice_Num' => 'required',
            'type_category' => 'required',
            'specs' => 'required',
        ]); 
        $equipment = Equipment::find($id);
        // Getting values from the blade template form
        $equipment->manufacturer_man_Name =  $request->get('manufacturer_man_Name');
        $equipment->note_note = $request->get('note_note');
        $equipment->price = $request->get('price');
        $equipment->name =  $request->get('name');
        $equipment->invoice_Num =  $request->get('invoice_Num');
        $equipment->type_category =  $request->get('type_category');
        $equipment->specs =  $request->get('specs');
        
        $equipment->save();
 
        return redirect('/equipments')->with('success', 'Stock updated.'); 
  
        return Back()->withInput();
        //
    }


    public function destroy($id)
    {
        $equipment = Equipment::find($id);
        $equipment->delete(); // Easy right?
 
        return redirect('/equipments')->with('success', 'Stock removed.');
        //
    }
}