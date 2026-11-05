@extends('admin.students.layout')

@section('title', 'Student Details')

@section('content')
    <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>

    <table>
        <tr><th>Student Number</th><td>{{ $student->student_number }}</td></tr>
        <tr><th>Email</th><td>{{ $student->email }}</td></tr>
        <tr><th>Gender</th><td>{{ $student->gender }}</td></tr>
        <tr><th>Phone</th><td>{{ $student->phone ?? '-' }}</td></tr>
        <tr><th>Course of Study</th><td>{{ $student->course_of_study }}</td></tr>
    </table>

    <p>
        <a href="{{ route('admin.students.edit', $student) }}" class="btn">Edit</a>
        <a href="{{ route('admin.students.index') }}" class="btn gray">Back</a>
    </p>
@endsection