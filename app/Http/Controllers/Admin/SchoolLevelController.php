<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolLevelRequest;
use App\Models\SchoolLevel;
use Illuminate\Support\Str;

class SchoolLevelController extends Controller
{
    public function index()
    {
        $levels = SchoolLevel::orderBy('sort_order')->get();

        return view(
            'admin.school-levels.index',
            compact('levels')
        );
    }

    public function create()
    {
        return view('admin.school-levels.create');
    }

    public function store(SchoolLevelRequest $request)
    {
        SchoolLevel::create([

            'name' => $request->name,

            'slug' => Str::slug($request->name),

            'sort_order' =>
                SchoolLevel::count() + 1

        ]);

        return redirect()
            ->route('school-levels.index');
    }

    public function edit(SchoolLevel $schoolLevel)
    {
        return view(
            'admin.school-levels.edit',
            compact('schoolLevel')
        );
    }

    public function update(
        SchoolLevelRequest $request,
        SchoolLevel $schoolLevel
    ) {

        $schoolLevel->update([

            'name' => $request->name,

            'slug' => Str::slug($request->name)

        ]);

        return redirect()
            ->route('school-levels.index');
    }

    public function destroy(
        SchoolLevel $schoolLevel
    ) {
        $schoolLevel->delete();

        return back();
    }
}