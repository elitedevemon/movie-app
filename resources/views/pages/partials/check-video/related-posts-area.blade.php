<h4>Related Posts</h4>
<div class="clear">
  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
    @foreach ($related_videos as $video)
      <a class="main-card" href="{{ route('video.check', $video->slug) }}">
        <div class="card">
          <div class="card-img-container">
            <img class="card-img-top" src="{{ asset($video->thumbnail) }}" alt="{{ $video->title }}">
            <div class="overlay d-flex align-items-center justify-content-center">
              <img src="{{ asset('assets/images/video-play-button.png') }}" alt=""
                style="width: 75px; height: 15px;">
            </div>
          </div>
          <div class="card-body p-2">
            <p class="card-text card-text-title"
              style="text-align: center; font-size: 15px; font-family: 'Alif';">{{ $video->title }}
            </p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</div>
