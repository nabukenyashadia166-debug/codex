<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'registration.register')->name('register');
Route::view('/students', 'lecturer.students')->name('students.index');
Route::view('/courses', 'lecturer.courses')->name('courses.index');
Route::view('/lecturers', 'lecturer.lecturers')->name('lecturers.index');
Route::view('/registrations', 'registration.registrations')->name('registrations.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.admin-dashboard')->name('dashboard');
    Route::view('/courses-management', 'admin.admin-courses')->name('courses');
    Route::view('/registrations-management', 'admin.admin-registrations')->name('registrations');
    Route::view('/users-management', 'admin.admin-users')->name('users');
    Route::resource('students', StudentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('registrations', RegistrationController::class);
});
