<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('student')?->id;

        return [
            'student_number'  => ['required', 'string', 'max:50', Rule::unique('students', 'student_number')->ignore($id)],
            'first_name'      => ['required', 'string', 'max:100'],
            'last_name'       => ['required', 'string', 'max:100'],
            'email'           => ['required', 'email', 'max:255'],
            'phone'           => ['nullable', 'string', 'max:20'],
            'gender'          => ['required', Rule::in(['Male', 'Female'])],
            'course_of_study' => ['required', 'string', 'max:150'],
        ];
    }
}