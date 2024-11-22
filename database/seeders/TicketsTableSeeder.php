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
        // Genera 15 ticket fittizi
        for ($i = 0; $i < 15; $i++) {
            $newTicket = new Ticket();
            $newTicket->title = $faker->sentence; 
            $newTicket->description = $faker->text;
            $newTicket->status = $faker->randomElement(['ASSIGNED', 'IN PROGRESS', 'CLOSED']); // Stato del ticket
            $newTicket->operator_id = Operator::inRandomOrder()->first()->id; // Assegna un operatore casuale
            $newTicket->category_id = Category::inRandomOrder()->first()->id; // Assegna una categoria casuale
            $newTicket->save();
        }
    }
}
