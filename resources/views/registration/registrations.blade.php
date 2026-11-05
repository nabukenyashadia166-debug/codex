@extends('layouts.main')
@section('content')
@include('layouts.header')
<main><section class="page-hero"><div class="container"><div class="eyebrow">Student Management System</div><h1>Registrations</h1><p>View course registration records and registration information.</p></div></section><section class="inner-content"><div class="container"><div class="notice">This is a static front-end demonstration. Registration details shown below are sample records.</div>
<div class="toolbar"><div><h2>Course registration records</h2><p class="muted">Review the sample course registrations.</p></div><input class="search" type="search" placeholder="Search student or course" oninput="filterRegistrations(this.value)"></div>

<div class="student-view-grid">
  <div class="student-panel">
    <div class="student-panel-header">
      <h3>Available courses</h3>
      <span class="chip success">Open</span>
    </div>
    <div id="availableCourses" class="course-list-compact"></div>
  </div>

  <div class="student-panel">
    <div class="student-panel-header">
      <h3>My registration</h3>
      <span class="chip">Sarah Nakato</span>
    </div>
    <div id="studentRegistrations" class="student-course-grid"></div>
  </div>
</div>

<div class="table-card" style="margin-top:24px;"><div class="table-wrap"><table id="registrationTable"><thead><tr><th>Registration ID</th><th>Student</th><th>Course</th><th>Registration date</th><th>Status</th></tr></thead><tbody>
<tr><td>REG001</td>
    <td>Sarah Nakato</td><td>Advanced Web Application Development</td><td>02 Nov 2026</td><td><span class="pill">Approved</span></td></tr>
<tr><td>REG002</td><td>David Mugisha</td><td>Database Systems</td><td>01 Nov 2026</td><td><span class="pill">Approved</span></td></tr>
<tr><td>REG003</td><td>Mary Achieng</td><td>Computer Networks</td><td>30 Oct 2026</td><td><span class="pill pending">Pending</span></td></tr>
</tbody></table></div></div>
<div style="height:25px"></div><div class="form-card">
    <h2>Course registration enquiry</h2>
    <p>Sample front-end form layout for a student to select a course.</p><form>
        <div class="form-grid"><div class="field"><label>Student name</label>
            <input type="text" placeholder="Enter your full name"></div><div class="field">
                <label>Student ID</label><input type="text" placeholder="e.g. STU001"></div>
                <div class="field"><label>Select course</label>
                    <select><option>Choose a course</option><option>Advanced Web Application Development</option><option>Database Systems</option>
                        <option>Computer Networks</option></select></div>
                        <div class="field"><label>Academic year</label><select><option>2026/2027</option>
                            <option>2027/2028</option></select></div></div><div class="form-buttons"><button class="btn btn-primary" type="button">Submit enquiry</button></div></form></div></div></section></main>
@include('layouts.footer')
@endsection
