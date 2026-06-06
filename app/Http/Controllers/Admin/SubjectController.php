<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::latest()->get();

        return view(
            'admin.subjects.index',
            compact('subjects')
        );
    }

    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        Subject::create([

            'name' => $request->name,

            'slug' => Str::slug($request->name),

            'description' => $request->description,

            'is_active' => $request->boolean('is_active'),

        ]);

        return redirect()
            ->route('subjects.index');
    }

    public function edit(Subject $subject)
    {
        return view(
            'admin.subjects.edit',
            compact('subject')
        );
    }

    public function update(
        SubjectRequest $request,
        Subject $subject
    ) {
        $subject->update([

            'name' => $request->name,

            'slug' => Str::slug($request->name),

            'description' => $request->description,

            'is_active' => $request->boolean('is_active'),

        ]);

        return redirect()
            ->route('subjects.index');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return back();
    }
}