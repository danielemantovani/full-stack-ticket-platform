<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        // Genera 5 categorie fittizie
        for ($i = 0; $i < 5; $i++) {
            $newCategory = new Category();
            $newCategory->name = $faker->word;
            $newCategory->save();
        }
    }
}
