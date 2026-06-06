<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Subject;
use App\Models\TeacherProfile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where(
            'role',
            'teacher'
        )
        ->with('teacherProfile')
        ->get();

        return view(
            'admin.teachers.index',
            compact('teachers')
        );
    }

    public function create()
    {
        $subjects = Subject::all();

        return view(
            'admin.teachers.create',
            compact('subjects')
        );
    }

    public function store(
        TeacherRequest $request
    ) {

        $teacher = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            'role' => 'teacher'

        ]);

        $profile = TeacherProfile::create([

            'user_id' => $teacher->id,

            'bio' => $request->bio,

            'hourly_rate' => $request->hourly_rate,

            'experience_years' =>
                $request->experience_years,

            'qualification' =>
                $request->qualification,

            'is_verified' => false

        ]);

        if ($request->subjects) {

            $profile->subjects()
                ->sync($request->subjects);
        }

        return redirect()
            ->route('teachers.index');
    }
}