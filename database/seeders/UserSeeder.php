<?php

namespace Database\Seeders;

use App\Models\Loginn;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name'=> 'Admin',
            'level'=> 'admin',
            'email'=> 'Admin@gmail.com',
            'password'=> bcrypt('admin'),
            'remember_token'=> Str::random(60),
        ]);
        User::create([
            'name'=> 'Lurah',
            'level'=> 'lurah',
            'email'=> 'lurah@gmail.com',
            'password'=> bcrypt('lurah'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
