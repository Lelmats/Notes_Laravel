<?php

namespace Database\Seeders;
namespace Database\Support;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call('NotesSeeder');
    }
}
