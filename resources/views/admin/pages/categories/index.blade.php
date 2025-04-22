@extends('admin.layouts.master')
@section('title', 'Categories')
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Categories</h5>
          <small class="text-muted float-end">List of all categories</small>
          <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Add Category</a>
        </div>
        <div class="card-body">
          <table class="table-striped table-bordered table" id="menuTable">
            <thead>
              <tr>
                <th>SI</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Posts</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>{{ $category->description }}</td>
                  <td>0</td>
                  <td class="text-center">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                      <iconify-icon icon="ph:eye"></iconify-icon>
                    </a>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                      <iconify-icon icon="ph:note-pencil-light"></iconify-icon>
                    </a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this menu?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">
                        <iconify-icon icon="ph:trash"></iconify-icon>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
