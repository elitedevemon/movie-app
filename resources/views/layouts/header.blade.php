<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="https://www.facebook.com/elitedevemon" rel="profile">
<meta name='admaven-placement' content="BrHUGqTrG">

<link type="image/x-icon" href="{{ asset('assets/wp-content/uploads/moviesverse.webp') }}" rel="icon">

<meta name="msapplication-TileImage" content="{{ asset('assets/wp-content/uploads/moviesverse.webp') }}">
<link href="{{ asset('assets/wp-content/uploads/cropped-moviesverse-180x180.webp') }}"
  rel="apple-touch-icon-precomposed">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

{{-- <link href="" rel="prefetch">
<link href="" rel="prerender"> --}}

<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
<meta name="googlebot" content="index, follow">
<meta name="googlebot-news" content="index, follow">

<style>
  img:is([sizes="auto" i],
  [sizes^="auto," i]) {
    contain-intrinsic-size: 3000px 1500px
  }
</style>
<link rel="preload" href="{{ asset('assets/wp-content/uploads/moviesverse.webp') }}" as="image"
  type="image/webp" imagesrcset="{{ asset('assets/wp-content/uploads/moviesverse.webp') }} 1x, {{ asset('assets/wp-content/uploads/moviesverse.webp') }} 2x"
  imagesizes="(max-width: 3000px) 100vw, 3000px">

<title>@yield('title', config('app.name'))</title>

<meta name="description" content="{{ $movie }}">
<meta name="keywords" content="MoviesNext, Movies, Trailers, Watchlists, Entertainment, Daily Releases">
<meta name="author" content="EliteDev Emon">

<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title"
  content="{{ $movie->title ?? config('app.name') }}">
<meta property="og:description"
  content="MoviesMod &#8211; MoviesFlix | TheMoviesverse | TheMoviesMod | TopMovies | ModList.in">
<meta property="og:url" content="">
<meta property="og:site_name"
  content="MoviesMod &#8211; MoviesFlix | TheMoviesverse | TheMoviesMod | TopMovies | ModList.in">
<meta property="og:image" content="">
<meta property="og:image:width" content="27">
<meta property="og:image:height" content="27">
<meta property="og:image:type" content="image/webp">
<meta name="twitter:card" content="summary_large_image">
<!-- schema -->
{{-- <script type="application/ld+json"
    class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"CollectionPage","@id":"https://moviesmod.com.pl/","url":"https://moviesmod.com.pl/","name":"MoviesMod &#8211; MoviesFlix | TheMoviesverse | TheMoviesMod | TopMovies | ModList.in","isPartOf":{"@id":"https://moviesmod.com.pl/#website"},"about":{"@id":"https://moviesmod.com.pl/#/schema/person/2a9ba79dc3c18188e96396ae471f06bf"},"description":"MoviesMod &#8211; MoviesFlix | TheMoviesverse | TheMoviesMod | TopMovies | ModList.in","breadcrumb":{"@id":"https://moviesmod.com.pl/#breadcrumb"},"inLanguage":"en-US"},{"@type":"BreadcrumbList","@id":"https://moviesmod.com.pl/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://moviesmod.com.pl/#website","url":"https://moviesmod.com.pl/","name":"Movies Mod | MoviesMod 2024, MoviesMod Original Site, MoviesMod Official","description":"MoviesMod &#8211; MoviesFlix | TheMoviesverse | TheMoviesMod | TopMovies | ModList.in","publisher":{"@id":"https://moviesmod.com.pl/#/schema/person/2a9ba79dc3c18188e96396ae471f06bf"},"alternateName":"MoviesMod | Movies Mod","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://moviesmod.com.pl/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":["Person","Organization"],"@id":"https://moviesmod.com.pl/#/schema/person/2a9ba79dc3c18188e96396ae471f06bf","name":"admin","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://moviesmod.com.pl/#/schema/person/image/","url":"https://moviesmod.com.pl/wp-content/uploads/moviesverse.webp","contentUrl":"https://moviesmod.com.pl/wp-content/uploads/moviesverse.webp","width":27,"height":27,"caption":"admin"},"logo":{"@id":"https://moviesmod.com.pl/#/schema/person/image/"},"sameAs":["https://moviesmod.com.pl"],"publishingPrinciples":"https://moviesmod.com.pl/announcements/","ownershipFundingInfo":"https://moviesmod.com.pl/contact-us/","actionableFeedbackPolicy":"https://moviesmod.com.pl/dmca/","correctionsPolicy":"https://moviesmod.com.pl/request-us/","ethicsPolicy":"https://moviesmod.com.pl/dmca/","diversityPolicy":"https://moviesmod.com.pl/dmca/","diversityStaffingReport":"https://moviesmod.com.pl/site-disclaimer/"}]}
  </script> --}}
<meta name="google-site-verification" content="x4mpEwAhzt77vg7PstzL6br7vutaYKEIW8K9IONf1PE">
<!-- / Yoast SEO Premium plugin. -->

<link href='//stats.wp.com' rel='dns-prefetch'>
<link id='buttons-css' type='text/css' href='{{ asset('assets/wp-includes/css/buttons.min.css') }}'
  rel='stylesheet' media='all'>
<link id='dashicons-css' type='text/css' href='{{ asset('assets/wp-includes/css/dashicons.min.css') }}'
  rel='stylesheet' media='all'>
