<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Zone::create([
            'zone_name' => 'IBEJU LEKKI',
            'zone_code' => 'IBL',
            'zone_description' => 'This is Ibeju Lekki Zone',
        ]);

        Zone::create([
            'zone_name' => 'COSTAL',
            'zone_code' => 'COT',
            'zone_description' => 'This is Costal Zone',
        ]);

        Zone::create([
            'zone_name' => 'OGUNFAYO',
            'zone_code' => 'OGF',
            'zone_description' => 'This is Ogunfayo Zone',
        ]);

        Zone::create([
            'zone_name' => 'BOGIJE',
            'zone_code' => 'BOG',
            'zone_description' => 'This is Bogije Zone',
        ]);
    }
}

