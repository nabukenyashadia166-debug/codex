<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            ['number' => 'STU001', 'first' => 'James', 'last' => 'Wamutu', 'gender' => 'Male', 'programme' => 'Bachelor of Business Computing'],
            ['number' => 'STU002', 'first' => 'Mary', 'last' => 'Namara', 'gender' => 'Female', 'programme' => 'Bachelor of Business Computing'],
            ['number' => 'STU003', 'first' => 'John', 'last' => 'Okello', 'gender' => 'Male', 'programme' => 'Bachelor of Information Technology'],
            ['number' => 'STU004', 'first' => 'Sarah', 'last' => 'Auma', 'gender' => 'Female', 'programme' => 'Bachelor of Information Technology'],
            ['number' => 'STU005', 'first' => 'David', 'last' => 'Mugisha', 'gender' => 'Male', 'programme' => 'Bachelor of Business Computing'],
        ];

        foreach ($students as $item) {
            $email = strtolower($item['number']) . '@students.university.test';
            // Stable email addresses let the authentication branch assign Spatie roles later.
            $user = User::updateOrCreate(
                ['email' => 'student' . substr($item['number'], -3) . '@university.test'],
                ['name' => $item['first'] . ' ' . $item['last'], 'password' => 'Password123!']
            );

            Student::updateOrCreate(
                ['student_number' => $item['number']],
                [
                    'user_id' => $user->id,
                    'first_name' => $item['first'],
                    'last_name' => $item['last'],
                    'email' => $email,
                    'gender' => $item['gender'],
                    'phone' => null,
                    'programme' => $item['programme'],
                ]
            );
        }
    }
}
