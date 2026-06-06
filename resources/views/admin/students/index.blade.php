@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">
        Élèves
    </h1>

    <a href="{{ route('students.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">

        Nouvel élève

    </a>

</div>

<table class="w-full bg-white shadow">

    <thead>

    <tr>

        <th class="p-4">Nom</th>

        <th class="p-4">Email</th>

        <th class="p-4">Niveau</th>

        <th class="p-4">Actions</th>

    </tr>

    </thead>

    <tbody>

    @foreach($students as $student)

        <tr>

            <td class="p-4">
                {{ $student->name }}
            </td>

            <td class="p-4">
                {{ $student->email }}
            </td>

            <td class="p-4">
                {{ optional($student->studentProfile?->level)->name }}
            </td>

            <td class="p-4">

                <a href="{{ route('students.edit',$student) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">

                    Modifier

                </a>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection