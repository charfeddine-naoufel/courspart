@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Réservations

</h1>

<table class="w-full bg-white shadow">

    <thead>

    <tr>

        <th class="p-4">Élève</th>

        <th class="p-4">Professeur</th>

        <th class="p-4">Matière</th>

        <th class="p-4">Date</th>

        <th class="p-4">Statut</th>

    </tr>

    </thead>

    <tbody>

    @foreach($bookings as $booking)

        <tr>

            <td class="p-4">
                {{ $booking->student->name }}
            </td>

            <td class="p-4">
                {{ $booking->teacher->name }}
            </td>

            <td class="p-4">
                {{ $booking->subject->name }}
            </td>

            <td class="p-4">
                {{ $booking->course_date }}
            </td>

            <td class="p-4">

                {{ $booking->status }}

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection
