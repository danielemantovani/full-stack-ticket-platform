<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Operator;
use App\Models\Category;
use Faker\Generator as Faker;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        // Recupero tutti gli operatori e categorie
        $operators = Operator::all();
        $categories = Category::all();

        for ($i = 0; $i < 10; $i++) {
            $newTicket = new Ticket();
            $newTicket->title = $faker->sentence;
            $newTicket->description = $faker->text;
            $newTicket->status = $faker->randomElement(['Assigned', 'In progress', 'Closed']);

            // Seleziona un operatore e una categoria casuali solo se esistono
            $newTicket->operator_id = $operators->random()->id ?? null;
            $newTicket->category_id = $categories->random()->id ?? null;
            $newTicket->save();
        }
    }
}
