<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Equipment;


class ManufacturerController extends Controller
{

    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers',compact('manufacturers'));
    }


    public function create()
    {
        return view('manufacturers.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'man_Name' => 'required',
             'sales_Info' => 'required',
             'tech_Support' => 'required',
        ]);

        $manufacturer = Manufacturer::create([ 
             'man_Name' => $request->man_Name, 
             'sales_Info' => $request->sales_Info, 
             'tech_Support' => $request->tech_Support, 

        ]);

        return $this->index();
    }

    public function show($id)
    {
        $equipments = Equipment::all();
        $manufacturer= Manufacturer::find($id); 
        return view('manufacturers.show',compact('manufacturer'));
    }


    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);

        return view('manufacturers.edit')->with('manufacturer',$manufacturer);
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'man_Name'=>'required',
            'sales_Info'=>'required',
            'tech_Support'=>'required'
        ]); 
        $manufacturer = Manufacturer::find($id);
        // Getting values from the blade template form
        $manufacturer->man_Name =  $request->get('man_Name');
        $manufacturer->sales_Info = $request->get('sales_Info');
        $manufacturer->tech_Support = $request->get('tech_Support');
        $manufacturer->save();
 
        return redirect('/manufacturers')->with('success', 'Stock updated.'); 
  
        return Back()->withInput();
        //
    }


    public function destroy($id)
    {
        $manufacturer = Manufacturer::find($id);
        $manufacturer->delete(); // Easy right?
 
        return redirect('/manufacturers')->with('success', 'Stock removed.');
        //
    }
}