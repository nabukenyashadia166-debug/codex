@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Administration</div>
      <h1>Student management</h1>
      <p>Review and update academic records, statuses and student information.</p>
    </div>
  </section>

  <section class="inner-content">
    <div class="container admin-shell">
      <aside class="admin-sidebar">
        <div class="sidebar-title">Navigation</div>
        <div class="sidebar-nav">
          <a href="admin-dashboard.html"><span>Overview</span><span>›</span></a>
          <a class="active" href="admin-students.html"><span>Students</span><span>›</span></a>
          <a href="admin-courses.html"><span>Courses</span><span>›</span></a>
          <a href="admin-registrations.html"><span>Registrations</span><span>›</span></a>
          <a href="admin-users.html"><span>User accounts</span><span>›</span></a>
        </div>
      </aside>

      <div class="admin-main">
        <div class="panel-card">
          <div class="admin-toolbar">
            <div>
              <h2>Student directory</h2>
              <p class="muted">Manage all student records and academic profiles.</p>
            </div>
            <div class="actions">
              <input class="search" type="search" placeholder="Search student or ID">
              <a class="btn btn-primary" href="#">+ Add student</a>
            </div>
          </div>

          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Programme</th>
                  <th>Year</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>STU001</td><td>Sarah Nakato</td><td>Business Computing</td><td>Year 3</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a><a href="#" class="action-link">View</a></td></tr>
                <tr><td>STU002</td><td>David Mugisha</td><td>Information Systems</td><td>Year 2</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a><a href="#" class="action-link">View</a></td></tr>
                <tr><td>STU003</td><td>Mary Achieng</td><td>Business Computing</td><td>Year 1</td><td><span class="status-badge pending">Review</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a><a href="#" class="action-link">View</a></td></tr>
                <tr><td>STU004</td><td>Brian Okello</td><td>Computer Science</td><td>Year 3</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a><a href="#" class="action-link">View</a></td></tr>
                <tr><td>STU005</td><td>Faith Njeri</td><td>Software Engineering</td><td>Year 4</td><td><span class="status-badge inactive">Inactive</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a><a href="#" class="action-link">View</a></td></tr>
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
