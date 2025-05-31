@extends('layouts.master')
@section('title', 'Welcome to Movies next')
@section('main-content')
  <div class="home-h1" id="page">
    @include('layouts.categories')
    @include('layouts.trailer')
    <div id="content_box">
      <div class="container mb-4 md:mb-5">
        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
          <div class="fs-5 fw-bold">☰ Most Viewed</div>
          <a href="javascript:void(0)">View all</a>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
          @foreach ($mostViewedVideos as $video)
            <a class="main-card" href="{{ route('video.check', $video->video->slug) }}">
              <div class="card">
                <div class="card-img-container">
                  <img class="card-img-top" src="{{ asset($video->video->thumbnail) }}"
                    alt="{{ $video->video->title }}">
                  <div class="overlay d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/video-play-button.png') }}" alt=""
                      style="width: 75px; height: 15px;">
                  </div>
                </div>
                <div class="card-body p-2">
                  <p class="card-text card-text-title"
                    style="text-align: center; font-size: 15px; font-family: 'Alif';">{{ $video->video->title }}
                  </p>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
      <div class="container mb-4 md:mb-5">
        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
          <div class="fs-5 fw-bold">☰ Top Rated</div>
          <a href="javascript:void(0)">View all</a>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
          @foreach ($topRatedVideos as $video)
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
      <div class="container mb-4 md:mb-5">
        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
          <div class="fs-5 fw-bold">☰ Trending</div>
          <a href="javascript:void(0)">View all</a>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
          @foreach ($trendingVideos as $video)
            <a class="main-card" href="{{ route('video.check', $video->video->slug) }}">
              <div class="card">
                <div class="card-img-container">
                  <img class="card-img-top" src="{{ asset($video->video->thumbnail) }}"
                    alt="{{ $video->video->title }}">
                  <div class="overlay d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/video-play-button.png') }}" alt=""
                      style="width: 75px; height: 15px;">
                  </div>
                </div>
                <div class="card-body p-2">
                  <p class="card-text card-text-title"
                    style="text-align: center; font-size: 15px; font-family: 'Alif';">
                    {{ $video->video->title }}
                  </p>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
      @if ($upcomingVideos->count() >= 5)
        <div class="container mb-4 md:mb-5">
          <div class="d-flex justify-content-between align-items-center mb-2 px-1">
            <div class="fs-5 fw-bold">☰ Upcoming</div>
            <a href="javascript:void(0)">View all</a>
          </div>
          <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
            @foreach ($upcomingVideos as $video)
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
      @endif
      <div class="container mb-4 md:mb-5">
        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
          <div class="fs-5 fw-bold">☰ Latest Upload</div>
          <a href="javascript:void(0)">View all</a>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
          @foreach ($videos as $video)
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

    </div>
  </div>
@endsection

@push('styles')
  <style>
    .card-text-title {
      color: #484f53;
    }

    /* Extra small devices (phones, less than 576px) */
    @media (max-width: 575.98px) {
      .card-text-title {
        font-size: 15px !important;
      }
    }

    /* Small devices (portrait tablets and large phones, 576px and up) */
    @media (min-width: 576px) and (max-width: 767.98px) {
      .card-text-title {
        font-size: 15px !important;
      }
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991.98px) {
      .card-text-title {
        font-size: 15px !important;
      }
    }
  </style>
@endpush
