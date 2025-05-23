@extends('admin.layouts.master')

@section('title', 'Create Country')

@section('content')
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Add New Country</h2>
      <a class="btn btn-secondary" href="{{ route('admin.countries.index') }}">
        ← Back to List
      </a>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following issues:
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card shadow-sm">
      <div class="card-body">
        <form action="{{ route('admin.countries.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label class="form-label" for="name">Country Name <span class="text-danger">*</span></label>
            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              type="text" value="{{ old('name') }}" placeholder="Enter country name (multiple comma separated)">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="text-end">
            <button class="btn btn-success" type="submit">✅ Save Country</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
