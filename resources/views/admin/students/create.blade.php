@extends('admin.students.layout')

@section('title', 'Add Student')

@section('content')
    <div class="toolbar layout-toolbar">
        <div>
            <h2>Add student</h2>
            <p class="muted">Create a new student account and academic record.</p>
        </div>
    </div>

    <form action="{{ route('admin.students.store') }}" method="POST" class="form-card portal-form">
        @csrf
        @include('admin.students._form')

        <div class="form-buttons portal-actions">
            <button type="submit" class="btn btn-primary">Save student</button>
            <a href="{{ route('admin.students.index') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
@endsection