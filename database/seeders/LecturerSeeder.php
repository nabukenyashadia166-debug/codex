<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    public function run(): void
    {
        $lecturers = [
            ['number' => 'LEC001', 'first' => 'Grace', 'last' => 'Nabirye', 'email' => 'lecturer1@university.test'],
            ['number' => 'LEC002', 'first' => 'Peter', 'last' => 'Okello', 'email' => 'lecturer2@university.test'],
            ['number' => 'LEC003', 'first' => 'Sarah', 'last' => 'Achieng', 'email' => 'lecturer3@university.test'],
            ['number' => 'LEC004', 'first' => 'David', 'last' => 'Mugisha', 'email' => 'lecturer4@university.test'],
        ];

        foreach ($lecturers as $item) {
            $user = User::where('email', $item['email'])->firstOrFail();
            Lecturer::updateOrCreate(
                ['lecturer_number' => $item['number']],
                [
                    'user_id' => $user->id,
                    'first_name' => $item['first'],
                    'last_name' => $item['last'],
                    'email' => $item['email'],
                    'phone' => null,
                ]
            );
        }
    }
}
