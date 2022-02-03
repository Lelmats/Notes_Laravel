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
    return view('welcome');
});
Route::get('add', function () {
    return view('add');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('notes', function () {
    $notes = [
        'Primer Nota',
        'Segunda Nota',
        'Tercer Nota',
        'Cuarta Nota'
    ];
    return view('notes', ['notes' => $notes]);
});
// Route::get('notas/actualización', function () {
//     return 'actualización';
// });
// Route::get('notas/notas_imagenes', function () {
//     return 'notas imagenes';
// });
// Route::get('notas/listados', function () {
//     return 'listados';
// });
// Route::get('notas/calendario', function () {
//     return 'calendario';
// });
