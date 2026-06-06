@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Modifier matière
</h1>

<form method="POST"
      action="{{ route('subjects.update',$subject) }}">

    @method('PUT')

    @include('admin.subjects.form')

</form>

@endsection