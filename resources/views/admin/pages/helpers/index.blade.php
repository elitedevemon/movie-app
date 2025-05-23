@extends('admin.layouts.master')

@section('title', 'FAQ List')

@section('content')
  <div class="container-fluid">
    <h4 class="mb-4">📌 Manage User Questions</h4>

    {{-- Tabs --}}
    <ul class="nav nav-tabs" id="questionTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending"
          type="button" role="tab">🕒 Pending</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="replied-tab" data-bs-toggle="tab" data-bs-target="#replied" type="button"
          role="tab">✅ Replied</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected"
          type="button" role="tab">❌ Rejected</button>
      </li>
    </ul>

    <div class="tab-content mt-3" id="questionTabContent">

      {{-- Pending --}}
      <div class="tab-pane fade show active" id="pending" role="tabpanel">
        @forelse ($pendingQuestions as $q)
          <div class="card mb-3 shadow-sm">
            <div class="card-body">
              <p><strong>👤 User:</strong> {{ $q->user->name }} ({{ $q->user->email }})</p>
              <p><strong>❓ Question:</strong> {{ $q->question }}</p>

              <form class="mb-2" method="POST" action="{{ route('admin.helpers.reply', $q->id) }}">
                @csrf
                <div class="mb-2">
                  <textarea class="form-control" name="answer" placeholder="Write your reply here..." rows="2" required></textarea>
                </div>
                <button class="btn btn-success btn-sm" type="submit">Reply</button>
              </form>

              <form method="POST" action="{{ route('admin.helpers.reject', $q->id) }}">
                @csrf
                <div class="mb-2">
                  <input class="form-control" name="rejection_reason"
                    placeholder="Reason for rejection (optional)">
                </div>
                <button class="btn btn-danger btn-sm" type="submit">Reject</button>
              </form>
            </div>
          </div>
        @empty
          <p class="text-muted">No pending questions.</p>
        @endforelse
      </div>

      {{-- Replied --}}
      <div class="tab-pane fade" id="replied" role="tabpanel">
        @forelse ($repliedQuestions as $q)
          <div class="card border-success mb-3 shadow-sm">
            <div class="card-body">
              <p><strong>👤 User:</strong> {{ $q->user->name }} ({{ $q->user->email }})</p>
              <p><strong>❓ Question:</strong> {{ $q->question }}</p>
              <p class="text-success"><strong>✅ Admin Reply:</strong> {{ $q->answer }}</p>
            </div>
          </div>
        @empty
          <p class="text-muted">No replied questions.</p>
        @endforelse
      </div>

      {{-- Rejected --}}
      <div class="tab-pane fade" id="rejected" role="tabpanel">
        @forelse ($rejectedQuestions as $q)
          <div class="card border-danger mb-3 shadow-sm">
            <div class="card-body">
              <p><strong>👤 User:</strong> {{ $q->user->name }} ({{ $q->user->email }})</p>
              <p><strong>❓ Question:</strong> {{ $q->question }}</p>
              <p class="text-danger"><strong>❌ Rejected:</strong>
                {{ $q->rejection_reason ?? 'No reason given.' }}</p>
            </div>
          </div>
        @empty
          <p class="text-muted">No rejected questions.</p>
        @endforelse
      </div>

    </div>
  </div>
@endsection
