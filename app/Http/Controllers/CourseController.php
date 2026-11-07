<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::query()
            ->orderBy('course_name')
            ->paginate(10);

        return view('admin.admin-courses', compact('courses'));
    }

    public function create(): View
    {
        return view('admin.admin-courses');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:50'],
            'course_name' => ['required', 'string', 'max:150'],
            'email' => ['nullable', 'email', 'max:255'],
            'description' => ['nullable', 'string'],
            'credit_units' => ['required', 'integer', 'min:1', 'max:10'],
        ]);

        Course::create($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully.');
    }

    public function show(Course $course): View
    {
        return view('admin.admin-courses', compact('course'));
    }

    public function edit(Course $course): View
    {
        return view('admin.admin-courses', compact('course'));
    }

    public function update(Request $request, Course $course): RedirectResponse
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:50'],
            'course_name' => ['required', 'string', 'max:150'],
            'email' => ['nullable', 'email', 'max:255'],
            'description' => ['nullable', 'string'],
            'credit_units' => ['required', 'integer', 'min:1', 'max:10'],
        ]);

        $course->update($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
