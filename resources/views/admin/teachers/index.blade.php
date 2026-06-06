@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">
        Professeurs
    </h1>

    <a href="{{ route('teachers.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">

        Nouveau professeur

    </a>

</div>

<table class="w-full bg-white shadow">

    <thead>

    <tr>

        <th class="p-4">Nom</th>

        <th class="p-4">Email</th>

        <th class="p-4">Tarif</th>

        <th class="p-4">Validé</th>

        <th class="p-4">Actions</th>

    </tr>

    </thead>

    <tbody>

    @foreach($teachers as $teacher)

        <tr>

            <td class="p-4">
                {{ $teacher->name }}
            </td>

            <td class="p-4">
                {{ $teacher->email }}
            </td>

            <td class="p-4">
                {{ optional($teacher->teacherProfile)->hourly_rate }}
            </td>

            <td class="p-4">

                @if(optional($teacher->teacherProfile)->is_verified)
                    ✅
                @else
                    ❌
                @endif

            </td>

            <td class="p-4">

                <a href="{{ route('teachers.edit',$teacher) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">

                    Modifier

                </a>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection