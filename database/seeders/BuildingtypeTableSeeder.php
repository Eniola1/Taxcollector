<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class BuildingtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'type' => 'Medium',
        ]);

        Admin::create([
            'type' => 'Small',
        ]);

        Admin::create([
            'type' => 'Large',
        ]);
    }
}
