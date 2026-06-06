<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\SchoolLevel;
use App\Models\StudentProfile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where(
            'role',
            'student'
        )
        ->with('studentProfile.level')
        ->get();

        return view(
            'admin.students.index',
            compact('students')
        );
    }

    public function create()
    {
        $levels = SchoolLevel::all();

        return view(
            'admin.students.create',
            compact('levels')
        );
    }

    public function store(
        StudentRequest $request
    ) {

        $student = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            'role' => 'student'

        ]);

        StudentProfile::create([

            'user_id' => $student->id,

            'school_level_id' =>
                $request->school_level_id,

            'birth_date' =>
                $request->birth_date,

            'objective' =>
                $request->objective

        ]);

        return redirect()
            ->route('students.index');
    }
}