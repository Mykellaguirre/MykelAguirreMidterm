<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
    $manufacturers = Manufacturer::all();
    return view ('manufacturers',['manufacturers'=> $manufacturers,]);
    }
    //


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

        $todo = Todo::create([ 
             'man_Name' => $request->man_Name, 
             'sales_Info' => $request->sales_Info, 
             'tech_Support' => $request->tech_Support, 

        ]);

        return $this->index();
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }



}
