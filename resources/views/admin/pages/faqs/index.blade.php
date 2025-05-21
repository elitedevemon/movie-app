@extends('admin.layouts.master')

@section('title', 'FAQ List')

@section('content')
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">📄 FAQ Management</h4>
      <a class="btn btn-primary" href="{{ route('admin.faqs.create') }}">
        <i class="bi bi-plus-circle"></i> Add New FAQ
      </a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body p-0">
        <table class="table-hover table-bordered mb-0 table align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($faqs as $index => $faq)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ Str::limit($faq->question, 50) }}</td>
                <td>{{ Str::limit($faq->answer, 70) }}</td>
                <td>
                  <div class="form-check form-switch d-flex justify-content-center">
                    <input class="form-check-input toggle-status" data-id="{{ $faq->id }}" type="checkbox"
                      role="switch" {{ $faq->status ? 'checked' : '' }}>
                  </div>
                </td>
                <td>
                  <a class="btn btn-sm btn-warning" href="{{ route('admin.faqs.edit', $faq->id) }}">
                    <i class="bi bi-pencil"></i> Edit
                  </a>
                  <form class="d-inline" action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this FAQ?')">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td class="text-muted text-center" colspan="4">No FAQs found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  document.querySelectorAll('.toggle-status').forEach((checkbox) => {
    checkbox.addEventListener('change', function () {
      const id = this.dataset.id;
      const status = this.checked ? 1 : 0;

      fetch(`/admin/dashboard/faqs/${id}/toggle-status`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ status }),
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          toastr.success(data.message || 'Status updated');
        } else {
          toastr.error(data.message || 'Update failed');
        }
      })
      .catch(() => toastr.error('Error updating status'));
    });
  });
</script>
@endpush

@push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush