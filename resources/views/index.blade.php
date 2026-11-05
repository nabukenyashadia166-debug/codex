@extends('layouts.main')
@section('content')
@include('layouts.header')
<main>
<section class="hero">
    <div class="container">
        <div class="hero-content">
        <div class="eyebrow">Welcome to the Student Management System</div><h1>Learn. Grow. <span>Achieve more.</span></h1><p>Your university experience, organised in one place. Explore courses, manage student information and make course registration simple and accessible.</p><div class="hero-buttons"><a class="btn btn-primary" href="{{ route('courses.index') }}">Explore courses&nbsp; →</a><a class="btn btn-outline" href="{{ route('register') }}">Create account</a><a class="btn btn-outline" href="{{ route('login') }}">Login</a></div><div class="hero-note"><span class="dot"></span> A connected portal for the university community</div></div></div></section>
<section class="quick-stats"><div class="container"><div class="stats-grid"><div class="stat"><strong>250+</strong><span>Students in the system</span></div><div class="stat"><strong>18</strong><span>Academic courses</span></div><div class="stat"><strong>420+</strong><span>Course registrations</span></div><div class="stat"><strong>24/7</strong><span>Portal access</span></div></div></div></section>
<section class="section"><div class="container"><div class="section-heading"><div class="eyebrow">What you can do</div><h2>Everything you need, in one portal</h2><p>Find the information and services you need through a simple, organised university platform.</p></div><div class="feature-grid">
<article class="feature-card"><div class="feature-icon">♙</div><h3>Student management</h3><p>View student profiles and keep academic information organised in one place.</p><a class="text-link" href="{{ route('students.index') }}">View students →</a></article>
<article class="feature-card"><div class="feature-icon">▤</div><h3>Course catalogue</h3><p>Explore available courses, course codes, lecturers and credit units.</p><a class="text-link" href="{{ route('courses.index') }}">Explore courses →</a></article>
<article class="feature-card"><div class="feature-icon">✓</div><h3>Course registration</h3><p>Access course registration information and review registration records.</p><a class="text-link" href="{{ route('registrations.index') }}">Go to registration →</a></article>
<article class="feature-card"><div class="feature-icon">⚙</div><h3>Admin management</h3><p>Manage student records, course offerings, registrations and user accounts from the admin dashboard.</p><a class="text-link" href="{{ route('admin.dashboard') }}">Open admin portal →</a></article>
</div></div></section>


<section class="section"><div class="container"><div class="cta-band"><div><h2>Ready to explore the student portal?</h2><p>Browse courses and discover the services available in the system.</p></div><a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Launch admin dashboard&nbsp; →</a></div></div></section>
</main>
@include('layouts.footer')
@endsection
