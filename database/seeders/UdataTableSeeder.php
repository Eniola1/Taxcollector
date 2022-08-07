<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Udata;

class UdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Udata::create([
            'code' => 'U',
            'code_title' => 'Under construction',
        ]);

        Udata::create([
            'code' => 'O',
            'code_title' => 'Occupied',
        ]);

        Udata::create([
            'code' => 'E',
            'code_title' => 'Empty',
        ]);
    }
}
