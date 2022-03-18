<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $capturista = Role::create(['name' => 'Capturista']);
        $gestor = Role::create(['name' => 'Gestor']);
        $administrador = Role::create(['name' => 'Administrador']);

        Permission::create(['name'=>'products.index'])->syncRoles([$capturista,$administrador]);
        Permission::create(['name'=>'products.create'])->syncRoles([$capturista,$administrador]);
        Permission::create(['name'=>'products.edit'])->syncRoles([$capturista,$administrador]);
        Permission::create(['name'=>'products.destroy'])->syncRoles([$capturista,$administrador]);
    }
}
