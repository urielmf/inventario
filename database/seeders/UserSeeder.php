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
            'username' => 'admin',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('123456789ab')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Capturista',
            'username' => 'capturista',
            'email' => 'capturista@gmail.com',
            'password' => bcrypt('123456789ab')
        ])->assignRole('Capturista');

        User::create([
            'name' => 'Gestor',
            'username' => 'gestor',
            'email' => 'gestor@gmail.com',
            'password' => bcrypt('123456789ab')
        ])->assignRole('Gestor');

        
    }
}
