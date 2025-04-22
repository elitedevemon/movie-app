@extends('admin.layouts.master')
@section('title', 'Create Category')

@section('content')
  <div class="container mt-4">
    <h2>Create New Category Item</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf

      <div class="form-group mb-3">
        <label for="name">Category Name</label>
        <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"
          required>
      </div>

      <div class="form-group mb-3">
        <label for="slug">Slug</label>
        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug') }}"
          readonly required>
      </div>

      <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
      </div>
      <button class="btn btn-primary" type="submit">Save Menu</button>
      <a class="btn btn-secondary" href="{{ route('admin.menus.index') }}">Back</a>
    </form>
  </div>
@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slugInput = document.getElementById('slug');
      const nameInput = document.getElementById('name');


      nameInput.addEventListener('input', function() {
        if (nameInput.value.trim() === '') {
          slugInput.value = '';
          return;
        }
        // Generate slug from name
        const baseSlug = nameInput.value
          .toLowerCase()
          .replace(/[^a-z0-9]+/g, '-') // replace non-alphanum with hyphen
          .replace(/^-+|-+$/g, ''); // trim hyphens from start and end

        // Get current date and time
        const now = new Date();
        const dateTimePart = now.getFullYear().toString() +
          (now.getMonth() + 1).toString().padStart(2, '0') +
          now.getDate().toString().padStart(2, '0') +
          now.getHours().toString().padStart(2, '0') +
          now.getMinutes().toString().padStart(2, '0') +
          now.getSeconds().toString().padStart(2, '0');

        // Generate random 4-character alphanumeric code
        const randomCode = Math.random().toString(36).substring(2, 6);

        // Combine all parts for unique slug
        const finalSlug = `${baseSlug}-${dateTimePart}-${randomCode}`;

        // Set value to slug input
        slugInput.value = finalSlug;
      });
    });
  </script>
@endpush
