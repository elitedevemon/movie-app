@extends('layouts.master')
@section('title', (string) $video->title)
@section('main-content')
  <div class="single" id="page">
    <article class="article">
      <div id="content_box">
        <!--video post area-->
        @include('pages.partials.download-video.video-area')

        <!-- related-posts area -->
        @include('pages.partials.download-video.related-posts-area')

        <!-- comment area -->
        @include('pages.partials.download-video.comments-area')
      </div>
    </article>

    <!-- #sidebar-->
    @include('pages.partials.download-video.sidebar')
  </div>
@endsection
@push('scripts')
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "{{ $video->title }}",
      "description": "{{ $video->description }}",
      "thumbnailUrl": "{{ asset($video->thumbnail) }}",
      "uploadDate": "{{ $video->created_at }}",
      "duration": "{{ $video->duration }}",
      "contentUrl": "{{ $video->url }}",
      "embedUrl": "{{ $video->embed_url }}",
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "interactionType": {
          "@type": "http://schema.org/WatchAction"
        },
        "userInteractionCount": {{ $video->views }}
      }
    }
  </script>
  <script type="application/ld+json" class="yoast-schema-graph">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "{{ url()->current() }}",
          "url": "{{ url()->current() }}",
          "name": "{{ $video->title }}",
          "description": "{{ $video->description }}",
          "inLanguage": "en-US",
          "potentialAction": {
            "@type": "ReadAction",
            "target": [
              "{{ url()->current() }}"
            ]
          }
        }
      ]
    }
  </script>

  <!-- track user by country -->
  <script>
    window.addEventListener('load', function() {
      // track page views
      fetch("{{ route('track-visitor-by-page-view', $video->slug) }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({})
        }).then(res => res.json())
        .then(data => console.log(data))
        .catch(err => console.error("Visitor logging failed", err));

      // track category views
      fetch("{{ route('track-visitor-by-category-view', $video->slug) }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({})
        }).then(res => res.json())
        .then(data => console.log(data))
        .catch(err => console.error("Visitor logging failed", err));

      // loader function
      let progressBarInterval;
      let progress = 0;

      function loader() {
        document.getElementById('loader').style.display = 'block';

        progress = 0;
        updateProgress();
        progressBarInterval = setInterval(updateProgress, 100);
      }

      function updateProgress() {
        if (progress >= 100) {
          clearInterval(progressBarInterval);
          document.getElementById('loader').style.display = 'none';
          document.getElementById('downloaderSection').style.display = 'block';
          // Scroll to the download section smoothly
          document.getElementById('downloadSection').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        } else {
          progress++;
          document.getElementById('progressBar').style.width = progress + '%';
          document.getElementById('progressBar').textContent = progress + '%';
        }
      }
      loader();
    })
  </script>
@endpush

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    #loader {
      display: none;
    }

    .progress-container {
      width: 80%;
      background-color: #ddd;
      margin: 30px auto;
      border-radius: 30px;
      overflow: hidden;
      height: 30px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .progress-bar {
      height: 100%;
      width: 0%;
      background-color: #3498db;
      text-align: center;
      line-height: 30px;
      color: white;
      font-weight: bold;
      transition: width 0.4s ease;
    }
  </style>
@endpush
