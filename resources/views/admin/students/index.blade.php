@extends('admin.students.layout')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>
    <p><a href="{{ route('admin.students.create') }}" class="btn green">+ Add Student</a></p>

    <table>
        <tr>
            <th>Student No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course of Study</th>
            <th>Actions</th>
        </tr>

        @forelse ($students as $student)
            <tr>
                <td>{{ $student->student_number }}</td>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course_of_study }}</td>
                <td>
                    <a href="{{ route('admin.students.show', $student) }}" class="btn gray">View</a>
                    <a href="{{ route('admin.students.edit', $student) }}" class="btn">Edit</a>

                    <form class="inline" action="{{ route('admin.students.destroy', $student) }}" method="POST"
                          onsubmit="return confirm('Delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn red">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No students found.</td></tr>
        @endforelse
    </table>

    <div style="margin-top:14px">{{ $students->links() }}</div>
@endsection