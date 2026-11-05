<div class="top-strip">
  <div class="container"><span>Student Management System</span><span>Supporting learning • Connecting our university community</span></div>
</div>

<header class="site-header">
  <div class="container navbar">
    <a class="brand" href="{{ route('home') }}">
      <div class="brand-mark">U</div>
      <div class="brand-copy"><strong>Student Management System</strong></div>
    </a>
    <button class="menu-toggle" aria-label="Toggle navigation">☰</button>
    <nav class="nav-links">
      <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
      <a class="{{ request()->routeIs('students.index') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
      <a class="{{ request()->routeIs('courses.index') ? 'active' : '' }}" href="{{ route('courses.index') }}">Courses</a>
      <a class="{{ request()->routeIs('lecturers.index') ? 'active' : '' }}" href="{{ route('lecturers.index') }}">Lecturers</a>
      <a class="{{ request()->routeIs('registrations.index') ? 'active' : '' }}" href="{{ route('registrations.index') }}">Registrations</a>
      <a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
      <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Admin</a>
    </nav>
    <div class="nav-actions">
      <a class="btn btn-outline" href="{{ route('login') }}">Login</a>
      <a class="btn btn-primary" href="{{ route('register') }}">Create account ↗</a>
    </div>
  </div>
</header>
