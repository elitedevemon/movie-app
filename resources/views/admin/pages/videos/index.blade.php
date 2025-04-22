@extends('admin.layouts.master')
@section('title', 'Videos')
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Videos</h5>
          <small class="text-muted float-end">List of all videos</small>
          <a class="btn btn-primary" href="{{ route('admin.videos.create') }}">Add Video</a>
        </div>
        <div class="card-body">
          <table class="table-striped table-bordered table" id="menuTable">
            <thead>
              <tr>
                <th>SI</th>
                <th>Thumbnail</th>
                <th>Movie Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Posts</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($videos as $video)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img src="{{ asset($video->thumbnail) }}" alt="{{ $video->name }}" class="img-fluid" style="width: 100px; height: auto;">
                  </td>
                  <td>{{ $video->name }}</td>
                  <td>{{ $video->slug }}</td>
                  <td>{{ $video->description }}</td>
                  <td>0</td>
                  <td class="text-center">
                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-primary btn-sm">
                      <iconify-icon icon="ph:eye"></iconify-icon>
                    </a>
                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-warning btn-sm">
                      <iconify-icon icon="ph:note-pencil-light"></iconify-icon>
                    </a>
                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this menu?');">
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
