@extends('admin.layouts.master')
@section('title', 'Add Video')
@section('content')
  <div class="container" style="margin-bottom: 150px;">
    <h2 class="mb-4">Create New Movie</h2>
    <form id="create-video-form" action="{{ route('admin.videos.store') }}" method="POST"
      enctype="multipart/form-data">
      @csrf

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="form-section">
        <h4>Basic Information</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label>Movie Title</label>
            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{ old('title') }}" required>
          </div>
          <div class="col-md-6">
            <label>Language</label>
            <input class="form-control @error('language') is-invalid @enderror" name="language" type="text" value="{{ old('language') }}" required>
          </div>
          <div class="col-md-6">
            <label>Subtitle Language (Comma Separated)</label>
            <input class="form-control @error('subtitle_language') is-invalid @enderror" name="subtitle_language" type="text"
              value="{{ old('subtitle_language') }}">
          </div>
          <div class="col-md-6">
            <label>Duration (in minutes)</label>
            <input class="form-control @error('duration') is-invalid @enderror" name="duration" type="number" value="{{ old('duration') }}"
              min="1" step="1" required>
          </div>
          <div class="col-md-6">
            <label>Release Date</label>
            <input class="form-control @error('release_date') is-invalid @enderror" name="release_date" type="date" value="{{ old('release_date') }}"
              required>
          </div>

          <!-- Trailer URL -->
          <div class="col-md-6">
            <label>Trailer URL</label>
            <input class="form-control @error('trailer_url') is-invalid @enderror" name="trailer_url" type="url" value="{{ old('trailer_url') }}"
              placeholder="Youtube trailer link">
          </div>

          <!-- country -->
          <div class="col-md-4">
            <label>Country</label>
            <input class="form-control @error('country') is-invalid @enderror" name="country" type="text" value="{{ old('country') }}" required>
          </div>

          <!-- age restriction -->
          <div class="col-md-4">
            <label>Age Restriction</label>
            <select class="form-select @error('age_restriction') is-invalid @enderror" name="age_restriction" required>
              <option value="G">G (General Audience)</option>
              <option value="PG">PG (Parental Guidance)</option>
              <option value="PG-13">PG-13 (Parents Strongly Cautioned)</option>
              <option value="R">R (Restricted)</option>
              <option value="NC-17">NC-17 (Adults Only)</option>
            </select>
          </div>

          <!-- status -->
          <div class="col-md-4">
            <label>Status</label>
            <select class="form-select @error('production_status') is-invalid @enderror" name="production_status" required>
              <option value="released">Released</option>
              <option value="upcoming">Upcoming</option>
              <option value="post-production">Post-Production</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-section">
        <h4>Movie Details</h4>
        <div class="row g-3">
          <div class="col-md-12">
            <label>IMDb Description</label>
            <textarea class="form-control @error('imdb_description') is-invalid @enderror" name="imdb_description" rows="3"></textarea>
          </div>
          <div class="col-md-3">
            <label>Director</label>
            <input class="form-control @error('director') is-invalid @enderror" name="director" type="text" value="{{ old('director') }}" required>
          </div>
          <div class="col-md-3">
            <label>Writer</label>
            <input class="form-control @error('writer') is-invalid @enderror" name="writer" type="text" value="{{ old('writer') }}" required>
          </div>
          <div class="col-md-5">
            <label>Actors</label>
            <input class="form-control @error('actor') is-invalid @enderror" name="actor" type="text" value="{{ old('actor') }}" required>
          </div>
          <div class="col-md-1">
            <label>IMDB Rating</label>
            <input class="form-control @error('imdb_rating') is-invalid @enderror" name="imdb_rating" type="number" value="{{ old('imdb_rating') }}">
          </div>
          <div class="col-md-6">
            <label>Movie Type</label>
            <select class="form-select @error('type') is-invalid @enderror" name="type" required>
              <option disabled selected>Select Type</option>
              <option value="action">Action</option>
              <option value="anime">Anime</option>
              <option value="fantasy">Fantasy</option>
              <option value="adventure">Adventure</option>
              <option value="adult">Adult</option>
              <option value="comedy">Comedy</option>
              <option value="horror">Horror</option>
              <option value="romance">Romance</option>
              <option value="thriller">Thriller</option>
              <option value="crime">Crime</option>
              <option value="drama">Drama</option>
              <option value="mystery">Mystery</option>
              <option value="sci-fi">Sci-Fi</option>
            </select>
          </div>
          <div class="col-md-6">
            <label>Categories</label>
            <select class="select2 form-select @error('category') is-invalid @enderror" name="category[]" multiple required>
              @forelse ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @empty
                <option disabled selected>No Category Found</option>
              @endforelse
            </select>
          </div>
          <div class="col-md-4">
            <label>Budget</label>
            <input class="form-control @error('budget') is-invalid @enderror" name="budget" type="number" value="{{ old('budget') }}">
          </div>
          <div class="col-md-4">
            <label>Box Office Collection</label>
            <input class="form-control @error('box_office_collection') is-invalid @enderror" name="box_office_collection" type="number"
              value="{{ old('box_office_collection') }}">
          </div>
          <div class="col-md-4">
            <label>Production Company</label>
            <input class="form-control @error('production_company') is-invalid @enderror" name="production_company" type="text"
              value="{{ old('production_company') }}">
          </div>
        </div>
      </div>

      <div class="form-section">
        <h4>Media Files</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label>Thumbnail</label>
            <input class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" type="file" value="{{ old('thumbnail') }}"
              required>
          </div>
          <div class="col-md-6">
            <label>Background Poster</label>
            <input class="form-control @error('background_poster') is-invalid @enderror" name="background_poster" type="file" value="{{ old('background_poster') }}">
          </div>
          <div class="col-md-6">
            <label>Screenshots (multiple)</label>
            <input class="form-control @error('screenshot') is-invalid @enderror" name="screenshot[]" type="file" value="{{ old('screenshot') }}"
              multiple required>
          </div>
          <div class="col-md-6">
            <label>Trailer Video (optional)</label>
            <input class="form-control @error('trailer') is-invalid @enderror" name="trailer" type="file" value="{{ old('trailer') }}">
          </div>
          <div class="col-md-6">
            <label>Subtitle File (multiple)</label>
            <input class="form-control @error('subtitle_file') is-invalid @enderror" name="subtitle_file[]" type="file" value="{{ old('subtitle_file') }}" multiple>
          </div>
        </div>
      </div>

      <!-- Seo -->
      <div class="form-section">
        <h4>SEO</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label>Slug</label>
            <input class="form-control @error('slug') is-invalid @enderror" name="slug" type="text" value="{{ old('slug') }}" required>
          </div>
          <div class="col-md-6">
            <label>Meta title</label>
            <input class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" type="text" value="{{ old('meta_title') }}"
              required>
          </div>
          <div class="col-md-12">
            <label>Keywords (comma separated)</label>
            <textarea class="form-control @error('keyword') is-invalid @enderror" name="keyword" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <label>Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <label>Short Description</label>
            <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" rows="3" required></textarea>
          </div>
        </div>
      </div>

      <div class="form-section">
        <h4>Download Links</h4>
        <div id="download-links-area">
          <div class="row g-3 download-link-row mb-3">
            <div class="col-md-11">
              <div class="row">
                <div class="col-md-6">
                  <input class="form-control @error('download_link.0.title') is-invalid @enderror" name="download_link[0][title]" type="text"
                    value="{{ old('download_link.0.title') }}" placeholder="Title" required>
                </div>
                <div class="col-md-6">
                  <input class="form-control @error('download_link.0.url') is-invalid @enderror" name="download_link[0][url]" type="text" value="{{ old('download_link.0.url') }}" placeholder="Download Link URL" required>
                </div>
                <div class="row m-0 mt-4 p-0">
                  <div class="col-md-4">
                    <input class="form-control @error('download_link.0.format') is-invalid @enderror" name="download_link[0][format]" type="text" value="{{ old('download_link.0.format') }}" placeholder="Format">
                  </div>
                  <div class="col-md-4">
                    <input class="form-control @error('download_link.0.size') is-invalid @enderror" name="download_link[0][size]" type="text" value="{{ old('download_link.0.size') }}" placeholder="Size" required>
                  </div>
                  <div class="col-md-4">
                    <input class="form-control @error('download_link.0.quality') is-invalid @enderror" name="download_link[0][quality]" type="text"
                      value="{{ old('download_link.0.quality') }}" placeholder="Quality">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-1 d-flex align-items-center">
              <button class="btn btn-danger remove-link" type="button">x</button>
            </div>
          </div>
        </div>
        <button class="btn btn-primary mt-2" id="add-download-link" type="button">Add More Download
          Link</button>
      </div>

      <button class="btn btn-success btn-lg float-end" type="submit">Create Movie</button>
    </form>
  </div>
