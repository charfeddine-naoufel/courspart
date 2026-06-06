<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => 'required|max:255',

            'email' => 'required|email',

            'password' => 'nullable|min:8',

            'bio' => 'nullable',

            'hourly_rate' => 'nullable|numeric',

            'experience_years' => 'nullable|integer',

            'qualification' => 'nullable',

            'subjects' => 'nullable|array'
        ];
    }
}