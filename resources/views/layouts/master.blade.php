<!DOCTYPE html>
<html class="no-js" lang="en-US">

  <head>
    @include('layouts.header')
    @stack('styles')
  </head>

  <body class="home blog wp-embed-responsive main" id="blog">
    <div class="main-container">
      @include('layouts.main-menu')
      
      <!-- main content -->
      @yield('main-content')
      
      @include('layouts.enable-javascript')
    </div><!--.main-container-->
    @include('layouts.footer')
    @stack('scripts')
  </body>

</html>
