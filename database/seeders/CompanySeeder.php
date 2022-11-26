<?php

namespace Database\Seeders;

use App\Models\Company\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('companies')->truncate();

        Schema::enableForeignKeyConstraints();

        Company::query()->create([
            'name' => 'Bizzle Company',
            'sector_id' => 1,
            'address' => 'Kumasi',
            'email' => 'bizzlecompany@example.com',
        ]);
    }
}
