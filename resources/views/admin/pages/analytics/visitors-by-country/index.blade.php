@extends('admin.layouts.master')
@section('title', 'Visitors By Country')

@push('styles')
  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <style>
    #visitor-map {
      height: 400px;
      width: 100%;
      border-radius: 1rem;
    }

    .leaflet-popup-content {
      font-size: 14px;
      line-height: 1.4;
    }
  </style>
@endpush

@section('content')
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 p-4">
    <!-- Map Card -->
    <div class="rounded-2xl shadow-md p-4">
      <h2 class="text-lg font-semibold mb-3">🌍 Visitor Map</h2>
      <div id="visitor-map"></div>
    </div>

    <!-- Chart Card -->
    <div class="rounded-2xl shadow-md p-4">
      <h2 class="text-lg font-semibold mb-3">📊 Visitors by Country</h2>
      <canvas id="visitorChart" class="w-full h-[400px]"></canvas>
    </div>
  </div>
@endsection

@push('scripts')
  <!-- Leaflet -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // Initialize Leaflet Map
    const map = L.map('visitor-map').setView([23.6850, 90.3563], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Add Custom Markers from Laravel Data
    @foreach ($visitors as $visitor)
      @if ($visitor->lat && $visitor->lon)
        L.circleMarker([{{ $visitor->lat }}, {{ $visitor->lon }}], {
          radius: 8,
          fillColor: "#4F46E5",
          color: "#4F46E5",
          weight: 1,
          opacity: 1,
          fillOpacity: 0.6
        }).addTo(map)
          .bindPopup(`<strong>IP:</strong> {{ $visitor->ip }}<br><strong>Country:</strong> {{ $visitor->country }}<br><strong>Platform:</strong> {{ $visitor->platform }}<br><strong>Browser:</strong> {{ $visitor->browser }}`);
      @endif
    @endforeach

    // Bar Chart with Gradient and Animation
    const ctx = document.getElementById('visitorChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, '#6366F1'); // indigo-500
    gradient.addColorStop(1, '#A5B4FC'); // indigo-200

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: {!! json_encode(array_keys($visitorStats)) !!},
        datasets: [{
          label: 'Visitors',
          data: {!! json_encode(array_values($visitorStats)) !!},
          backgroundColor: gradient,
          borderRadius: 10,
          borderSkipped: false
        }]
      },
      options: {
        responsive: true,
        animation: {
          duration: 1000,
          easing: 'easeOutBounce'
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            backgroundColor: '#4F46E5',
            titleFont: { size: 14 },
            bodyFont: { size: 13 },
            cornerRadius: 8
          }
        },
        scales: {
          x: {
            ticks: { color: '#4B5563' } // gray-700
          },
          y: {
            beginAtZero: true,
            ticks: { stepSize: 1, color: '#4B5563' }
          }
        }
      }
    });
  </script>
@endpush
