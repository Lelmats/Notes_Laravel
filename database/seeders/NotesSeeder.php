<?php

namespace Database\Seeders;
namespace Database\Support;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes') -> insert([
            'titulo' => 'Mi primera nota', 
            'contenido' => 'Contenido de prueba', 
        ]);
    }
}
