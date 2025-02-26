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
        // Créer les rôles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Créer l'utilisateur administrateur et lui attribuer le rôle admin
        $admin = User::create([
            'name' => 'Administrateur',
            'email' => 'admin@truc.fr',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $admin->roles()->attach($adminRole);

        // Créer l'utilisateur standard et lui attribuer le rôle user
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
