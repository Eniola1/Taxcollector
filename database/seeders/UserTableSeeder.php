<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Hash::make('telvida10');

        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => $pass
        ]);
    }
}
