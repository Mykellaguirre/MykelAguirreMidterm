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
             'manufacturer_id' => 'required',
             'note_id' => 'required',
             'price' => 'required',
             'name' => 'required',
             'invoice_Num' => 'required',
             'type_id' => 'required',
             'specs' => 'required',
        ]);

        $equipment = Equipment::create([ 
             'manufacturer_id' => $request->manufacturer_id, 
             'note_id' => $request->note_id, 
             'price' => $request->price,
             'name' => $request->name, 
             'invoice_Num' => $request->invoice_Num, 
             'type_id' => $request->type_id, 
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
            'manufacturer_id' => 'required',
            'note_id' => 'required',
            'price' => 'required',
            'name' => 'required',
            'invoice_Num' => 'required',
            'type_id' => 'required',
            'specs' => 'required',
        ]); 
        $manufacturer = Manufacturer::find($id);
        // Getting values from the blade template form
        $equipment->manufacturer_id =  $request->get('manufacturer_id');
        $equipment->note_id = $request->get('note_id');
        $equipment->price = $request->get('price');
        $equipment->name =  $request->get('name');
        $equipment->invoice_Num =  $request->get('invoice_Num');
        $equipment->type_id =  $request->get('type_id');
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