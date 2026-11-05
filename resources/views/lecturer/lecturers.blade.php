@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
<section class="page-hero"><div class="container"><div class="eyebrow">Academic staff</div><h1>Lecturers</h1><p>Meet the university's academic staff and explore the courses they teach.</p></div></section>
<section class="inner-content"><div class="container">
<div class="toolbar"><div><h2>Lecturer directory</h2><p class="muted">Browse lecturer profiles, departments and contact information.</p></div><input class="search" type="search" placeholder="Search lecturer, department or course" oninput="filterLecturers(this.value)"></div>
<div class="table-card"><div class="table-wrap"><table id="lecturerTable"><thead><tr><th>Lecturer ID</th><th>Lecturer name</th><th>Email address</th><th>Department</th><th>Courses taught</th><th>Status</th></tr></thead><tbody></tbody></table></div></div>
<div style="height:25px"></div>
<div class="panel-card"><div class="admin-toolbar"><div><h2>Assigned courses and student rosters</h2><p class="muted">Each lecturer can review the courses assigned to them and the students registered for each class.</p></div></div><div id="lecturerAssignments" class="assignment-grid"></div></div>
<div style="height:25px"></div>
<div class="notice">The lecturer names and contact details on this page are sample records for the front-end demonstration. Replace them with verified university staff information before publishing.</div>
</div></section>
</main>
@include('layouts.footer')
@endsection
