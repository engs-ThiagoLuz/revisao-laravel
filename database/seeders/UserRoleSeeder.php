<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Teste',
            'email' => 'admin@teste.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Professor Teste',
            'email' => 'professor@teste.com',
            'password' => Hash::make('password'),
            'role' => 'professor',
        ]);

        User::create([
            'name' => 'Aluno Teste',
            'email' => 'aluno@teste.com',
            'password' => Hash::make('password'),
            'role' => 'aluno',
        ]);
    }
}