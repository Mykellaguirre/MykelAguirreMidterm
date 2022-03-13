<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{

    public function index()
    {
        $events = Calendar::all();
        return response()->json($events,status: 200);
        return view('calendar');
    }


    public function create()
    {
        return view('calendar.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'start_at' => 'required',
             'end_at' => 'required',

        ]);

        $calendar = Calendar::create([ 
             'title' => $request->title, 
             'start_at' =>$request->date('start_at'),
             'end_at' => $request->date('end_at'),
        ]);

        return view('calendar');
    }

    public function show($id)
    {
        $calendar = Calendar::find($id);
        return view('calendar.show',compact('calendar'));
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