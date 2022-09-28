<?php

namespace Database\Seeders;

use App\Models\Company\BusinessType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BusinessTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('business_types')->truncate();

        Schema::enableForeignKeyConstraints();


        $data = [
            'Arts, entertainment and recreation',
            'Banking & Financial Services',
            'Beauty industry',
            'Educational services',
            'Food and Nutrition Sector',
            'Health care and social assistance',
            'Information Technology',
            'Information and cultural industries',
            'Insurance',
            'Manufacturing',
            'Mining, quarrying, and oil and gas',
            'Non-Governmental Organisations',
            'Other services',
            'Public administration',
            'Real estate, rental and leasing',
            'Religious Organisations',
            'Retail trade',
            'Automotive & Transportation Services',
            'Utilities',
            'Waste management',
            'Wholesale trade',
            'Advertising',
            'Agri-Business',
            'Agriculture',
            'Beverages',
            'Business Promotion and Consultancy Services',
            'Chemicals',
            'Consultancy',
            'Electricals & Electronics',
            'Energy',
            'Environmental & Sanitation',
            'Exports',
            'Garments, Textiles & Leather',
            'Hospitality & Tourism',
            'Information & Communication Technology',
            'Metals & Building Products',
            'Oil & Gas',
            'Pharmaceuticals & Herbal',
            'Printing, Stationery & Packaging',
            'Rubber & Plastic',
            'Toiletries & Cosmetics',
            'Wood Processing',
            'Others',
        ];

        foreach ($data as $datum) {
            BusinessType::query()->create(['name' => $datum]);
        }
    }
}
