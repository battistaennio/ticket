<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Operator;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operators = [
            'Luca Bianchi',
            'Giulia Rossi',
            'Marco Verdi',
            'Anna Neri',
            'Francesco Russo',
            'Sara Esposito',
            'Davide Colombo',
            'Chiara Romano',
            'Alessandro Greco',
            'Elena Ferri',
            'Simone Marchetti',
            'Martina Gallo',
            'Fabio Moretti',
            'Federica Fontana',
            'Alberto Conti',
        ];

        foreach ($operators as $operator) {
            $new_operator = new Operator();
            $new_operator->name = $operator;
            $new_operator->slug = Helper::generateSlug($new_operator->name, Operator::class);
            $new_operator->save();
        }
    }
}
