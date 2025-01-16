<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Quantum | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('admin.layouts.partials.style')
    @yield('styles')

  </head>

  <body>
    @include('admin.layouts.partials.loader')

    <!-- BEGIN #app -->
    <div class="app" id="app">
      @include('admin.layouts.header')

      @include('admin.layouts.sidebar')

      <!-- main content -->
      @yield('content')
      <!-- end main content -->

      @include('admin.layouts.partials.scroll-top')

      @include('admin.layouts.partials.theme-panel')
    </div>
    <!-- END #app -->
    @include('admin.layouts.partials.scripts')
    @yield('scripts')
  </body>

</html>
