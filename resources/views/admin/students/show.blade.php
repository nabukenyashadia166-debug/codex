@extends('admin.students.layout')

@section('title', 'Student Details')

@section('content')
    <div class="toolbar layout-toolbar">
        <div>
            <h2>Student details</h2>
            <p class="muted">Review the student profile and academic status.</p>
        </div>
        <div class="actions">
            <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-primary">Edit student</a>
            <a href="{{ route('admin.students.index') }}" class="btn btn-outline">Back</a>
        </div>
    </div>

    <div class="table-wrap">
        <table>
            <tr><th>Student Number</th><td>{{ $student->student_number }}</td></tr>
            <tr><th>Name</th><td>{{ $student->first_name }} {{ $student->last_name }}</td></tr>
            <tr><th>Email</th><td>{{ $student->email }}</td></tr>
            <tr><th>Gender</th><td>{{ $student->gender }}</td></tr>
            <tr><th>Phone</th><td>{{ $student->phone ?? '-' }}</td></tr>
            <tr><th>Course of Study</th><td>{{ $student->course_of_study }}</td></tr>
        </table>
    </div>
@endsection