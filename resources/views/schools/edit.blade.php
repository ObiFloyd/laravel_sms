@extends('layouts.app')
@section('content')
<div class="container">
  <h3>Edit School</h3>
  <form action="{{ route('schools.update', $school) }}" method="POST">
    @method('PUT')
    @include('schools._form')
  </form>
</div>
@endsection
