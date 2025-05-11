@extends('layouts.master')
@section('title', (string) $video->title)
@section('main-content')
  <div class="single" id="page">
    <article class="article">
      <div id="content_box">

        <!-- Ad Tab Warning Popup -->
        <div id="popup">
          <h3>⚠️ Warning!</h3>
          <p>This new tab is containing download links, so please don't close it.</p>
          <button onclick="closePopup()">OK</button>
        </div>
        <div id="adblockPopup">
          <h3>⚠️ AdBlocker Detected!</h3>
          <p>It seems you're using an AdBlocker. We are earning some income by giving you the opportunity to watch movies for free. Please turn off adblockers, so that you can also download movies for free, and we can also earn some money.</p>
          <button onclick="closeAdBlockPopup()">OK</button>
        </div>

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

    // Adblock and other functions
    function detectAdBlock(callback) {
      const bait = document.createElement('div');
      bait.innerHTML = '&nbsp;';
      bait.className = 'adsbox';
      bait.style.position = 'absolute';
      bait.style.left = '-999px';
      bait.style.height = '10px';
      bait.style.width = '10px';
      document.body.appendChild(bait);

      window.setTimeout(() => {
        const baitBlocked = bait.offsetParent === null || bait.offsetHeight === 0 || bait.offsetLeft === 0;
        bait.remove();

        // Optionally fallback to fetch a known ad-related URL
        if (baitBlocked) {
          callback(true); // AdBlock detected
        } else {
          // Extra verification by trying to load a known ad script
          // https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js
          // use this link into the fetch quotation
          fetch("", {
              method: "HEAD",
              mode: "no-cors"
            })
            .then(() => callback(false)) // No AdBlock
            .catch(() => callback(true)); // AdBlock detected
        }
      }, 100);
    }

    detectAdBlock(function(isBlocked) {
      if (isBlocked) {
        console.log("🛑 AdBlocker detected!");
        freezePageForAdBlock();
        return;
      } else {
        console.log("✅ No AdBlocker detected.");
      }
    });

    function freezePageForAdBlock() {
      // Hide all page content
      document.body.innerHTML = '';

      // Add a full-screen black background
      const blockerOverlay = document.createElement('div');
      blockerOverlay.style.position = 'fixed';
      blockerOverlay.style.top = '0';
      blockerOverlay.style.left = '0';
      blockerOverlay.style.width = '100%';
      blockerOverlay.style.height = '100%';
      blockerOverlay.style.backgroundColor = '#ffffff';
      blockerOverlay.style.zIndex = '9999999';
      blockerOverlay.style.display = 'flex';
      blockerOverlay.style.justifyContent = 'center';
      blockerOverlay.style.alignItems = 'center';

      // AdBlock warning message
      const warningBox = document.createElement('div');
      warningBox.innerHTML = `
        <div style="text-align:center; padding: 40px; background: #fff; border: 2px solid #e74c3c; border-radius: 10px;">
          <h2 style="color: #e74c3c;">🛑 AdBlocker Detected!</h2>
          <p>We are earning some income by giving you the opportunity to watch movies for free. Please turn off adblockers, so that you can also download movies for free, and we can also earn some money.</p>
        </div>
      `;
      blockerOverlay.appendChild(warningBox);
      document.body.appendChild(blockerOverlay);

      // Optional: Lock scrolling and disable keys
      document.body.style.overflow = 'hidden';
    }

    let newTab;
    let tabCheckInterval;

    function openLinkInNewTab(quality) {
      console.log("Attempting to open in a new tab...");
      let videoSlug = @json($video->slug);
      let articleSlug = @json($article->slug);
      let url = `/video/download/${videoSlug}/${articleSlug}/${quality}`;
      newTab = window.open(url, '_blank');

      setTimeout(() => {
        if (!newTab || newTab.closed) {
          console.log("New tab was blocked or failed to open.");
          showAdBlockPopup();
          return;
        }

        try {
          const testAccess = newTab.location.href;
          if (testAccess === 'about:blank' || testAccess.startsWith('chrome-error') || testAccess === '' ||
            testAccess === 'null') {
            console.log("Ad tab opened but failed to load ad content.");
            newTab.close();
            showAdBlockPopup();
            return;
          }
        } catch (e) {
          console.log("Cross-origin detected, assuming ad tab loaded.");
          monitorAdTab();
        }

        console.log("New tab opened successfully.");
        monitorAdTab();
        window.focus();
      }, 1000);
    }

    function startDownload(quality) {
      tabCheckInterval = setInterval(function() {
        if (newTab && newTab.closed) {
          clearInterval(tabCheckInterval);
          showPopup();
          document.getElementsByClassName('startBtn').style.display = 'inline-block';
          console.log('Tab closed');
        }
      }, 500);

      openLinkInNewTab(quality);
    };

    function showAdBlockPopup() {
      console.log("AdBlocker detected, showing popup...");
      document.getElementById('adblockPopup').style.display = 'block';
    }

    function closeAdBlockPopup() {
      document.getElementById('adblockPopup').style.display = 'none';
      location.reload(); // This reloads the page
    }

    function showPopup() {
      document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }

    function monitorAdTab() {
      setTimeout(function() {
        if (newTab && !newTab.closed) {
          try {
            window.location.href =
              'https://www.profitableratecpm.com/rmwfw8dw1?key=5445269547bff655237231ba83d69ab4';
          } catch (e) {
            console.log("Something went wrong", e);
          }
        }
      }, 3000);
    }
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

    #popup,
    #adblockPopup {
      display: none;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      position: fixed;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      z-index: 999;
    }

    #popup h3,
    #adblockPopup h3 {
      color: #e74c3c;
      margin-bottom: 15px;
    }

    #popup p,
    #adblockPopup p {
      margin-bottom: 20px;
    }

    #popup button,
    #adblockPopup button {
      background: #e74c3c;
    }
  </style>
@endpush
