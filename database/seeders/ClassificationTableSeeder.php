<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Seeder;

class ClassificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Classification::create([
            'classification_name' => 'School',
            'class_description' => 'This is School classification',
        ]);

        Classification::create([
            'classification_name' => 'Hotel & Hospitality',
            'class_description' => 'This is Hotel & Hospitality classification',
        ]);

        Classification::create([
            'classification_name' => 'Health Care',
            'class_description' => 'This is Health Care classification',
        ]);

        Classification::create([
            'classification_name' => 'Car Wash',
            'class_description' => 'This is Car Wash classification',
        ]);

        Classification::create([
            'classification_name' => 'Supermarket',
            'class_description' => 'This is Supermarket classification',
        ]);

        Classification::create([
            'classification_name' => 'Bar',
            'class_description' => 'This is Bar classification',
        ]);

        Classification::create([
            'classification_name' => 'Gaming & Betting',
            'class_description' => 'This is Gaming & Betting classification',
        ]);

        Classification::create([
            'classification_name' => 'Farms',
            'class_description' => 'This is Farms classification',
        ]);

        Classification::create([
            'classification_name' => 'Building',
            'class_description' => 'This is Building classification',
        ]);

        Classification::create([
            'classification_name' => 'Temporary Structure',
            'class_description' => 'This is Temporary Structure classification',
        ]);

        Classification::create([
            'classification_name' => 'Allocation',
            'class_description' => 'This is Allocation classification',
        ]);

        Classification::create([
            'classification_name' => 'Grants',
            'class_description' => 'This is Grants classification',
        ]);

        Classification::create([
            'classification_name' => 'Taxes',
            'class_description' => 'This is Taxes classification',
        ]);

        Classification::create([
            'classification_name' => 'Rates',
            'class_description' => 'This is Rates classification',
        ]);

        Classification::create([
            'classification_name' => 'Local Licences And Fines',
            'class_description' => 'This is Local Licences And Fines classification',
        ]);

        Classification::create([
            'classification_name' => 'Earning From Commercial Undertaking',
            'class_description' => 'This is Earning From Commercial Undertaking classification',
        ]);

        Classification::create([
            'classification_name' => 'Rent On Properties',
            'class_description' => 'This is Rent On Properties classification',
        ]);

        Classification::create([
            'classification_name' => 'Investment Income',
            'class_description' => 'This is Investment Income classification',
        ]);

        Classification::create([
            'classification_name' => 'Miscellaneous',
            'class_description' => 'This is Miscellaneous classification',
        ]);

        Classification::create([
            'classification_name' => 'Gain On Disposal Of Assets',
            'class_description' => 'This is Gain On Disposal Of Assets classification',
        ]);
    }
}

