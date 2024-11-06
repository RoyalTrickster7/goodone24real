<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario específico
        User::create([
            'name' => 'RoyalAlex',
            'username' => 'RoyalTrick',
            'email' => 'Royalyusuke@example.com',
            'password' => Hash::make('admin'), // Encriptar la contraseña
            'email_verified_at' => now(),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);

        // Generar 7 usuarios aleatorios adicionales usando la factory
        User::factory(7)->create();
    }
}
