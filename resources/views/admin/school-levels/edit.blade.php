@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Modifier niveau scolaire
</h1>

<form method="POST"
      action="{{ route('school-levels.update',$schoolLevel) }}">

    @method('PUT')

    @include('admin.school-levels.form')

</form>

@endsection