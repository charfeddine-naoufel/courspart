<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

            'school_level_id' => 'nullable|exists:school_levels,id',

            'birth_date' => 'nullable|date',

            'objective' => 'nullable'

        ];
    }
}