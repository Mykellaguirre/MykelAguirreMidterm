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
        return view('manufacturer.show',compact('manufacturer'));
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