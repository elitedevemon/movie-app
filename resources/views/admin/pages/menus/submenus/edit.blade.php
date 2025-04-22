@extends('admin.layouts.master')
@section('title', 'Edit Submenu')

@section('content')
  <div class="container mt-4">
    <h2>Edit Submenu Item</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.submenus.update', $submenu->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group mb-3">
        <label for="name">Menu Name</label>
        <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $submenu->name) }}"
          required>
      </div>

      <div class="form-group mb-3">
        <label for="slug">Slug</label>
        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug', $submenu->slug) }}"
          readonly required>
      </div>

      <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3">{{ old('description', $submenu->description) }}</textarea>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" checked disabled id="is_submenu" name="is_submenu" type="checkbox" value="1">
        <label class="form-check-label" for="is_submenu">Is this a Submenu?</label>
      </div>

      <div class="form-group mb-3">
        <label for="menu_id">Select Parent Menu</label>
        <select class="form-select" name="menu_id">
          <option selected disabled>-- Choose Parent Menu --</option>
          @foreach ($menus as $menu)
            <option {{ $menu->id === $submenu->menu->id ? 'selected' : '' }} value="{{ $menu->id }}">{{ $menu->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group mb-3">
        <label>Select Categories (maximum 5)</label>
        <div class="row">
          @foreach ($categories as $category)
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input category-checkbox" {{ $submenu->categoryCheck($category->id) === true ? 'checked' : '' }} id="cat_{{ $category->id }}"
                  name="categories[]" type="checkbox" value="{{ $category->id }}">
                <label class="form-check-label" for="cat_{{ $category->id }}">
                  {{ $category->name }}
                </label>
              </div>
            </div>
          @endforeach
        </div>
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
