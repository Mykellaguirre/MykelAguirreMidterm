<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::all();
        return view('notes',compact('notes'));
    }


    public function create()
    {
        return view('notes.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'note' => 'required',
             
        ]);

        $note = Note::create([ 
             'note' => $request->note, 
         
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $note= Note::find($id); 
        return view('notes.show',compact('notes'));
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