@extends('layouts.master')
@section('title', (string) $video->title)
@section('main-content')
  <div class="single" id="page">
    <article class="article">
      <div id="content_box">
        <!--video post area-->
        @include('pages.partials.check-video.video-area')

        <!-- related-posts area -->
        @include('pages.partials.check-video.related-posts-area')

        <!-- comment area -->
        @include('pages.partials.check-video.comments-area')
      </div>
    </article>

    <!-- #sidebar-->
    @include('pages.partials.check-video.sidebar')
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
    })
  </script>
@endpush

@push('styles')

  <style>
    .button {
      color: white;
      padding: 8px 6px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 2px 1px;
      -webkit-transition-duration: 0.4s;
      /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button5 {
      background-color: #555555;
      color: white;
      border: 1px solid #e7e7e7;
      border-radius: 4px;
    }

    .button5:hover {
      background-color: #e7e7e7;
      border: 2px solid #555555;
      color: black;
    }

    .buttonred {
      background-color: #f50c0c;
      color: white;
      border: 1px solid #ffffff;
      border-radius: 8px;
      font-size: 16px;
    }

    .buttonred:hover {
      background-color: #555555;
      border: 2px solid #ffffff;
      color: white;
      border-radius: 8px;
      font-size: 16px;
    }

    .alert-danger {
      color: #fff;
      ;
      background-color: #F66459;
      border-color: #ebccd1;
    }

    .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
    }

    .alert-success {
      color: #fff;
      background-color: #2fb986;
      border-color: #d6e9c6;
    }

    .alert-warning {
      color: #fff;
      background-color: #FFAA2C;
      border-color: #faebcc;
    }

    .alert-info {
      color: #fff;
      background-color: #47A8F5;
      border-color: #bce8f1;
    }

    .sidebar.c-4-12 {
      max-width: 100% !important;
    }

    @media (max-width: 576px) {
      .featured-thumbnail {
        float: left;
        max-width: 75%;
        max-height: 100%;
        display: block;
        position: relative;
        width: 100%;
      }

      #video_trailer {
        max-height: 215px;
      }
    }
  </style>
@endpush
