@extends('admin.students.layout')

@section('title', 'Students')

@section('content')
    <div class="toolbar layout-toolbar">
        <div>
            <h2>Student directory</h2>
            <p class="muted">Manage all student records and academic profiles.</p>
        </div>
        <div class="actions">
            <input class="search" type="search" placeholder="Search student or ID">
            <a href="{{ route('admin.students.create') }}" class="btn btn-primary">+ Add student</a>
        </div>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Student No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course of Study</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->student_number }}</td>
                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course_of_study }}</td>
                        <td class="table-actions">
                            <a href="{{ route('admin.students.show', $student) }}" class="action-link">View</a>
                            <a href="{{ route('admin.students.edit', $student) }}" class="action-link">Edit</a>

                            <form class="inline" action="{{ route('admin.students.destroy', $student) }}" method="POST"
                                  onsubmit="return confirm('Delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-red small-action-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No students found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="top-gap">{{ $students->links() }}</div>
@endsection