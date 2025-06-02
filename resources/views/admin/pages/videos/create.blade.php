@extends('admin.layouts.master')
@section('title', 'Add Video')
@section('content')
  <div class="container" style="margin-bottom: 150px;">
    <form id="create-video-form" action="{{ route('admin.videos.store') }}" method="POST"
      enctype="multipart/form-data">
      @csrf

      {{-- <h2 class="mb-4">Create New Movie</h2> --}}
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0">Create New Video</h2>
        <button class="btn btn-primary d-inline-flex align-items-center fw-semibold gap-2 px-4 py-2 shadow-sm"
          type="submit">
          Save Video
          <iconify-icon icon="material-symbols:send-outline" width="20" height="20"></iconify-icon>
        </button>

      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row gx-4">
        <div class="col-xl-8">
          <div class="card mb-4">
            <div class="card-header with-btn">
              VIDEO INFORMATION
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Title <span class="text-danger">*</span></label>
                <input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                  type="text" value="{{ old('title') }}" placeholder="Video title" required>

                <label class="form-label mt-3">Slug <span class="text-danger">*</span></label>
                <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                  type="text" value="{{ old('slug') }}" placeholder="Video slug" required readonly>
                <div class="row my-3">
                  <div class="col-md-6">
                    <label class="form-label">Video Name <span class="text-danger">*</span></label>
                    <input class="form-control" name="name" type="text" placeholder="Video original name">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Subtitle Language (Comma separated)<span
                        class="text-danger">*</span></label>
                    <input class="form-control @error('subtitle_language') is-invalid @enderror"
                      name="subtitle_language" type="text" value="{{ old('subtitle_language') }}"
                      placeholder="Video subtitle language (Comma separated)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              PRODUCTION INFORMATION
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Actors Name (Comme separated) <span
                    class="text-danger">*</span></label>
                <input class="form-control @error('actor') is-invalid @enderror" name="actor" type="text"
                  value="{{ old('actor') }}" placeholder="Actors name (Comma separated)" required>

                <div class="row my-3">
                  <div class="col-md-6">
                    <label class="form-label">Director Name</label>
                    <input class="form-control @error('director') is-invalid @enderror" name="director"
                      type="text" value="{{ old('director') }}" placeholder="Director name" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Script Writer</label>
                    <input class="form-control @error('writer') is-invalid @enderror" name="writer"
                      type="text" value="{{ old('writer') }}" placeholder="Script writer name" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              DESCRIPTION
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <label class="form-label">IMDB Description</label>
                  <textarea class="form-control @error('imdb_description') is-invalid @enderror" id="imdb_description"
                    name="imdb_description" rows="6"
                    placeholder="IMDB description will use into description as a card."></textarea>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Short Description</label>
                  <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                    name="short_description"
                    placeholder="Short description will use into meta description as jsonld+schema and meta og card."
                    rows="6"></textarea>
                </div>
                <div class="col-md-12 my-2">
                  <label class="form-label">Long Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="long_description"
                    name="description" placeholder="Long description will use into video description where user can watch it."
                    rows="8"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              DOWNLOAD LINKS
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div id="download-links-area">
                <div class="row gx-0 mb-2">
                  <div class="col-md-12">
                    <div class="row gx-0">
                      <div class="col-md-8">
                        <input class="form-control @error('download_link.0.url') is-invalid @enderror"
                          name="download_link[0][url]" type="text"
                          value="{{ old('download_link.0.url') }}" placeholder="Download Link URL" required>
                      </div>
                      <input class="form-control @error('download_link.0.format') is-invalid @enderror"
                        name="download_link[0][format]" type="text"
                        value="{{ old('download_link.0.format', 'MP4') }}" placeholder="Format" hidden>
                      <div class="col-md-2">
                        <input class="form-control @error('download_link.0.size') is-invalid @enderror"
                          name="download_link[0][size]" type="text"
                          value="{{ old('download_link.0.size') }}" placeholder="Size" required>
                      </div>
                      <div class="col-md-2">
                        <select class="@error('download_link.0.quality') is-invalid @enderror form-select"
                          id="" name="download_link[0][quality]">
                          <option value="1080p">1080p</option>
                          <option value="720p">720p</option>
                          <option value="480p">480p</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-md-1 d-flex align-items-center">
                    <button class="btn btn-danger remove-link" type="button">x</button>
                  </div> --}}
                </div>
              </div>
              <button class="btn btn-primary mt-2" id="add-download-link" type="button">Add More Download
                Link</button>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card mb-4">
            <div class="card-header with-btn">
              STATUS
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body bg-white bg-opacity-5">
              <div class="small">
                <div class="form-group mb-0">
                  <div class="shipping-container">
                    <div class="row align-items-center">
                      <div class="col-6 pb-1 pt-1">Production Status</div>
                      <div class="col-6 d-flex align-items-center">
                        <div class="form-check form-switch ms-auto">
                          <input class="form-check-input @error('production_status') is-invalid @enderror"
                            id="production_status" name="production_status" type="checkbox" value="1"
                            checked>
                          <label class="form-check-label" for="production_status">&nbsp;</label>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2 mt-0">
                    <div class="row align-items-center">
                      <div class="col-6 pb-1 pt-1">Video Publish Status</div>
                      <div class="col-6 d-flex align-items-center">
                        <div class="form-check form-switch ms-auto">
                          <input class="form-check-input @error('production_status') is-invalid @enderror"
                            id="publishStatus" name="status" type="checkbox" value="1" checked>
                          <label class="form-check-label" for="publishStatus">&nbsp;</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              SEO INFORMATION
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Meta title <span class="text-danger">*</span></label>
                <input class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"
                  type="text" value="{{ old('meta_title') }}" placeholder="Meta title">
              </div>
              <div class="mb-3">
                <label class="form-label">Meta keywords (comma separated) <span
                    class="text-danger">*</span></label>
                <textarea class="form-control @error('keyword') is-invalid @enderror" id="keyword" name="keyword"
                  placeholder="Meta keywords (comma separated)" rows="3" required></textarea>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              OTHER DETAILS
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label class="form-label">IMDB Rating</label>
                    <div class="star-rating">
                      <input id="imdb_start_rating" name="imdb_rating" type="hidden">
                      <i class="fa fa-star" data-value="1"></i>
                      <i class="fa fa-star" data-value="2"></i>
                      <i class="fa fa-star" data-value="3"></i>
                      <i class="fa fa-star" data-value="4"></i>
                      <i class="fa fa-star" data-value="5"></i>
                      <i class="fa fa-star" data-value="6"></i>
                      <i class="fa fa-star" data-value="7"></i>
                      <i class="fa fa-star" data-value="8"></i>
                      <i class="fa fa-star" data-value="9"></i>
                      <i class="fa fa-star" data-value="10"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label">Duration</label>
                    <div class="input-group">
                      <span class="input-group-text"><iconify-icon
                          icon="teenyicons:clock-outline"></iconify-icon></span>
                      <input class="form-control @error('duration') is-invalid @enderror" name="duration"
                        type="text" value="{{ old('duration') }}" placeholder="Duration (HH:MM:SS)"
                        required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label">Release date</label>
                    <div class="input-group">
                      <span class="input-group-text"><iconify-icon
                          icon="vaadin:calendar-clock"></iconify-icon></span>
                      <input class="form-control @error('release_date') is-invalid @enderror"
                        name="release_date" type="date" value="{{ old('release_date') }}" required
                        placeholder="Duration (HH:MM:SS)">
                    </div>
                  </div>
                  <div class="col-12 my-3">
                    <label class="form-label" for="type">Type <span class="text-danger">*</span></label>
                    <select class="@error('type') is-invalid @enderror form-select" id="type"
                      name="type" required>
                      <option disabled selected>--Select type--</option>
                      <option value="action">Action</option>
                      <option value="adventure">Adventure</option>
                      <option value="comedy">Comedy</option>
                      <option value="crime">Crime</option>
                      <option value="drama">Drama</option>
                      <option value="fantasy">Fantasy</option>
                      <option value="horror">Horror</option>
                      <option value="mystery">Mystery</option>
                      <option value="romance">Romance</option>
                      <option value="sci-fi">Sci-Fi</option>
                      <option value="thriller">Thriller</option>
                      <option value="adult">Adult</option>
                      <option value="anime">Anime</option>
                    </select>
                  </div>
                  <div class="col-12 mb-3">
                    <label class="form-label" for="category">Categories <span
                        class="text-danger">*</span></label>
                    <select class="select2 @error('category') is-invalid @enderror form-select"
                      name="category[]" multiple required>
                      @forelse ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @empty
                        <option disabled selected>No Category Found</option>
                      @endforelse
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              VIDEO TRAILER
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="input-group">
                  <input class="form-control @error('trailer_url') is-invalid @enderror" name="trailer_url"
                    type="url" value="{{ old('trailer_url') }}" placeholder="Youtube trailer link">
                  <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <div id="youtube-trailer-preview"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header with-btn">
              MEDIA
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                    icon="material-symbols-light:fullscreen"></iconify-icon></a>
              </div>
            </div>
            <div class="card-body">
              <div class="row gx-1">
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label class="form-label" for="thumbnail">
                      <span class="btn btn-theme fileinput-button mb-1 me-2">
                        <iconify-icon class="fs-20px d-inline-block my-n2 ms-n2"
                          icon="material-symbols-light:add"></iconify-icon>
                        <span>Add Thumbnail</span>
                      </span>
                    </label>
                    <input class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail"
                      name="thumbnail" type="file" value="{{ old('thumbnail') }}" hidden
                      accept="image/*">

                    <!-- This will be used to preview the image -->
                    <div id="thumbnail-preview" style="display: none; margin-top: 10px;">
                      <img id="thumbnail-image" src="" alt="Thumbnail Preview"
                        style="max-width: 100%; max-height: 230px; border: 1px solid #ddd; padding: 5px;">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 text-end">
                    <label class="form-label" for="screenshot">
                      <span class="btn btn-theme fileinput-button mb-1 me-2">
                        <iconify-icon class="fs-20px d-inline-block my-n2 ms-n2"
                          icon="material-symbols-light:add"></iconify-icon>
                        <span>Add Screenshot</span>
                      </span>
                    </label>
                    <input class="form-control @error('screenshot') is-invalid @enderror" id="screenshot"
                      name="screenshot" type="file" value="{{ old('screenshot') }}" hidden
                      accept="image/*">

                    <!-- This will be used to preview the image -->
                    <div id="screenshot-preview" style="display: none; margin-top: 10px;">
                      <img id="screenshot-image" src="" alt="Screenshot Preview"
                        style="width: 100%; max-height: 230px; border: 1px solid #ddd; padding: 5px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Circular Progress Modal -->
  <div class="modal fade" id="progressModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered justify-content-center">
      <div class="modal-content p-5 text-center">
        <h5 class="mb-4">Uploading Video...</h5>
        <div class="progress-circle-container mx-auto"
          style="position: relative; width: 120px; height: 120px;">
          <svg class="progress-circle" width="120" height="120">
            <circle cx="60" cy="60" r="54" stroke="#e6e6e6" stroke-width="10"
              fill="none" />
            <circle id="progressCircle" cx="60" cy="60" r="54" stroke="#0d6efd"
              stroke-width="10" fill="none" stroke-linecap="round" stroke-dasharray="339.292"
              stroke-dashoffset="339.292" transform="rotate(-90 60 60)" />
          </svg>
          <div id="circlePercent"
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
            0%
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
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

    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border: var(--bs-border-width) solid var(--bs-border-color) !important;
    }

    .select2-container--default .select2-selection--multiple {
      border-radius: 0px !important;
    }

    .star-rating i {
      font-size: 1rem;
      color: lightgray;
      cursor: pointer;
    }

    .star-rating i.hovered,
    .star-rating i.selected {
      color: gold;
    }

    .btn-primary:hover iconify-icon {
      transform: translateX(3px);
      transition: transform 0.2s ease-in-out;
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
            <div class="download-link-row">
              <hr style="border: none; height: 4px; background: repeating-linear-gradient(to right, #17c1e8, #17c1e8 2px, transparent 2px, transparent 4px); border-radius: 3px;">
                <div class="row gx-0 mb-2">
                  
                  <div class="col-md-11">
                    <div class="row gx-0">
                      <div class="col-md-8">
                        <input class="form-control @error('download_link.${linkCount}.url') is-invalid @enderror"
                          name="download_link[${linkCount}][url]" type="text"
                          value="{{ old('download_link.${linkCount}.url') }}" placeholder="Download Link URL" required>
                      </div>
                      <input class="form-control @error('download_link.${linkCount}.format') is-invalid @enderror"
                        name="download_link[${linkCount}][format]" type="text"
                        value="{{ old('download_link.${linkCount}.format', 'MP4') }}" placeholder="Format" hidden>
                      <div class="col-md-2">
                        <input class="form-control @error('download_link.${linkCount}.size') is-invalid @enderror"
                          name="download_link[${linkCount}][size]" type="text"
                          value="{{ old('download_link.${linkCount}.size') }}" placeholder="Size" required>
                      </div>
                      <div class="col-md-2">
                        <select class="@error('download_link.${linkCount}.quality') is-invalid @enderror form-select"
                          id="" name="download_link[${linkCount}][quality]">
                          <option value="1080p">1080p</option>
                          <option value="720p">720p</option>
                          <option value="480p">480p</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 d-flex align-items-center">
                    <button class="btn btn-danger remove-link" type="button">x</button>
                  </div>
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

        const downloadLinks = $(this).find('input[name^="download_link"]');
        if (downloadLinks.length === 0) {
          alert('Please add at least one download link.');
          return false;
        }

        const progressModal = new bootstrap.Modal(document.getElementById('progressModal'));
        progressModal.show();

        const formData = new FormData(this);
        const circle = document.getElementById('progressCircle');
        const percentText = document.getElementById('circlePercent');
        const circleRadius = 54;
        const circumference = 2 * Math.PI * circleRadius;

        function setProgress(percent) {
          const offset = circumference - (percent / 100) * circumference;
          circle.style.strokeDashoffset = offset;
          percentText.innerText = `${percent}%`;
        }

        $.ajax({
          url: $(this).attr('action'),
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          xhr: function() {
            let xhr = new window.XMLHttpRequest();

            xhr.upload.addEventListener('progress', function(e) {
              if (e.lengthComputable) {
                let percent = Math.round((e.loaded / e.total) * 100);
                setProgress(percent);
              }
            });

            return xhr;
          },
          success: function(response) {
            progressModal.hide();
            alert('Video created successfully!');
            window.location.href = response.redirect;
          },
          error: function(xhr, status, error) {
            progressModal.hide();
            alert('An error occurred while creating the video.');
          }
        });
      });

    });

    document.addEventListener('DOMContentLoaded', function() {
      const slugInput = document.getElementById('slug');
      const titleInput = document.getElementById('title');


      titleInput.addEventListener('input', function() {
        if (titleInput.value.trim() === '') {
          slugInput.value = '';
          return;
        }
        // Generate slug from title
        const baseSlug = titleInput.value
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

    document.getElementById('thumbnail').addEventListener('change', function(event) {
      const input = event.target;
      const previewContainer = document.getElementById('thumbnail-preview');
      const previewImage = document.getElementById('thumbnail-image');

      if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
          };
          reader.readAsDataURL(file);
        } else {
          // Not an image
          previewImage.src = '';
          previewContainer.style.display = 'none';
        }
      } else {
        // No file selected
        previewImage.src = '';
        previewContainer.style.display = 'none';
      }
    });
    document.getElementById('screenshot').addEventListener('change', function(event) {
      const input = event.target;
      const previewContainer = document.getElementById('screenshot-preview');
      const previewImage = document.getElementById('screenshot-image');

      if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
          };
          reader.readAsDataURL(file);
        } else {
          // Not an image
          previewImage.src = '';
          previewContainer.style.display = 'none';
        }
      } else {
        // No file selected
        previewImage.src = '';
        previewContainer.style.display = 'none';
      }
    });

    const stars = document.querySelectorAll('.star-rating i');
    let currentRating = 0;

    stars.forEach((star, index) => {
      // Handle click event
      star.addEventListener('click', () => {
        currentRating = index + 1;
        updateStars(currentRating);
        $('input[name="imdb_rating"]').val(currentRating);
        alert('Rating set to ' + currentRating);
      });

      // Handle hover (mouseover)
      star.addEventListener('mouseenter', () => {
        updateStars(index + 1, true); // temporary highlight
      });

      // Remove hover effect when leaving the star area
      star.addEventListener('mouseleave', () => {
        updateStars(currentRating); // restore selection
      });
    });

    function updateStars(rating, isHover = false) {
      stars.forEach((star, i) => {
        star.classList.remove('selected', 'hovered');
        if (i < rating) {
          star.classList.add(isHover ? 'hovered' : 'selected');
        }
      });
    }

    // Function to extract video ID from various YouTube URL formats
    $(document).ready(function() {
      $('.input-group button').on('click', function(e) {
        e.preventDefault();

        const url = $('input[name="trailer_url"]').val().trim();
        const videoId = getYouTubeVideoId(url);

        if (videoId) {
          const embedUrl = `https://www.youtube.com/embed/${videoId}`;
          const iframe = `
                    <div class="mt-3">
                      <iframe width="100%" 
                        src="${embedUrl}" 
                        frameborder="0" allowfullscreen>
                      </iframe>
                    </div>`;

          $('#youtube-trailer-preview').html(iframe);
          $('input[name="trailer_url"]').val(embedUrl); // ✅ Set the embed link into the input
        } else {
          $('#youtube-trailer-preview').html(
            '<div class="text-danger mt-2">❌ Invalid YouTube URL</div>');
        }
      });

      // Function to extract video ID from various YouTube URL formats
      function getYouTubeVideoId(url) {
        const regex = /(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
        const match = url.match(regex);
        return match ? match[1] : null;
      }
    });
  </script>
@endpush
