@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Administration</div>
      <h1>Registration management</h1>
      <p>Approve, review and track student course registrations.</p>
    </div>
  </section>

  <section class="inner-content">
    <div class="container admin-shell">
      <aside class="admin-sidebar">
        <div class="sidebar-title">Navigation</div>
        <div class="sidebar-nav">
          <a href="{{ route('admin.dashboard') }}"><span>Overview</span><span>›</span></a>
          <a href="{{ route('admin.students.index') }}"><span>Students</span><span>›</span></a>
          <a href="{{ route('admin.courses') }}"><span>Courses</span><span>›</span></a>
          <a class="active" href="{{ route('admin.registrations') }}"><span>Registrations</span><span>›</span></a>
          <a href="{{ route('admin.users') }}"><span>User accounts</span><span>›</span></a>
        </div>
      </aside>

      <div class="admin-main">
        <div class="panel-card">
          <div class="admin-toolbar">
            <div>
              <h2>Course registration records</h2>
              <p class="muted">Review requests from students and verify completion.</p>
            </div>
            <div class="actions">
              <input class="search" type="search" placeholder="Search by student or course">
              <a class="btn btn-primary" href="#">Approve all</a>
            </div>
          </div>

          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Reg ID</th>
                  <th>Student</th>
                  <th>Course</th>
                  <th>Submitted</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>REG001</td><td>Sarah Nakato</td><td>Advanced Web Application Development</td><td>02 Nov 2026</td><td><span class="status-badge active">Approved</span></td><td class="table-actions"><a href="#" class="action-link">Review</a></td></tr>
                <tr><td>REG002</td><td>David Mugisha</td><td>Database Systems</td><td>01 Nov 2026</td><td><span class="status-badge active">Approved</span></td><td class="table-actions"><a href="#" class="action-link">Review</a></td></tr>
                <tr><td>REG003</td><td>Mary Achieng</td><td>Computer Networks</td><td>30 Oct 2026</td><td><span class="status-badge pending">Pending</span></td><td class="table-actions"><a href="#" class="action-link">Review</a></td></tr>
                <tr><td>REG004</td><td>Brian Okello</td><td>Information Systems Audit</td><td>28 Oct 2026</td><td><span class="status-badge pending">Pending</span></td><td class="table-actions"><a href="#" class="action-link">Review</a></td></tr>
                <tr><td>REG005</td><td>Faith Njeri</td><td>Artificial Intelligence</td><td>27 Oct 2026</td><td><span class="status-badge inactive">Hold</span></td><td class="table-actions"><a href="#" class="action-link">Review</a></td></tr>
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
