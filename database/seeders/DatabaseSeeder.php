<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(UserSeeder::class);
        Product::factory(10)->create();
    }
}
