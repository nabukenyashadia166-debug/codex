<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['code' => 'BUC3101', 'name' => 'Database Management Systems', 'description' => 'Database design, SQL and administration.', 'lecturer' => 'LEC001'],
            ['code' => 'BUC3128', 'name' => 'Routing and Switching', 'description' => 'Computer networking and routing fundamentals.', 'lecturer' => 'LEC002'],
            ['code' => 'BUC3130', 'name' => 'Application Development', 'description' => 'Principles and practice of application development.', 'lecturer' => 'LEC003'],
            ['code' => 'BUC3131', 'name' => 'Advanced Web Application Development', 'description' => 'Modern web application development with frameworks.', 'lecturer' => 'LEC004'],
        ];

        foreach ($courses as $item) {
            $lecturer = Lecturer::where('lecturer_number', $item['lecturer'])->firstOrFail();
            Course::updateOrCreate(
                ['course_code' => $item['code']],
                [
                    'course_name' => $item['name'],
                    'description' => $item['description'],
                    'lecturer_id' => $lecturer->id,
                ]
            );
        }
    }
}
