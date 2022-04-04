<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

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
    
            return redirect('/notes');
    
    }
    public function edit($id){
        $notes = DB::table('notes')
        ->where('id', $id)
        ->first();
        
        return view('edit', ['notes' => $notes]);
    }
}
