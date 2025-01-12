<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath  = database_path('/data/alimentos.json');

        if (!File::exists($jsonPath)) {
            $this->command->error("El archivo JSON no se encontró en {$jsonPath}");
            return;
        }
        $jsonData = File::get($jsonPath);

        $data = json_decode($jsonData, true);

        if (is_null($data)) {
            $this->command->error("El archivo JSON no tiene un formato válido.");
            return;
        }

  
        DB::table('alimentos')->insert($data);
    }
}
