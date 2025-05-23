@extends('admin.layouts.master')

@section('title', 'Country List')

@section('content')
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h2>Countries</h2>
        <small class="text-muted">Manage all countries in the system</small>
      </div>
      <a class="btn btn-primary" href="{{ route('admin.countries.create') }}">
        + Add Country
      </a>
    </div>

    <div class="mb-3">
      <input class="form-control w-50" type="text" placeholder="Search country...">
    </div>

    <div class="card">
      <div class="table-responsive">
        <table class="table-bordered table-hover mb-0 table">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Country Name</th>
              <th>Created At</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($countries as $index => $country)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $country->name }}</td>
                <td>{{ $country->created_at->format('d M Y') }}</td>
                <td class="text-end">
                  <a class="btn btn-sm btn-warning me-1"
                    href="{{ route('admin.countries.edit', $country->id) }}">Edit</a>
                  <form class="d-inline" action="{{ route('admin.countries.destroy', $country->id) }}"
                    method="POST" onsubmit="return confirm('Are you sure you want to delete this country?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td class="text-muted text-center" colspan="5">No countries found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <div class="mt-3">
      {{ $countries->links('pagination::bootstrap-5') }}
    </div>
  </div>
@endsection
