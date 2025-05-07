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
                <th style="width: 5%">Thumbnail</th>
                <th style="width: 25%">Movie Title</th>
                <th style="width: 50%">Description</th>
                <th style="width: 5%">Posts</th>
                <th style="width: 10%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($videos as $video)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img class="img-fluid" src="{{ asset($video->thumbnail) }}" alt="{{ $video->name }}">
                  </td>
                  <td>{{ $video->title }}</td>
                  <td>{{ Str::limit($video->description, 300) }}</td>
                  <td>0</td>
                  <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.videos.edit', $video->id) }}">
                      <iconify-icon icon="ph:eye"></iconify-icon>
                    </a>
                    <a class="btn btn-warning btn-sm" href="{{ route('admin.videos.edit', $video->id) }}">
                      <iconify-icon icon="ph:note-pencil-light"></iconify-icon>
                    </a>
                    <form style="display:inline-block;" action="{{ route('admin.videos.destroy', $video->id) }}"
                      method="POST" onsubmit="return confirm('Are you sure you want to delete this menu?');">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">
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
