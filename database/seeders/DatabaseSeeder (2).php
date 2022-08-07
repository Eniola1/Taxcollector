<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\Zone;
use App\Models\Community;
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
        // $this->call(UserTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        $this->call(WardTableSeeder::class);
        $this->call(CommunityTableSeeder::class);
        $this->call(ClassificationTableSeeder::class);
        // Zone::create([
        //     'zone_name' => 'Itire',
        //     'ward_id' => '2',
        //     'zone_description' => 'Oba side'
        // ]);

        // Zone::create([
        //     'zone_name' => 'Ijesha',
        //     'ward_id' => '1',
        //     'zone_description' => 'Baale of Ijesha'
        // ]);

        // Zone::create([
        //     'zone_name' => 'Itire',
        //     'ward_id' => '3',
        //     'zone_description' => 'Baale of Itire'
        // ]);

        // Community::create([
        //     'community_name' => 'Yaba',
        //     'ward_id' => '2',
        //     'community_description' => 'This is Shitta area'
        // ]);

        // Community::create([
        //     'community_name' => 'Lawanson',
        //     'ward_id' => '1',
        //     'community_description' => 'This is Shakushaku street'
        // ]);

        // Community::create([
        //     'community_name' => 'Johnson',
        //     'ward_id' => '1',
        //     'community_description' => 'This is johnson street'
        // ]);

        // Ward::create([
        //     'ward_name' => 'Fith Hotels',
        //     'community_id' => '1',
        //     'zone_id' => '1',
        //     'ward_description' => 'Fith hotels is nice'
        // ]);

        // Ward::create([
        //     'ward_name' => 'Ok foods',
        //     'community_id' => '2',
        //     'zone_id' => '2',
        //     'ward_description' => 'Closer to church'
        // ]);

        // Ward::create([
        //     'ward_name' => 'Ladipo',
        //     'community_id' => '3',
        //     'zone_id' => '2',
        //     'ward_description' => 'Ladipo market'
        // ]);

        // \App\Models\User::factory(10)->create();
    }
}
