@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Administration</div>
      <h1>User accounts</h1>
      <p>Manage staff, student and administrative access to the university portal.</p>
    </div>
  </section>

  <section class="inner-content">
    <div class="container admin-shell">
      <aside class="admin-sidebar">
        <div class="sidebar-title">Navigation</div>
        <div class="sidebar-nav">
          <a href="admin-dashboard.html"><span>Overview</span><span>›</span></a>
          <a href="admin-students.html"><span>Students</span><span>›</span></a>
          <a href="admin-courses.html"><span>Courses</span><span>›</span></a>
          <a href="admin-registrations.html"><span>Registrations</span><span>›</span></a>
          <a class="active" href="admin-users.html"><span>User accounts</span><span>›</span></a>
        </div>
      </aside>

      <div class="admin-main">
        <div class="panel-card">
          <div class="admin-toolbar">
            <div>
              <h2>User accounts</h2>
              <p class="muted">Control permissions and monitor account activity.</p>
            </div>
            <div class="actions">
              <input class="search" type="search" placeholder="Search by name or role">
              <a class="btn btn-primary" href="#">+ New account</a>
            </div>
          </div>

          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Department</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>Jane Otieno</td><td>jane@university.ac.ug</td><td>System admin</td><td>IT</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>John Musinguzi</td><td>john.m@university.ac.ug</td><td>Admissions officer</td><td>Registry</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>Grace Nansubuga</td><td>grace@university.ac.ug</td><td>Course coordinator</td><td>Faculty of Computing</td><td><span class="status-badge pending">Pending</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>Tom Kijjambu</td><td>tom@university.ac.ug</td><td>Lecturer</td><td>Engineering</td><td><span class="status-badge active">Active</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
                <tr><td>Mary Kintu</td><td>mary@university.ac.ug</td><td>Student</td><td>Business</td><td><span class="status-badge blocked">Blocked</span></td><td class="table-actions"><a href="#" class="action-link">Edit</a></td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="form-card" style="margin-top:24px;">
          <h2>Create new user account</h2>
          <p>Set up a new staff or student portal account.</p>
          <form>
            <div class="form-grid">
              <div class="field"><label>Full name</label><input type="text" placeholder="Enter full name"></div>
              <div class="field"><label>Email address</label><input type="email" placeholder="name@university.ac.ug"></div>
              <div class="field"><label>Role</label>
                <select>
                  <option>Choose a role</option>
                  <option>Student</option>
                  <option>Lecturer</option>
                  <option>Course coordinator</option>
                  <option>System admin</option>
                </select>
              </div>
              <div class="field"><label>Department</label><input type="text" placeholder="e.g. Faculty of Computing"></div>
              <div class="field full"><label>Access notes</label><textarea rows="4" placeholder="Add any access instructions or permissions notes"></textarea></div>
            </div>
            <div class="form-buttons">
              <button class="btn btn-primary" type="button">Create account</button>
              <button class="btn btn-outline" type="button">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
@include('layouts.footer')
@endsection