@endsection

@push('styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css"
    rel="stylesheet" />
  <style>
    .form-section {
      /* background: #f9f9f9; */
      padding: 25px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
    }

    .form-section h4 {
      margin-bottom: 20px;
      font-weight: 600;
      border-bottom: 2px solid #eee;
      padding-bottom: 8px;
    }

    .select2-dropdown {
      background-color: rgb(0, 0, 0) !important;
    }

    .select2-container--default .select2-selection--multiple {
      background-color: transparent !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: transparent !important;
    }

    .select2-container--default .select2-results__option--selected {
      background-color: #5897fb !important;
    }
  </style>
@endpush

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.select2').select2({
        placeholder: 'Select options',
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' '],
      });

      let linkCount = 1;
      $('#add-download-link').click(function() {
        const newLink = `
                <div class="row g-3 mt-3 mb-3 download-link-row">
                    <div class="col-md-11">
                      <div class="row">
                        <div class="col-md-6">
                          <input class="form-control" name="download_link[${linkCount}][title]" type="text"
                            placeholder="Title" required value="{{ old('download_link.${linkCount}.title') }}">
                        </div>
                        <div class="col-md-6">
                          <input class="form-control" name="download_link[${linkCount}][url]" type="text"
                            placeholder="Download Link URL" required value="{{ old('download_link.${linkCount}.url') }}">
                        </div>
                        <div class="row m-0 mt-4 p-0">
                          <div class="col-md-4">
                            <input class="form-control" name="download_link[${linkCount}][format]" type="text"
                              placeholder="Format" value="{{ old('download_link.${linkCount}.format') }}">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" name="download_link[${linkCount}][size]" type="text"
                              placeholder="Size" required value="{{ old('download_link.${linkCount}.size') }}">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" name="download_link[${linkCount}][quality]" type="text"
                              placeholder="Quality" value="{{ old('download_link.${linkCount}.quality') }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1 d-flex  align-items-center">
                      <button class="btn btn-danger remove-link" type="button">x</button>
                    </div>
                </div>`;
        $('#download-links-area').append(newLink);
        linkCount++;
      });

      $(document).on('click', '.remove-link', function() {
        $(this).closest('.download-link-row').remove();
      });

      // form submission
      $('#create-video-form').on('submit', function(e) {
        e.preventDefault();

        // validate downloading links
        const downloadLinks = $(this).find('input[name^="download_link"]');
        if (downloadLinks.length === 0) {
          alert('Please add at least one download link.');
          return false; // Prevent form submission
        }

        // Submit the form using AJAX
        $.ajax({
          url: $(this).attr('action'),
          type: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(response) {
            // Handle success response
            alert('Video created successfully!');
            window.location.href = response.redirect_url; // Redirect to the desired URL
          },
          error: function(xhr, status, error) {
            // Handle error response
            alert('An error occurred while creating the video.');
          }
        });
      });
    });
  </script>
@endpush
