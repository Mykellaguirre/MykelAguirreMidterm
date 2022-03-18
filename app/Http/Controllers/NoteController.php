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
        return view('notes.show',compact('note'));
    }


    public function edit($id)
    {
        $note = Note::find($id);

        return view('notes.edit')->with('note',$note);
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'note'=>'required',
           
        ]); 
        $note = Note::find($id);
        // Getting values from the blade template form
        $note->note =  $request->get('note');
       
        $note->save();
 
        return redirect('/notes')->with('success', 'employee updated.'); 
  
        return Back()->withInput();
        //
    }


    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete(); // Easy right?
 
        return redirect('/notes')->with('success', 'Stock removed.');
        //
    }
}