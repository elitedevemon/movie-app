@extends('admin.layouts.master')
@section('title', 'All Notifications')

@section('content')
  <div class="container py-4">
    <h1 class="mb-4">All Notifications</h1>

    {{-- Filters (optional) --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
      <button class="btn btn-danger btn-sm" id="mark-all-read">Mark All Read</button>
    </div>

    {{-- Notifications List --}}
    <div class="list-group" id="notifications-list">

      @forelse ($notifications as $notification)
        @php
          $data = $notification->data;
          $isUnread = is_null($notification->read_at);
        @endphp

        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-start {{ $isUnread ? 'fw-bold unread' : '' }} notification-link"
          data-id="{{ $notification->data['notificationId'] }}" href="{{ $data['url'] ?? '#' }}">
          <div class="d-flex align-items-center">
            <div class="fs-4 text-primary me-3">
              <iconify-icon icon="material-symbols-light:{{ $data['icon'] ?? 'notifications' }}"></iconify-icon>
            </div>
            <div>
              <div>{{ $data['title'] ?? 'Notification' }}</div>
              <div class="text-muted small">{{ $data['message'] ?? '' }}</div>
            </div>
          </div>
          <small class="text-muted text-nowrap">{{ $notification->created_at->diffForHumans() }}</small>
        </a>

      @empty
        <div class="alert alert-info">No notifications found.</div>
      @endforelse

    </div>

    {{-- Pagination --}}
    <div class="mt-4">
      {{ $notifications->links('pagination::bootstrap-5') }}
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $(function() {
      // Example: Mark all read button
      $('#mark-all-read').on('click', function() {
        $.ajax({
          url: "{{ route('admin.notification.mark-all-as-read') }}",
          method: 'POST',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            // Reload page or update UI to mark notifications as read
            location.reload();
          }
        });
      });

      // You can add filter handlers here if you want
    });
  </script>
@endpush
