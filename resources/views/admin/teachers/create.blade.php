@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Nouveau professeur
</h1>

<form method="POST"
      action="{{ route('teachers.store') }}">

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

        <input
            name="hourly_rate"
            placeholder="Tarif"
            class="border p-3 rounded"
        >

    </div>

    <div class="mt-4">

        <textarea
            name="bio"
            placeholder="Biographie"
            class="w-full border rounded p-3"
        ></textarea>

    </div>

    <div class="mt-4">

        <input
            name="qualification"
            placeholder="Diplômes"
            class="w-full border p-3 rounded"
        >

    </div>

    <div class="mt-4">

        <input
            name="experience_years"
            placeholder="Années d'expérience"
            class="w-full border p-3 rounded"
        >

    </div>

    <div class="mt-4">

        <label class="block mb-2">
            Matières
        </label>

        @foreach($subjects as $subject)

            <div>

                <label>

                    <input
                        type="checkbox"
                        name="subjects[]"
                        value="{{ $subject->id }}"
                    >

                    {{ $subject->name }}

                </label>

            </div>

        @endforeach

    </div>

    <button
        class="mt-6 bg-green-600 text-white px-6 py-2 rounded">

        Enregistrer

    </button>

</form>

@endsection