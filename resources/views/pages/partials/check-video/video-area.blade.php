<div class="single_post">
  {{-- <div class="featured-thumbnail d-flex align-items-center justify-content-center"><img class="attachment-sociallyviral-featured size-sociallyviral-featured wp-post-image"
      data-layzr="{{ asset($video->background_poster) }}" src="{{ asset($video->background_poster) }}"
      alt="{{ $video->title }}"></div> --}}
  <header>
    <h1 class="title single-title entry-title px-2">{{ $video->title }}</h1>
    <div class="post-info">
      <span class="thetime date updated"><i class="fa fa-calendar"></i>
        <span>{{ $video->created_at->diffForHumans() }}</span></span>
    </div>
  </header><!--.headline_area-->
  <div class="post-single-content box mark-links entry-content" style="color: #a1a1aa !important;">
    <iframe class="w-100" id="video_trailer" height="315" src="{{ $video?->trailer_url }}" title="{{ $video->title }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <div class="thecontent clearfix">

      <p class="px-2">✅ Download {{ $video->title }} in
        @foreach ($video->download_links as $link)
          <a data-wpel-link="internal" href="{{ $link->url }}">{{ $link->quality }}</a>
          @if (!$loop->last)
            ,
          @endif
        @endforeach
        . This is one of
        the best movies based on <strong>{{ $video->type }}. </strong>This movie is
        available in
        @foreach ($video->download_links as $link)
          <a data-wpel-link="internal" href="{{ $link->url }}">{{ $link->quality }}</a>
          @if (!$loop->last)
            ,
          @endif
        @endforeach
        qualities. This
        Movie is <span style="color: #ff0000;"><strong>Now </strong></span>available in
        <strong>{{ $video->language }}</strong> or <strong>Dual Audio.</strong> This is<strong><span
            style="color: #3366ff;"> Web-Dl </span></strong>Print with<span style="color: #ff0000;">
          <strong>
            {{ $video->subtitle_languages }}
          </strong> </span>
        Subtitles</strong>. Click on the Download links below to proceed.
      </p>
      <div class="imdbwp imdbwp--movie dark">
        <div class="imdbwp__thumb">
          <img class="imdbwp__img" data-layzr="{{ asset($video->thumbnail) }}"
            src="{{ asset($video->thumbnail) }}" width="214" height="316">
        </div>
        <div class="imdbwp__content">
          <div class="imdbwp__header">
            <div><span class="imdbwp__title">{{ $video->meta_title }}</div>
            <div class="imdbwp__meta">{{ $video->duration }} min | {{ ucfirst($video->type) }} |
              {{ Carbon\Carbon::parse($video->release_date)->format('M d, Y') }}</div>
          </div>
          <div class="imdbwp__belt"><span class="imdbwp__star">{{ $video->imdb_rating }}</span><span
              class="imdbwp__rating"><strong>Rating:</strong> {{ $video->imdb_rating }} / 10</span></div>
          <div class="imdbwp__teaser">{{ $video->imdb_description }}</div>
          <div class="imdbwp__footer"><strong>Director:</strong> {{ $video->director }}<br>
            <strong>Writer:</strong> {{ $video->writer }}<br>
            <strong>Actors:</strong> {{ $video->actors }}
          </div>
        </div>
      </div>
      <h3><span style="color: #008080;"> Movie Info: </span></h3>
      <ul>
        <li><strong>Full Name:</strong>{{ $video->meta_title }}</li>
        <li><strong>Released</strong>: {{ Carbon\Carbon::parse($video->release_date)->format('M d, Y') }}
        </li>
        <li><strong>Duration</strong>: {{ $video->duration }}m</li>
        <li><strong>Language:</strong> {{ $video->language }}</li>
        <li><strong>Subtitle</strong>: {{ $video->subtitle_languages ?? 'No' }} </li>
        <li><strong>Size:</strong>
          @foreach ($video->download_links as $link)
            <a data-wpel-link="internal" href="{{ $link->url }}">{{ $link->size }}</a>
            @if (!$loop->last)
              ,
            @endif
          @endforeach
        </li>
        <li><strong>Quality:</strong>
          @foreach ($video->download_links as $link)
            <a data-wpel-link="internal" href="{{ $link->url }}">{{ $link->quality }}</a>
            @if (!$loop->last)
              ,
            @endif
          @endforeach
        </li>
        <li><strong>Format:</strong> MP4</li>
      </ul>
      <h2><span style="color: #008080;">Storyline: </span></h2>
      <p class="px-2">
        {{ $video->description }}
      </p>
      <h2><span style="color: #008080;">Screenshots: </span></h2>
      <p>
        <img data-layzr="{{ asset($video->screenshot) }}" src="{{ asset($video->screenshot) }}"
          alt="{{ $video->title }}">
      </p>
      <div class="" style="text-align: center;">
        @php
          $download_links = collect($video->download_links);
        @endphp
        @foreach ($download_links->unique('quality')->values() as $link)
          <div class="my-4">
            <h4 style="text-align: center;">
              <span style="color: #008080;">{{ $link->quality }} [{{ $link->size }}]
            </h4>
            <a class="maxbutton-1 maxbutton btn btn-primary" href="#" target="_blank"
              rel="nofollow noopener"><span class='mb-text'>Download Links</span></a>
          </div>
        @endforeach

        <p><span style="color: #ff0000;"><strong>Download Fast, Cause Link Will be Deleted
              Soon</strong></span></p>
      </div>
    </div>
    <center>

      <hr>
      <strong>
        <h4 style="color: red">Visit MoviesNext For
          HollyWood Movies and For latest BollyWood.
        </h4>
        <br>
      </strong>

      <strong><br>
        <div class="alert alert-danger" align="center">
          Please Do Not Use VPN for Downloading Movies From Our Site.</div>
        <div class="alert alert-success" align="center">
          Click On The Above <strong>Download Button</strong> Download File.
        </div>
        <div class="alert alert-warning" align="center">
          If You Find Any Broken Link Then <strong>Report</strong> To Us.
        </div>
        <div class="alert alert-info" align="center">
          <strong>Comment</strong> Your Queries And Requests Below In The Comment Box.
        </div>
        <hr>
      </strong>
      <center><strong>Thanks for visiting<font color="red"> MoviesNext</font> Website for
          Hollywood Movies & TV Series for downloading English/Multi audio. If you are getting any
          error while downloading movies, kindly comment below.</strong>
        <br>
        <hr>
      </center>
    </center>
  </div><!--.post-single-content-->
</div>
