@extends('layouts.main')
@section('content')

//start hearder
@include('layouts.header')
//end header
<main>
  <section class="inner-content">
    <div class="container auth-shell">
      <div class="auth-visual">
        <div>
          <div class="eyebrow">Create an account</div>
          <h1>Join the university portal.</h1>
          <p>Create your personal account and choose the role that matches your place in the university community.</p>
          <ul class="auth-bullets">
            <li>Student accounts for academic access</li>
            <li>Lecturer accounts for course management</li>
            <li>Administrator accounts for portal oversight</li>
          </ul>
        </div>
        <div class="notice auth-notice">Already registered? <a href="{{ route('login') }}">Login here</a></div>
      </div>

      <div class="auth-card">
        <h2>Register with your role</h2>
        <p>Set up a secure portal account for your role in the university.</p>

        <form class="auth-form" id="registerForm">
          <div class="role-switch" aria-label="Role selector">
            <button type="button" class="active" data-role="Student">Student</button>
            <button type="button" data-role="Lecturer">Lecturer</button>
            <button type="button" data-role="Administrator">Admin</button>
          </div>

          <div class="auth-row">
            <div class="field">
              <label for="first-name">First name</label>
              <input id="first-name" type="text" placeholder="Enter first name">
            </div>
            <div class="field">
              <label for="last-name">Last name</label>
              <input id="last-name" type="text" placeholder="Enter last name">
            </div>
          </div>

          <div class="field">
            <label for="reg-email">Email address</label>
            <input id="reg-email" type="email" placeholder="name@university.ac.ug">
          </div>

          <div class="auth-row">
            <div class="field">
              <label for="reg-password">Password</label>
              <input id="reg-password" type="password" placeholder="Create password">
            </div>
            <div class="field">
              <label for="confirm-password">Confirm password</label>
              <input id="confirm-password" type="password" placeholder="Repeat password">
            </div>
          </div>

          <div class="role-fields visible" id="studentFields">
            <div class="field">
              <label for="student-id">Student ID</label>
              <input id="student-id" type="text" placeholder="e.g. STU001">
            </div>
            <div class="field">
              <label for="student-programme">Programme</label>
              <input id="student-programme" type="text" placeholder="Computer Science">
            </div>
          </div>

          <div class="role-fields" id="lecturerFields">
            <div class="field">
              <label for="lecturer-id">Lecturer ID</label>
              <input id="lecturer-id" type="text" placeholder="e.g. LEC001">
            </div>
            <div class="field">
              <label for="department">Department</label>
              <input id="department" type="text" placeholder="Computing and Informatics">
            </div>
          </div>

          <div class="role-fields" id="adminFields">
            <div class="field">
              <label for="admin-role">Administrative role</label>
              <select id="admin-role">
                <option>System admin</option>
                <option>Admissions officer</option>
                <option>Course coordinator</option>
              </select>
            </div>
            <div class="field">
              <label for="admin-department">Department</label>
              <input id="admin-department" type="text" placeholder="Registry / IT / Faculty office">
            </div>
          </div>

          <div class="auth-meta">
            <label class="checkbox-inline"><input type="checkbox"> I agree to the terms and conditions</label>
          </div>

          <button class="btn btn-primary" type="submit">Create account</button>
        </form>
      </div>
    </div>
  </section>
</main>
@include('layouts.footer')

@endsection
