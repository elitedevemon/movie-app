@extends('admin.layouts.master')
@section('title', 'Articles')
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Articles</h5>
          <small class="text-muted float-end">List of all articles</small>
          <a class="btn btn-primary" href="{{ route('admin.articles.create') }}">Add Article</a>
        </div>
        <div class="card-body">
          <table class="table-striped table-bordered table" id="menuTable">
            <thead>
              <tr>
                <th>SI</th>
                <th style="width: 5%">Thumbnail</th>
                <th style="width: 25%">Title</th>
                <th style="width: 60%">Short Description</th>
                <th style="width: 10%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img class="img-fluid" src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}">
                  </td>
                  <td>{{ $article->title }}</td>
                  <td>{{ Str::limit($article->short_description, 300) }}</td>
                  <td class="text-center">
                    <a class="btn btn-warning btn-sm" href="{{ route('admin.articles.edit', $article->id) }}">
                      <iconify-icon icon="ph:note-pencil-light"></iconify-icon>
                    </a>
                    <form style="display:inline-block;" action="{{ route('admin.articles.destroy', $article->id) }}"
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
