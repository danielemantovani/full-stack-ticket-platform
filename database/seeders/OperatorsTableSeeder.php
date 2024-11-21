<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operators;
use Faker\Generator as Faker;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $newOperator = new Operators();
            $newOperator->name = $faker->name;
            $newOperator->email = $faker->unique()->safeEmail;
            $newOperator->available = $faker->boolean(100); // 100% di possibilità che l'operatore sia disponibile
        }
    }
}