<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Movies Next | @yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="{{ asset('assets/wp-content/uploads/moviesverse.webp') }}"
      rel="shortcut icon">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('admin.layouts.partials.style')
    @stack('styles')
  </head>

  <body>
    @include('admin.layouts.partials.loader')

    <!-- BEGIN #app -->
    <div class="app" id="app">
      @include('admin.layouts.header')

      @include('admin.layouts.sidebar')

      <!-- main content -->
      <div class="app-content p-3" id="content">
        @yield('content')
      </div>
      <!-- end main content -->

      @include('admin.layouts.partials.scroll-top')

      {{-- @include('admin.layouts.partials.theme-panel') --}}
    </div>
    <!-- END #app -->
    @include('admin.layouts.partials.scripts')

    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
    <script>
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
        cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
        forceTLS: true
      });

      var channel = pusher.subscribe('failedToGeneratePost');
      channel.bind('generatePostEvent', function(data) {
        let notificationId = data.message.notificationId;
        let title = data.message.title;
        let message = data.message.message;
        let url = data.message.url;
        let icon = data.message.icon;

        if ($('#notification-badge').hasClass('d-none')) {
          $('#notification-badge').removeClass('d-none');
        }

        const notificationContainer = $('#notification');
        const maxNotifications = 8;

        if (notificationContainer.children().length >= maxNotifications) {
          // Option 1: Remove the last (oldest) notification to keep max 8
          notificationContainer.children().last().remove();
        }

        // Now prepend the new notification
        notificationContainer.prepend(`
          <a class="dropdown-item d-flex align-items-center fs-10px notification-link unread" href="${url}" data-id="${notificationId}">
            <div>
              <div class="w-40px h-40px fs-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
                <iconify-icon icon="material-symbols-light:${icon}"></iconify-icon>
              </div>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">${title}</div>
              <div class="text-white text-opacity-75">${message}</div>
              <div class="small text-white text-opacity-50">just now</div>
            </div>
          </a>
        `);
      });

      // make the notification mark as read
      $(document).on('click', '.notification-link', function(e) {
        e.preventDefault(); // prevent immediate redirect

        const url = $(this).attr('href');
        const notificationId = $(this).data('id');

        $.ajax({
          url: '/admin/dashboard/notification/mark-as-read/' + notificationId,
          type: 'POST',
          data: {
            notificationId: notificationId,
            _token: "{{ csrf_token() }}" // required for Laravel CSRF
          },
          success: function(e) {
            window.location.href = url;
          },
          error: function(e) {
            // Fallback: still redirect
            window.location.href = url;
          }
        });
      });
    </script>

    <!-- push notification -->
    <script>
      navigator.serviceWorker.register("{{ asset('service-worker.js') }}");

      window.onload = function() {
        Notification.requestPermission().then((permission) => {
          if (permission === 'granted') {
            navigator.serviceWorker.ready.then((sw) => {
              sw.pushManager.getSubscription().then((subscription) => {
                if (subscription) {
                  saveSubscription(subscription.toJSON());
                } else {
                  sw.pushManager.subscribe({
                    userVisibleOnly: true,
                    applicationServerKey: '{{ env('VAPID_PUBLIC_KEY') }}'
                  }).then((subscription) => {
                    console.log('User subscribed to push notifications:', subscription);
                    saveSubscription(subscription.toJSON());
                  })
                }
              })
            })
          }
        })
      }

      function saveSubscription(subscription) {
        $.ajax({
          url: "{{ route('admin.store.subscription') }}",
          method: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({
            subscription: subscription,
            _token: '{{ csrf_token() }}'
          }),
          success: function(res) {
            console.log('Subscription saved.', res);
          },
          error: function(err) {
            console.error('Error:', err);
          }
        });
      }
    </script>
    @stack('scripts')
  </body>

</html>
