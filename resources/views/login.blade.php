@extends('layouts.main')
@section('content')
@include('layouts.header')

<main>
  <section class="inner-content">
    <div class="container auth-shell">
      <div class="auth-visual">
        <div>
          <div class="eyebrow">University portal</div>
          <h1>Sign in to your campus account.</h1>
          <p>Access your academic records, class registrations, and course updates from one secure portal.</p>
          <ul class="auth-bullets">
            <li>View courses and registrations</li>
            <li>Track lecturer and student activity</li>
            <li>Manage access by your role in the system</li>
          </ul>
        </div>
        <div class="notice" style="margin:0; background: rgba(255,255,255,0.08); color:#f3f8ff; border:1px solid rgba(255,255,255,0.12);">Need a new account? <a href="register.html" style="color:#fff; font-weight:700; text-decoration: underline;">Create one here</a></div>
      </div>

      <div class="auth-card">
        <h2>Welcome back</h2>
        <p>Log in to continue to your university dashboard.</p>

        <form class="auth-form" id="loginForm">
          <div class="field">
            <label for="login-role">Role</label>
            <select id="login-role">
              <option value="Student">Student</option>
              <option value="Lecturer">Lecturer</option>
              <option value="Administrator">Administrator</option>
            </select>
          </div>

          <div class="field">
            <label for="login-email">Email address</label>
            <input id="login-email" type="email" placeholder="name@university.ac.ug">
          </div>

          <div class="field">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" placeholder="Enter your password">
          </div>

          <div class="auth-meta">
            <label style="display:flex;align-items:center;gap:8px;"><input type="checkbox"> Remember me</label>
            <a href="#">Forgot password?</a>
          </div>

          <button class="btn btn-primary" type="submit">Login to portal</button>
        </form>
      </div>
    </div>
  </section>
</main>
@include('layouts.footer')
@endsection


