<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Manufacturer;
use App\Models\Note;
use App\Models\Type;

class EquipmentController extends Controller
{

    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments',compact('equipments'));
    }


    public function create()
    {
        $manufacturers=Manufacturer::all();
        $notes = Note::all();
        $types = Type::all();
        return view('equipments.create',compact('manufacturers','notes','types'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'manufacturer_id' => 'required',
             'note_id' => 'required',
             'price' => 'required',
             'name' => 'required',
             'invoice_id' => 'required',
             'type_id' => 'required',
             #'processor' => 'required',
             #'screen_size' => 'required',
             #'battery' => 'required',

        ]);

        $equipment = Equipment::create([ 
           
           
             'price' => $request->price,
             'name' => $request->name, 
             'invoice_id' => $request->invoice_id, 
             'manufacturer_id' => $request->manufacturer_id,
             'note_id' => $request->note_id,
             'type_id' => $request->type_id,
             
             #'processor' => $request->processor,  
             #'screen_size' => $request->screen_size,  
             #'battery' => $request->battery,  


        ]);

        return view ('equipments.show',compact('equipment'));
    }

    public function show($id)
    {
        $equipment= Equipment::find($id); 
        return view('equipments.show',compact('equipment'));
    }


    public function edit($id)
    {
        $equipment = Equipment::find($id);
        $manufacturers=Manufacturer::all();
        $notes = Note::all();
        $types = Type::all();

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
            'invoice_id' => 'required',
            'type_id' => 'required',
            #'processor' => 'required',
            #'screen_size' => 'required',

            #'battery' => 'required',

        ]); 
        $equipment = Equipment::find($id);
        // Getting values from the blade template form
        $equipment->manufacturer_id =  $request->get('manufacturer_id');
        $equipment->note_id = $request->get('note_id');
        $equipment->price = $request->get('price');
        $equipment->name =  $request->get('name');
        $equipment->invoice_id =  $request->get('invoice_Num');
        $equipment->type_id =  $request->get('type_id');
        #$equipment->processor =  $request->get('processor');
        #$equipment->screen_size =  $request->get('screen_size');

        #$equipment->battery =  $request->get('battery');

        
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