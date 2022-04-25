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

*/

Route::get('ex', function () { return view('welcome'); });

Route::get('/', 'NotesController@index') -> name('notes.index');

Route::get('add', 'NotesController@add' )->name('notes.adding');

Route::post('create', 'NotesController@create')->name('notes.store');

Route::get('notes/{id}/edit', 'NotesController@edit')->name('notes.edit');

Route::put('notes/{id}/edit', 'NotesController@update')->name('notes.update');