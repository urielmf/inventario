<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Electrónica',
        ]);
        DB::table('categories')->insert([
            'name' => 'Linea Blanca',
        ]);
        DB::table('categories')->insert([
            'name' => 'Deportes',
        ]);
        DB::table('categories')->insert([
            'name' => 'Alimentos',
        ]);
        DB::table('categories')->insert([
            'name' => 'Jardin',
        ]);
    }
}
