@extends('admin.students.layout')

@section('title', 'Edit Student')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('admin.students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.students._form')

        <p>
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('admin.students.index') }}" class="btn gray">Cancel</a>
        </p>
    </form>
@endsection