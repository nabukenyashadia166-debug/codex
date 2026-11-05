@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
    <section class="page-hero"><div class="container">
    <div class="eyebrow">Student Management System</div>
    <h1>Students</h1><p>Explore the student directory and academic profiles.</p></div></section><section class="inner-content"><div class="container"><div class="toolbar"><div><h2>Student directory</h2><p class="muted">Browse student records in the system.</p></div><input class="search" type="search" placeholder="Search by name or student ID" oninput="filterStudents(this.value)"></div>
<div class="table-card"><div class="table-wrap"><table id="studentTable"><thead><tr><th>Student ID</th><th>Student name</th><th>Email address</th><th>Programme</th><th>Year</th><th>Status</th></tr></thead><tbody></tbody></table></div></div>

<div class="student-view-grid">
  <div class="student-panel">
    <div class="student-panel-header">
      <h3>Available courses</h3>
      <span class="chip success">Open for registration</span>
    </div>
    <div id="availableCourses" class="course-list-compact"></div>
  </div>

  <div class="student-panel">
    <div class="student-panel-header">
      <h3>My registration</h3>
      <span class="chip">Student: STU001</span>
    </div>
    <div class="my-registration-summary">
      <div class="summary-mini"><strong>4</strong><span>Courses</span></div>
      <div class="summary-mini"><strong>3</strong><span>Approved</span></div>
      <div class="summary-mini"><strong>1</strong><span>Pending</span></div>
    </div>
    <div id="studentRegistrations" class="student-course-grid has-top-space"></div>
  </div>
</div>
</div></section></main>
@include('layouts.footer')
@endsection
