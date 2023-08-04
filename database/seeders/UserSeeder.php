<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 50) as $index) {
            User::create([
                'name' => $faker->name(),
                'username' => $faker->userName(),
                'password' => Hash::make($faker->password())
            ]);
        }
    }
}
