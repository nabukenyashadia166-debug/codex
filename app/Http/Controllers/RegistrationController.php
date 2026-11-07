<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function index(): View
    {
        $registrations = Registration::query()
            ->with(['student', 'course'])
            ->orderByDesc('registration_date')
            ->paginate(10);

        return view('registration.registrations', compact('registrations'));
    }

    public function create(): View
    {
        return view('registration.registrations');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'student_id' => ['required', 'exists:students,id'],
            'course_id' => ['required', 'exists:courses,id'],
            'registration_date' => ['required', 'date'],
            'status' => ['required', 'string', 'max:50'],
        ]);

        Registration::create($validated);

        return redirect()->route('registrations.index')->with('success', 'Registration saved successfully.');
    }

    public function show(Registration $registration): View
    {
        return view('registration.registrations', compact('registration'));
    }

    public function edit(Registration $registration): View
    {
        return view('registration.registrations', compact('registration'));
    }

    public function update(Request $request, Registration $registration): RedirectResponse
    {
        $validated = $request->validate([
            'student_id' => ['required', 'exists:students,id'],
            'course_id' => ['required', 'exists:courses,id'],
            'registration_date' => ['required', 'date'],
            'status' => ['required', 'string', 'max:50'],
        ]);

        $registration->update($validated);

        return redirect()->route('registrations.index')->with('success', 'Registration updated successfully.');
    }

    public function destroy(Registration $registration): RedirectResponse
    {
        $registration->delete();

        return redirect()->route('registrations.index')->with('success', 'Registration deleted successfully.');
    }
}
