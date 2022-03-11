<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'titulo' => 'Mi primera nota',
            'contenido' => 'Contenido de prueba',
            
        ]);

        DB::table('notes')->insert([
            'titulo' => 'Instalación de laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);

        DB::table('notes')->insert([
            'titulo' => 'Rutas y JSON',
            'contenido' => File::get(__DIR__.'/notas/routes-json.html'),
        ]);

        DB::table('notes')->insert([
            'titulo' => 'Front Controler',
            'contenido' => '<p>Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.</p>'
        ]);

        DB::table('notes')->insert([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => File::get(__DIR__.'/notas/route-parameter-constrains.html'),
        ]);
    }
}
