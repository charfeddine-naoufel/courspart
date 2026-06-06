@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Nouvel élève

</h1>

<form method="POST"
      action="{{ route('students.store') }}">

    @csrf

    <div class="grid grid-cols-2 gap-4">

        <input
            name="name"
            placeholder="Nom"
            class="border p-3 rounded"
        >

        <input
            name="email"
            placeholder="Email"
            class="border p-3 rounded"
        >

        <input
            type="password"
            name="password"
            placeholder="Mot de passe"
            class="border p-3 rounded"
        >

        <select
            name="school_level_id"
            class="border p-3 rounded">

            <option value="">
                Choisir un niveau
            </option>

            @foreach($levels as $level)

                <option
                    value="{{ $level->id }}">
                    {{ $level->name }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mt-4">

        <input
            type="date"
            name="birth_date"
            class="w-full border p-3 rounded"
        >

    </div>

    <div class="mt-4">

        <textarea
            name="objective"
            placeholder="Objectif pédagogique"
            class="w-full border p-3 rounded"
        ></textarea>

    </div>

    <button
        class="mt-6 bg-green-600 text-white px-6 py-2 rounded">

        Enregistrer

    </button>

</form>

@endsection