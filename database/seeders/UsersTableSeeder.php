<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jack Nicolson',
            'email' => 'jack@example.com',
            'phone' => '0123456789',
            'password' => bcrypt('password'),
        ]);
    }
}
