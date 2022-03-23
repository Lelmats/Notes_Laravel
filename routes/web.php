<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Notes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $notes = DB::table('notes') ->get();

    return view('notes', ['notes' => $notes]);
}) -> name('list');


Route::get('add', function () {
    return view('add');
})->name('adding');

Route::post('create',function (Request $request){
    Notes::create([
        'titulo' => $request->input('title'),
        'contenido' => $request->input('content')
        ]);

        return redirect('/notes');

 })->name('notes.store');

Route::get('notes/{id}/edit', function($id){
    $notes = DB::table('notes')
    ->where('id', $id)
    ->first();
    
    return view('edit', ['notes' => $notes]);
})->name('notes.edit');