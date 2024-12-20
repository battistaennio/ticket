<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creo l'admin
        $user = ['name' => 'Gino', 'email' => 'gino@gmail.com', 'password' => Hash::make('12345678')];
        User::create($user);
    }
}
