<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Capturista',
            'email' => 'capturista@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Capturista');

        User::create([
            'name' => 'Gestor',
            'email' => 'gestor@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Gestor');

        
    }
}
