<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'name' => 'Cuernavaca'
        ]);
        DB::table('offices')->insert([
            'name' => 'Yautepec'
        ]);
        DB::table('offices')->insert([
            'name' => 'Cuautla'
        ]);
        DB::table('offices')->insert([
            'name' => 'Acapulco'
        ]);
    }
}
