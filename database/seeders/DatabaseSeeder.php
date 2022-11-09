<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BusinessTypesSeeder::class,
            CompanySeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
