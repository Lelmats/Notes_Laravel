<?php

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
    $notas = DB::table('notes') ->get();

    return view('notes', ['notes' => $notas]);
}) -> name('list');


Route::get('add', function () {
    return view('add');
})->name('adding');

Route::get('notes/{id}/edit', function($id){
    $notas = DB::table('notes')
    ->where('id', $id)
    ->first();
    
    return view('edit', ['notes' => $notas]);
})->name('notes.edit');