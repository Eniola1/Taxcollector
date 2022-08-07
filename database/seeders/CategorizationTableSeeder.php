<?php

namespace Database\Seeders;

use App\Models\Categorization;
use Illuminate\Database\Seeder;

class CategorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Categorization::create([
            'category_name' => 'Private Residential',
            'category_description' => 'This is private residential',
        ]);

        Categorization::create([
            'category_name' => 'Commercial',
            'category_description' => 'This is Commercial',
        ]);

    }
}

