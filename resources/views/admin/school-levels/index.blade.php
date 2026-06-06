@extends('layouts.admin')

@section('content')
    <div class="flex justify-between mb-6">

        <h1 class="text-3xl font-bold">
            Niveaux scolaires
        </h1>

        <a href="{{ route('school-levels.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            Nouveau niveau
        </a>

    </div>

    <table class="w-full bg-white shadow rounded">

        <thead>

            <tr>

                <th class="p-4 text-left">
                    Nom
                </th>

                <th class="p-4 text-left">
                    Actions
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach ($levels as $level)
                <tr class="border-b">

                    <td class="p-4">
                        {{ $level->name }}
                    </td>

                    <td class="p-4 flex gap-2">

                        <a href="{{ route('school-levels.edit', $level) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Modifier
                        </a>

                        <form method="POST" action="{{ route('school-levels.destroy', $level) }}">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-600 text-white px-3 py-1 rounded">
                                Supprimer
                            </button>

                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
