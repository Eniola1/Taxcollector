<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Seeder;



class StreetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Street::create([
            'street_name' => 'OLOFU',
            'community_id' => '2',
            'ward_id' => '1',
        ]);

        Street::create([
            'street_name' => 'IMOKE',
            'community_id' => '3',
            'ward_id' => '2',
        ]);

        Street::create([
            'street_name' => 'IDI ',
            'community_id' => '4',
            'ward_id' => '3',
        ]);

        Street::create([
            'street_name' => 'EMU',
            'community_id' => '3',
            'ward_id' => '4',
        ]);

        Street::create([
            'street_name' => 'IKAWO',
            'community_id' => '3',
            'ward_id' => '3',
        ]);
    }
}
