<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Registration;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        $studentNumbers = ['STU001', 'STU002', 'STU003', 'STU004', 'STU005'];
        $courseCodes = ['BUC3101', 'BUC3128', 'BUC3130', 'BUC3131'];

        foreach ($studentNumbers as $index => $number) {
            $student = Student::where('student_number', $number)->firstOrFail();
            $course = Course::where('course_code', $courseCodes[$index % count($courseCodes)])->firstOrFail();

            Registration::updateOrCreate(
                ['student_id' => $student->id, 'course_id' => $course->id],
                [
                    'registration_date' => now()->toDateString(),
                    'academic_year' => '2026/2027',
                    'semester' => 'Semester One',
                    'status' => 'Approved',
                ]
            );

            // Give each student a second, different course without creating duplicates.
            $secondCourse = Course::where('course_code', $courseCodes[($index + 1) % count($courseCodes)])->firstOrFail();
            Registration::updateOrCreate(
                ['student_id' => $student->id, 'course_id' => $secondCourse->id],
                [
                    'registration_date' => now()->toDateString(),
                    'academic_year' => '2026/2027',
                    'semester' => 'Semester One',
                    'status' => 'Approved',
                ]
            );
        }
    }
}
