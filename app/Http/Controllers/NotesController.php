<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use Illuminate\Validation\Rules\RequiredIf;

class NotesController extends Controller
{
    public function index() {
        $notes = Notes::all();
    
        return view('notes', ['notes' => $notes]);
    }
    public function add() {
        return view('add');
    }
    public function create(Request $request){
        Notes::create([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content')
            ]);
    
            return redirect('/');
    
    }
    public function edit($id){
        $notes = Notes::find($id);
        
        return view('edit', ['notes' => $notes]);
    }
    public function update(Notes $notes, Request $request){
        $notes->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/');
    }
}
