<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Ward::create([
            'ward_name' => 'Ward A',
           'ward_code' => 'WDA',
            'zone_id' => '1',
            'ward_description' => 'This is Ward A'
        ]);

        Ward::create([
            'ward_name' => 'Ward B',
            'ward_code' => 'WDB',
            'zone_id' => '1',
            'ward_description' => 'This is Ward B'
        ]);

        Ward::create([
            'ward_name' => 'Ward CI',
            'ward_code' => 'WCI',
            'zone_id' => '2',
            'ward_description' => 'This is Ward CI'
        ]);

        Ward::create([
            'ward_name' => 'Ward CII',
            'ward_code' => 'WII',
            'zone_id' => '2',
            'ward_description' => 'This is Ward CII'
        ]);

        Ward::create([
            'ward_name' => 'Ward D',
            'ward_code' => 'WDD',
            'zone_id' => '2',
            'ward_description' => 'This is Ward D'
        ]);

        Ward::create([
            'ward_name' => 'Ward E',
            'ward_code' => 'WDE',
            'zone_id' => '3',
            'ward_description' => 'This is Ward E'
        ]);

        Ward::create([
            'ward_name' => 'Ward F',
            'ward_code' => 'WDF',
            'zone_id' => '4',
            'ward_description' => 'This is Ward F'
        ]);
    }
}

