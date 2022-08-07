<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxpayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            // 'user_id' => User::factory(),
            'taxpayer_name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'taxpayer_id' => $this->faker->unique()->randomNumber($nbDigits = 3, $strict = false),
            'address' => $this->faker->address(),
            // 'buildingtype' => $this->faker->name,
            'zone_id' => $this->faker->randomDigit(),
            'ward_id' => $this->faker->randomDigit(),
            'description' => $this->faker->text(),
            'community_id' => $this->faker->randomDigit(),
            'use' => $this->faker->randomElement($array = array ('E','O','U')) // 'b',

        ];
    }
}
