@extends('admin.students.layout')

@section('title', 'Add Student')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('admin.students.store') }}" method="POST">
        @csrf
        @include('admin.students._form')

        <p>
            <button type="submit" class="btn green">Save</button>
            <a href="{{ route('admin.students.index') }}" class="btn gray">Cancel</a>
        </p>
    </form>
@endsection