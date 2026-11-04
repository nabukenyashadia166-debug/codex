@extends('layouts.main')
@section('content')
@include('layouts.header')
<main><section class="page-hero"><div class="container"><div class="eyebrow">University student portal</div><h1>Courses</h1><p>Discover academic courses and course information.</p></div></section><section class="inner-content"><div class="container"><div class="toolbar"><div><h2>Academic course catalogue</h2><p class="muted">Review courses offered by the university.</p></div><input class="search" type="search" placeholder="Search course code or name"></div>
<div class="table-card"><div class="table-wrap"><table><thead><tr><th>Course code</th><th>Course title</th><th>Lecturer</th><th>Credit units</th><th>Availability</th></tr></thead><tbody>
<tr><td>BCS3101</td><td>Advanced Web Application Development</td><td>Mr. Ssemanda</td><td>4</td><td><span class="pill">Available</span></td></tr>
<tr><td>BCS3102</td><td>Database Systems</td><td>Ms. Namusoke</td><td>3</td><td><span class="pill">Available</span></td></tr>
<tr><td>BCS3103</td><td>Computer Networks</td><td>Mr. Okello</td><td>3</td><td><span class="pill">Available</span></td></tr>
<tr><td>BCS3104</td><td>Information Systems Audit</td><td>Ms. Nambasa</td><td>3</td><td><span class="pill">Available</span></td></tr>
</tbody></table></div></div></div></section></main>
@include('layouts.footer')
@endsection
