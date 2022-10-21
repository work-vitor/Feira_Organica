<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['name' => 'Verduras'],
            ['name' => 'Frutas'],
            ['name' => 'Carnes'],
            ['name' => 'Frutos do Mar'],
            ['name' => 'Especiarias']
        ];

        for ($i = 0; $i < 5; $i++) {
            DB::table('categorias')->insert([$categorias[$i]]);
        }
        
    }
}
