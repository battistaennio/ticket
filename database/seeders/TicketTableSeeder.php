<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use App\Models\User;
use Faker\Generator as Faker;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //array per i valori dello stato
        $status = ['assegnato', 'in_lavorazione', 'chiuso'];

        for ($i = 0; $i < 50; $i++) {
            $new_ticket = new Ticket();
            $new_ticket->title = $faker->sentence;
            $new_ticket->slug = Helper::generateSlug($new_ticket->title, Ticket::class);
            $new_ticket->description = $faker->paragraph;
            $new_ticket->status = $status[array_rand($status)];
            //associo il ticket all'admin, alla categoria e all'operatore
            $new_ticket->user_id = User::inRandomOrder()->first()->id;
            $new_ticket->category_id = Category::inRandomOrder()->first()->id;
            $new_ticket->operator_id = Operator::inRandomOrder()->first()->id;
            $new_ticket->save();
        }
    }
}
