@extends('admin.layouts.master')
@section('title', 'Create Manager')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <h2 class="mb-4 text-center">Add New Manager</h2>

      <form method="POST" action="{{ route('admin.manager.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" name="password" required>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" required>
          @error('password_confirmation')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- profile picture -->
        <div class="mb-3">
          <label for="profile_picture" class="form-label">Profile Picture</label>
          <input type="file" class="form-control @error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture" required>
          @error('profile_picture')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Status -->
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
          </select>
          @error('status')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Submit -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Create Manager</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
