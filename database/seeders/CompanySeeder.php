<?php

namespace Database\Seeders;

use App\Models\Company\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::query()->create([
            'name' => 'Bizzle Company',
            'sector_id' => 1,
            'address' => 'Kumasi',
            'email' => 'bizzlecompany@example.com',
        ]);
    }
}
