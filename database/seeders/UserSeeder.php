<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Luis Gus',
            'email' => 'luisgus@gmail.com',
            'password' => bcrypt('asdfghjk'),
        ]);

        User::create([
            'name' => 'marcos',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('asdfghjk'),
        ]);
    }
}
