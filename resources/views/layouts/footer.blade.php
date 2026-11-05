<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-about">
        <a class="brand" href="{{ route('home') }}">
          <div class="brand-mark">U</div>
          <div class="brand-copy"><strong class="footer-brand-title">Student Management System</strong><span class="footer-brand-subtitle">Student Management System</span></div>
        </a>
        <p>A central online space for students, lecturers and administrators to access academic information and manage university activities.</p>
      </div>
      <div>
        <h4>Quick links</h4>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('students.index') }}">Student directory</a></li>
          <li><a href="{{ route('courses.index') }}">Courses</a></li>
          <li><a href="{{ route('lecturers.index') }}">Lecturer directory</a></li>
          <li><a href="{{ route('registrations.index') }}">Course registration</a></li>
        </ul>
      </div>
      <div>
        <h4>System information</h4>
        <ul class="footer-links">
          <li>Student services</li>
          <li>Academic information</li>
          <li>Lecturer support</li>
          <li>Administrator access</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Student Management System. All rights reserved.</span>
      <span>Designed for academic administration</span>
    </div>
  </div>
</footer>
