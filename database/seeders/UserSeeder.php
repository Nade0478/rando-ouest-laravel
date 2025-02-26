<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create the roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create the admin user and assign them the admin role
        $admin = User::create([
            'name' => 'Administrateur',
            'email' => 'admin@truc.fr',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $admin->roles()->attach($adminRole);

        // Create the standard user and assign them the user role
        $user = User::create([
            'name' => 'User',
            'email' => 'user@truc.fr',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $user->roles()->attach($userRole);
    }
}
