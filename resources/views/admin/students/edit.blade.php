@extends('admin.students.layout')

@section('title', 'Edit Student')

@section('content')
    <div class="toolbar layout-toolbar">
        <div>
            <h2>Edit student</h2>
            <p class="muted">Update the student profile and academic information.</p>
        </div>
    </div>

    <form action="{{ route('admin.students.update', $student) }}" method="POST" class="form-card portal-form">
        @csrf
        @method('PUT')
        @include('admin.students._form')

        <div class="form-buttons portal-actions">
            <button type="submit" class="btn btn-primary">Update student</button>
            <a href="{{ route('admin.students.index') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
@endsection