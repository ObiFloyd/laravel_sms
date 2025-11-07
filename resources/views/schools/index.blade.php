@extends('layouts.app')

@section('content')
<div class="container">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Schools</h3>
    @role('SuperAdmin')
      <a href="{{ route('schools.create') }}" class="btn btn-primary">Add School</a>
    @endrole
  </div>

  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Code</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Active</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($schools as $index => $school)
      <tr>
        <td>{{ $schools->firstItem() + $index }}</td>
        <td>{{ $school->name }}</td>
        <td>{{ $school->code }}</td>
        <td>{{ $school->email }}</td>
        <td>{{ $school->phone }}</td>
        <td>{{ $school->is_active ? 'Yes' : 'No' }}</td>
        <td>
          <a href="{{ route('schools.edit', $school) }}" class="btn btn-sm btn-outline-secondary">Edit</a>

          <form action="{{ route('schools.destroy', $school) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this school?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="7" class="text-center">No schools found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {{ $schools->links() }}
  </div>
</div>
@endsection
