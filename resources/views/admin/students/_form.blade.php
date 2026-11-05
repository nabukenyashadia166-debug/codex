@php($student = $student ?? null)

<label>Student Number</label>
<input type="text" name="student_number" value="{{ old('student_number', $student?->student_number) }}">
@error('student_number') <div class="error">{{ $message }}</div> @enderror

<label>First Name</label>
<input type="text" name="first_name" value="{{ old('first_name', $student?->first_name) }}">
@error('first_name') <div class="error">{{ $message }}</div> @enderror

<label>Last Name</label>
<input type="text" name="last_name" value="{{ old('last_name', $student?->last_name) }}">
@error('last_name') <div class="error">{{ $message }}</div> @enderror

<label>Email</label>
<input type="email" name="email" value="{{ old('email', $student?->email) }}">
@error('email') <div class="error">{{ $message }}</div> @enderror

<label>Gender</label>
<select name="gender">
    <option value="">-- Select --</option>
    @foreach (['Male', 'Female'] as $option)
        <option value="{{ $option }}" @selected(old('gender', $student?->gender) === $option)>{{ $option }}</option>
    @endforeach
</select>
@error('gender') <div class="error">{{ $message }}</div> @enderror

<label>Phone (optional)</label>
<input type="text" name="phone" value="{{ old('phone', $student?->phone) }}">
@error('phone') <div class="error">{{ $message }}</div> @enderror

<label>Course of Study</label>
<input type="text" name="course_of_study" value="{{ old('course_of_study', $student?->course_of_study) }}">
@error('course_of_study') <div class="error">{{ $message }}</div> @enderror