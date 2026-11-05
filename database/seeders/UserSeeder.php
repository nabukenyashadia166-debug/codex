<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@university.test'],
            ['name' => 'System Administrator', 'password' => Hash::make('Password123!')]
        );

        for ($i = 1; $i <= 4; $i++) {
            User::updateOrCreate(
                ['email' => "lecturer{$i}@university.test"],
                ['name' => "Lecturer {$i}", 'password' => Hash::make('Password123!')]
            );
        }

        for ($i = 1; $i <= 5; $i++) {
            User::updateOrCreate(
                ['email' => "student{$i}@university.test"],
                ['name' => "Student {$i}", 'password' => Hash::make('Password123!')]
            );
        }
    }
}
