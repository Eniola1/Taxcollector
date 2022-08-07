<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bcode;

class RevenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bcode::create([
            'revenue_name' => 'Ward A',
            'code' => '129028',
            'classification_id' => '1',
        ]);

        Bcode::create([
            'revenue_name' => 'Ward B',
            'code' => '10228',
            'classification_id' => '2',
        ]);

        Bcode::create([
            'revenue_name' => 'Ward C',
            'code' => '12636',
            'classification_id' => '3',
        ]);
    }
}
