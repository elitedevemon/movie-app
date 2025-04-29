@extends('admin.layouts.master')
@section('title', 'Referrer Dashboard')

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-2 gap-6 p-4 place-content-center place-items-center">
  <!-- Chart Section -->
  <div class="p-4 rounded-2xl shadow">
    <h2 class="font-semibold mb-4 text-lg dark:text-gray-200">Referrer Overview</h2>
    <div class="flex justify-center">
      <div class="w-[300px] h-[300px]">
        <canvas id="referrerChart" width="300" height="300"></canvas>
      </div>
    </div>
  </div>

  <!-- Filter Section -->
  <div class="p-4 rounded-2xl shadow">
    <h2 class="font-semibold mb-4 text-lg dark:text-gray-200">Referrer Filter</h2>
    <form method="GET" class="flex flex-col gap-3">
      <input name="source" class="border p-2 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="utm_source" value="{{ request('source') }}" />
      <input name="campaign" class="border p-2 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="utm_campaign" value="{{ request('campaign') }}" />
      <button class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">Apply Filter</button>
    </form>
  </div>
</div>

<!-- Table Section -->
<div class="mt-6 p-4 rounded-2xl shadow overflow-x-auto">
  <h2 class="font-semibold mb-4 text-lg dark:text-gray-200">Referral Logs</h2>
  <div class="overflow-auto rounded-lg shadow">
    <table class="w-full text-sm text-left dark:text-gray-300">
      <thead class="text-xs uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-300">
        <tr>
          <th class="px-4 py-3">IP</th>
          <th class="px-4 py-3">Source</th>
          <th class="px-4 py-3">Campaign</th>
          <th class="px-4 py-3">Referrer</th>
          <th class="px-4 py-3">Returning?</th>
          <th class="px-4 py-3">Time</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($referrals as $ref)
          <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-700">
            <td class="px-4 py-2">{{ $ref->ip }}</td>
            <td class="px-4 py-2">{{ $ref->source ?? 'N/A' }}</td>
            <td class="px-4 py-2">{{ $ref->campaign ?? 'N/A' }}</td>
            <td class="px-4 py-2">{{ $ref->referrer ?? 'Direct' }}</td>
            <td class="px-4 py-2">{{ $ref->is_returning ? 'Yes' : 'No' }}</td>
            <td class="px-4 py-2">{{ $ref->created_at->diffForHumans() }}</td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="px-4 py-3 text-center text-gray-500">No referral data found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="mt-4">
    {{ $referrals->links() }}
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('referrerChart');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: {!! json_encode(array_keys($referralStats)) !!},
      datasets: [{
        label: 'Referrals',
        data: {!! json_encode(array_values($referralStats)) !!},
        backgroundColor: [
          '#6366F1', '#10B981', '#F59E0B', '#EF4444', '#3B82F6', '#A855F7', '#F97316'
        ],
        borderWidth: 1,
      }]
    },
    options: {
      responsive: false,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            boxWidth: 12,
            font: { size: 12 }
          }
        }
      }
    }
  });
</script>
@endpush
