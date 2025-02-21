<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name_user_rando' => 'Doe',
            'email_user_rando' => 'doe@example.com',
            'email_user_rando_verified_at' => now(),
            'password_user_rando' => Hash::make('password'), // password is 'password'
            'remember_token' => Str::random(10),
        ]);
    }
}
