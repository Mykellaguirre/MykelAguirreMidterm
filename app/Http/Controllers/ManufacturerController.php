<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

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
        $data = $request->except('_method','_token','submit');

        $validator = Validator::make($request->all(), [
           'man_Name' => 'required|string|min:3',
           'sales_Info' => 'required|string|min:3',
           'tech_Support' => 'required|string|min:3',

        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        $manufacturer = Manufacturer::find($id);
  
        if($manufacturer->update($data)){
  
           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('manufacturers');
        }else{
           Session::flash('message', 'Data not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
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