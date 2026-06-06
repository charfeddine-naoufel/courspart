@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Nouvelle matière
</h1>

<form method="POST"
      action="{{ route('subjects.store') }}">

    @include('admin.subjects.form')

</form>

@endsection