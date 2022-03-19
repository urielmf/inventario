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
            'last_name_p' => 'martinez',
            'last_name_m' => 'flores',
            'username' => 'admin',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('123456789ab'),
            'access' => 1,
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Capturista',
            'last_name_p' => 'martinez',
            'last_name_m' => 'flores',
            'username' => 'capturista',
            'email' => 'capturista@gmail.com',
            'password' => bcrypt('123456789ab'),
            'access' => 1,
        ])->assignRole('Capturista');

        User::create([
            'name' => 'Gestor',
            'last_name_p' => 'martinez',
            'last_name_m' => 'flores',
            'username' => 'gestor',
            'email' => 'gestor@gmail.com',
            'password' => bcrypt('123456789ab'),
            'access' => 1,
        ])->assignRole('Gestor');

        
    }
}
