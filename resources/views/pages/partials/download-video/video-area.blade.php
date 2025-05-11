<div class="single_post">
  <header>
    <h1 class="title single-title entry-title px-2">{{ $article->title }}</h1>
    <div class="post-info">
      <span class="thetime date updated"><i class="fa fa-calendar"></i>
        <span>{{ $article->created_at->diffForHumans() }}</span></span>
    </div>
  </header><!--.headline_area-->
  <div class="post-single-content box mark-links entry-content" style="color: #a1a1aa !important;">

    <!-- loader -->
    <div id="loader">
      <h2>Generating download links, please wait...</h2>
      <div class="progress-container">
        <div class="progress-bar" id="progressBar">0%</div>
      </div>
    </div>

    {!! $article->content !!}
    <div id="downloadSection"></div>

    <div class="container my-5" id="downloaderSection" style="display: none">
      <div class="card rounded-4 border-0 shadow-sm">
        <div
          class="card-header bg-primary d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center rounded-top-4 py-3">
          <h5 class="mb-md-0 mb-2" style="color: white">
            <i class="bi bi-download me-2"></i> Available Downloads
          </h5>
          <span class="badge bg-light text-dark fs-6 px-3 py-2">{{ ucfirst($quality) }} Quality</span>
        </div>

        <div class="card-body p-4">
          @php
            $filteredLinks = collect($video->download_links)->where('quality', $quality);
          @endphp

          @if ($filteredLinks->count())
            <div class="list-group">
              @foreach ($filteredLinks as $link)
                <div
                  class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center py-3">
                  <div class="mb-md-0 d-flex align-items-center mb-2">
                    <i class="bi bi-link-45deg text-success fs-5 me-2"></i>
                    <span class="text-break">{{ parse_url($link->url, PHP_URL_HOST) }}</span>
                  </div>
                  <a class="btn btn-outline-primary btn-sm px-3" href="{{ $link->url }}" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> Download
                  </a>
                </div>
              @endforeach
            </div>
          @else
            <div class="alert alert-warning rounded-3 mb-0">
              <i class="bi bi-exclamation-triangle me-2"></i> No download links available for this quality.
            </div>
          @endif
        </div>
      </div>
    </div>

  </div><!--.post-single-content-->
</div>
