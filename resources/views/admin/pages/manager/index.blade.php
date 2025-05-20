@extends('admin.layouts.master')

@section('title', 'Manager List')

@section('content')
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0">Manager List</h2>
      <a class="btn btn-primary" href="{{ route('admin.manager.create') }}">
        <i class="bi bi-plus-circle me-1"></i> Add New Manager
      </a>
    </div>

    <div class="card rounded-3 border-0 shadow-sm">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table-hover table-bordered mb-0 table">
            <thead class="table-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Profile</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th class="text-end" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $index => $user)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>
                    <img class="rounded-circle" src="{{ asset($user->profile_picture) ?? 'https://via.placeholder.com/40x40' }}"
                      alt="Avatar" width="40" height="40">
                  </td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <span class="badge bg-primary">{{ ucfirst($user->role) }}</span>
                  </td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-outline-primary" href="">
                      <i class="bi bi-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-primary" href="">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <form class="d-inline" action="" method="POST"
                      onsubmit="return confirm('Are you sure?');">
                      @csrf @method('DELETE')
                      <button class="btn btn-sm btn-outline-danger" type="submit">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td class="py-4 text-center" colspan="6">No users found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
