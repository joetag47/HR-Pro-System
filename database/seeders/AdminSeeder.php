<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'company_id' => 1
        ])->assignRole ('admin', 'business');
    }
}
