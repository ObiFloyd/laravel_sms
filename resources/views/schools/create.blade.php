@extends('layouts.app')
@section('content')
<div class="container">
  <h3>Add School</h3>
  <form action="{{ route('schools.store') }}" method="POST">
    @include('schools._form')
  </form>
</div>
@endsection
