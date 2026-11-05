@extends('layouts.main')
@section('content')
@include('layouts.header')

<main>
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Administration</div>
      <h1>Admin dashboard</h1>
      <p>Manage students, course enrolment, registrations and user accounts from one place.</p>
    </div>
  </section>

  <section class="inner-content">
    <div class="container admin-shell">
      <aside class="admin-sidebar">
        <div class="sidebar-title">Navigation</div>
        <div class="sidebar-nav">
          <a class="active" href="{{ route('admin.dashboard') }}"><span>Overview</span><span>›</span></a>
          <a href="{{ route('admin.students.index') }}"><span>Students</span><span>›</span></a>
          <a href="{{ route('admin.courses') }}"><span>Courses</span><span>›</span></a>
          <a href="{{ route('admin.registrations') }}"><span>Registrations</span><span>›</span></a>
          <a href="{{ route('admin.users') }}"><span>User accounts</span><span>›</span></a>
        </div>
      </aside>

      <div class="admin-main">
        <div class="summary-grid">
          <div class="summary-card">
            <div class="meta"><span>Total students</span><span class="chip success">+12%</span></div>
            <strong>1,248</strong>
            <div class="trend">Compared to last term</div>
          </div>
          <div class="summary-card">
            <div class="meta"><span>Active courses</span><span class="chip">18</span></div>
            <strong>42</strong>
            <div class="trend">Across all faculties</div>
          </div>
          <div class="summary-card">
            <div class="meta"><span>Registrations</span><span class="chip warning">Pending</span></div>
            <strong>386</strong>
            <div class="trend">23 awaiting approval</div>
          </div>
          <div class="summary-card">
            <div class="meta"><span>User accounts</span><span class="chip success">Online</span></div>
            <strong>892</strong>
            <div class="trend">94% active users</div>
          </div>
        </div>

        <div class="dashboard-grid">
          <div class="panel-card">
            <h3>Recent registration activity</h3>
            <ul class="activity-list">
              <li>
                <div>
                  <strong>Sarah Nakato</strong>
                  <span>Advanced Web Development</span>
                </div>
                <span class="chip success">Approved</span>
              </li>
              <li>
                <div>
                  <strong>Brian Okello</strong>
                  <span>Database Systems</span>
                </div>
                <span class="chip warning">Review</span>
              </li>
              <li>
                <div>
                  <strong>Mary Achieng</strong>
                  <span>Computer Networks</span>
                </div>
                <span class="chip success">Approved</span>
              </li>
              <li>
                <div>
                  <strong>David Mugisha</strong>
                  <span>Information Systems Audit</span>
                </div>
                <span class="chip warning">Pending</span>
              </li>
            </ul>
          </div>

          <div class="panel-card">
            <h3>Priority tasks</h3>
            <ul class="mini-list">
              <li>
                <div>
                  <strong>Course validation</strong>
                  <span>8 items due today</span>
                </div>
                <span class="chip">Open</span>
              </li>
              <li>
                <div>
                  <strong>Student approvals</strong>
                  <span>12 records pending</span>
                </div>
                <span class="chip warning">Action</span>
              </li>
              <li>
                <div>
                  <strong>User account review</strong>
                  <span>5 students need activation</span>
                </div>
                <span class="chip success">Ready</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="panel-card">
          <div class="admin-toolbar">
            <div>
              <h2>Today’s admin overview</h2>
              <p class="muted">Key areas to review across the portal.</p>
            </div>
            <div class="actions">
              <a class="btn btn-primary" href="{{ route('admin.students.index') }}">Open student centre</a>
            </div>
          </div>

          <div class="table-card compact-table">
            <div class="table-wrap">
              <table>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Current status</th>
                    <th>Owner</th>
                    <th>Due</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Student records</td>
                    <td><span class="status-badge active">Healthy</span></td>
                    <td>Admissions office</td>
                    <td>Today</td>
                  </tr>
                  <tr>
                    <td>Course registration</td>
                    <td><span class="status-badge pending">Monitoring</span></td>
                    <td>Academic office</td>
                    <td>Tomorrow</td>
                  </tr>
                  <tr>
                    <td>User access</td>
                    <td><span class="status-badge active">Updated</span></td>
                    <td>IT admin</td>
                    <td>Friday</td>
                  </tr>
                  <tr>
                    <td>Fee verification</td>
                    <td><span class="status-badge inactive">Queued</span></td>
                    <td>Bursar</td>
                    <td>Next week</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@include('layouts.footer')
@endsection
