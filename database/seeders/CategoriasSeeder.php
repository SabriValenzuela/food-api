<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('data/categorias.json'));
        $data = json_decode($json, true);

  
        DB::table('categorias')->insert($data);
    }
}
