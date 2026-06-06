@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">
        Matières
    </h1>

    <a href="{{ route('subjects.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Nouvelle matière
    </a>

</div>

<table class="w-full bg-white shadow rounded">

    <thead>

    <tr class="border-b">

        <th class="p-4 text-left">Nom</th>
        <th class="p-4 text-left">Active</th>
        <th class="p-4 text-left">Actions</th>

    </tr>

    </thead>

    <tbody>

    @foreach($subjects as $subject)

        <tr class="border-b">

            <td class="p-4">
                {{ $subject->name }}
            </td>

            <td class="p-4">

                @if($subject->is_active)
                    Oui
                @else
                    Non
                @endif

            </td>

            <td class="p-4 flex gap-2">

                <a href="{{ route('subjects.edit',$subject) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Modifier
                </a>

                <form method="POST"
                      action="{{ route('subjects.destroy',$subject) }}">

                    @csrf
                    @method('DELETE')

                    <button
                        class="bg-red-600 text-white px-3 py-1 rounded">
                        Supprimer
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection