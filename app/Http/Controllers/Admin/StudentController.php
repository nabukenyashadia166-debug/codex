<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::orderBy('student_number')->paginate(10);
        return view('admin.students.index', compact('students'));
    }

    // Show the empty Add form
    public function create()
    {
        return view('admin.students.create');
    }

    // Save a new student
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('admin.students.index')
            ->with('success', 'Student added successfully.');
    }

    // Show one student
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    // Show the Edit form
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    // Save the changes
    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('admin.students.index')
            ->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')
            ->with('success', 'Student deleted successfully.');
    }
}