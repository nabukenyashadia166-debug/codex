@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Administration</div>
      <h1>Course management</h1>
      <p>Review course offerings, unit loads, lecturer assignments and academic availability.</p>
    </div>
  </section>

  <section class="inner-content">
    <div class="container admin-shell">
      <aside class="admin-sidebar">
        <div class="sidebar-title">Navigation</div>
        <div class="sidebar-nav">
          <a href="admin-dashboard.html"><span>Overview</span><span>›</span></a>
          <a href="admin-students.html"><span>Students</span><span>›</span></a>
          <a class="active" href="admin-courses.html"><span>Courses</span><span>›</span></a>
          <a href="admin-registrations.html"><span>Registrations</span><span>›</span></a>
          <a href="admin-users.html"><span>User accounts</span><span>›</span></a>
        </div>
      </aside>

      <div class="admin-main">
        <div class="panel-card">
          <div class="admin-toolbar">
            <div>
              <h2>Academic course catalogue</h2>
              <p class="muted">Manage programme offerings and course availability.</p>
            </div>
            <div class="actions">
              <input class="search" type="search" placeholder="Search course code or title">
              <a class="btn btn-primary" href="#">+ Add course</a>
            </div>
          </div>

          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Course code</th>
                  <th>Course title</th>
                  <th>Lecturer</th>
                  <th>Credits</th>
                  <th>Semester</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>BCS3101</td><td>Advanced Web Application Development</td><td>Mr. Ssemanda</td><td>4</td><td>Semester 1</td><td><span class="status-badge active">Open</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>BCS3102</td><td>Database Systems</td><td>Ms. Namusoke</td><td>3</td><td>Semester 1</td><td><span class="status-badge active">Open</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>BCS3103</td><td>Computer Networks</td><td>Mr. Okello</td><td>3</td><td>Semester 2</td><td><span class="status-badge pending">Limited</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>BCS3104</td><td>Information Systems Audit</td><td>Ms. Nambasa</td><td>3</td><td>Semester 2</td><td><span class="status-badge active">Open</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>BCS3105</td><td>Artificial Intelligence</td><td>Dr. Kafeero</td><td>4</td><td>Semester 1</td><td><span class="status-badge inactive">Archived</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@include('layouts.footer')
@endsection
