@extends('layouts.master')
@section('main-content')
  <div id="content_box">
    <div class="container mb-4 md:mb-5">
      <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <div class="fs-5 fw-bold">☰ Most Viewed</div>
        <a href="javascript:void(0)">View all</a>
      </div>
      <div class="row g-2">
        <a class="col-6 col-md-3 main-card" href="">
          <div class="card">
            <div class="card-img-container">
              <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
                alt="...">
              <div class="overlay d-flex align-items-center justify-content-center">
                <img style="width: 75px; height: 15px;" src="{{ asset('assets/images/video-play-button.png') }}" alt=""> 
              </div>
            </div>
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </a>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-4 md:mb-5">
      <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <div class="fs-5 fw-bold">☰ Latest Upload</div>
        <a href="javascript:void(0)">View all</a>
      </div>
      <div class="row gx-2">
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-4 md:mb-5">
      <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <div class="fs-5 fw-bold">☰ Trending</div>
        <a href="javascript:void(0)">View all</a>
      </div>
      <div class="row gx-2">
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-4 md:mb-5">
      <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <div class="fs-5 fw-bold">☰ Trending</div>
        <a href="javascript:void(0)">View all</a>
      </div>
      <div class="row gx-2">
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/wp-content/uploads/Screenshot_2.png') }}"
              alt="...">
            <div class="card-body p-2">
              <p class="card-text card-text-title"
                style="text-align: center; font-weight: bold; font-family: 'Alif';">Some quick example text to
                build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navigation pagination" aria-label="Posts pagination">
      <h2 class="screen-reader-text">Posts pagination</h2>
      <div class="nav-links"><span class="page-numbers current" aria-current="page">1</span>
        <a class="page-numbers" href="page/2/index.htm">2</a>
        <a class="page-numbers" href="page/3/index.htm">3</a>
        <a class="page-numbers" href="page/4/index.htm">4</a>
        <a class="page-numbers" href="page/5/index.htm">5</a>
        <a class="page-numbers" href="page/6/index.htm">6</a>
        <span class="page-numbers dots">&hellip;</span>
        <a class="page-numbers" href="page/165/index.htm">165</a>
        <a class="next page-numbers" href="page/2/index.htm">Next</a>
      </div>
    </nav>

  </div>
@endsection