<link id='editor-buttons-css' type='text/css' href='{{ asset('assets/wp-includes/css/editor.min.css') }}'
  rel='stylesheet' media='all'>
<link id='wp-notification-bars-css' type='text/css'
  href='{{ asset('assets/wp-content/plugins/wp-notification-bars/public/css/wp-notification-bars-public.css') }}'
  rel='stylesheet' media='all'>
<link id='wp-block-library-css' type='text/css'
  href='{{ asset('assets/wp-includes/css/dist/block-library/style.min.css') }}' rel='stylesheet'
  media='all'>
<!-- wp-block-library-theme-inline-css-->
@include('layouts.partials.wp-block-library-theme-inline-css')
<link id='mediaelement-css' type='text/css'
  href='{{ asset('assets/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css') }}' rel='stylesheet'
  media='all'>
<link id='wp-mediaelement-css' type='text/css'
  href='{{ asset('assets/wp-includes/js/mediaelement/wp-mediaelement.min.css') }}' rel='stylesheet'
  media='all'>
<!--jetpack-sharing-buttons-style-inline-css-->
@include('layouts.partials.jetpack-sharing-buttons-style-inline-css')
<!--classic-theme-styles-inline-css-->
@include('layouts.partials.classic-theme-styles-inline-css')
<!--global-styles-inline-css-->
@include('layouts.partials.global-styles-inline-css')
<link id='cool-tag-cloud-css' type='text/css'
  href='{{ asset('assets/wp-content/plugins/cool-tag-cloud/inc/cool-tag-cloud.css') }}' rel='stylesheet'
  media='all'>
<link id='imdbwp-public-styles-css' type='text/css'
  href='{{ asset('assets/wp-content/plugins/imdb-for-wordpress/assets/css/style.css') }}' rel='stylesheet'
  media='all'>
<link id='sociallyviral-stylesheet-css' type='text/css'
  href='{{ asset('assets/wp-content/themes/mts_sociallyviral1/style.css') }}' rel='stylesheet'
  media='all'>
<!--sociallyviral-stylesheet-inline-css-->
@include('layouts.partials.sociallyviral-stylesheet-inline-css')

<link id='responsive-css' type='text/css'
  href='{{ asset('assets/wp-content/themes/mts_sociallyviral1/css/responsive.css') }}' rel='stylesheet'
  media='all'>
<link id='magnificPopup-css' type='text/css'
  href='{{ asset('assets/wp-content/themes/mts_sociallyviral1/css/magnific-popup.css') }}' rel='stylesheet'
  media='all'>
<link id='fontawesome-css' type='text/css'
  href='{{ asset('assets/wp-content/themes/mts_sociallyviral1/css/font-awesome.min.css') }}'
  rel='stylesheet' media='all'>
<link id='shimdb-frontend-css-css' type='text/css'
  href='{{ asset('assets/wp-content/plugins/shortcode-imdb/includes/css/style.css?v=6.0.8&#038;ver=6.7.1') }}'
  rel='stylesheet' media='all'>
<link id='shnow-font-awesome-css' type='text/css'
  href='{{ asset('assets/font-awesome/4.7.0/css/font-awesome.min.css') }}' rel='stylesheet'
  media='all'>
<script type="text/javascript" id="utils-js-extra">
  /* <![CDATA[ */
  var userSettings = {
    "url": "\/",
    "uid": "0",
    "time": "1736677828",
    "secure": "1"
  };
  /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/utils.min.js') }}" id="utils-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/jquery.min.js') }}"
  id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min.js') }}"
  id="jquery-migrate-js"></script>
<script type="text/javascript"
  src="{{ asset('assets/wp-content/plugins/wp-notification-bars/public/js/wp-notification-bars-public.js') }}"
  id="wp-notification-bars-js"></script>
<script type="text/javascript" id="mts_ajax-js-extra">
  /* <![CDATA[ */
  var mts_ajax_search = {
    "url": "https:\/\/moviesmod.com.pl\/wp-admin\/admin-ajax.php",
    "ajax_search": "1"
  };
  /* ]]> */
</script>
<script type="text/javascript" async="async"
  src="{{ asset('assets/wp-content/themes/mts_sociallyviral1/js/ajax.js') }}" id="mts_ajax-js"></script>
<style>
  img#wpstats {
    display: none
  }
</style>
<link type="text/css"
  href="css?family=Roboto:500|Abel:normal|Alef:700|Aclonica:normal|Roboto:normal&amp;subset=latin"
  rel="stylesheet">
<!--custom-css-1-->
@include('layouts.partials.custom-css-1')
<link href="{{ asset('assets/wp-content/uploads/cropped-moviesverse-32x32.webp') }}" rel="icon"
  sizes="32x32">
<link href="{{ asset('assets/wp-content/uploads/cropped-moviesverse-192x192.webp') }}" rel="icon"
  sizes="192x192">
<link href="{{ asset('assets/wp-content/uploads/cropped-moviesverse-180x180.webp') }}"
  rel="apple-touch-icon">
<meta name="msapplication-TileImage" content="">
<!--wp-custom-css-->
@include('layouts.partials.wp-custom-css')
<!--custom-css-2-->
@include('layouts.partials.custom-css-2')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">