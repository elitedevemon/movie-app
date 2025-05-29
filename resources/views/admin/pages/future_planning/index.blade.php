@extends('admin.layouts.master')

@section('title', 'Future Planning')

@section('content')
  <div class="container mt-5">
    <h1 class="mb-4">🗓️ Future Planning</h1>

    <!-- Add New Plan Form -->
    <div class="card mb-5">
      <div class="card-header d-flex justify-content-between align-items-center">
        <strong>Add New Plan</strong>
        <button class="btn btn-sm btn-outline-primary" id="toggle-form-btn">+ New Plan</button>
      </div>

      <div class="card-body d-none">
        <form id="create-plan-form" action="{{ route('admin.future-planning.store') }}" method="POST">
          @csrf
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label" for="title">Plan Title</label>
              <input class="form-control" name="title" type="text" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="target_date">Target Date</label>
              <input class="form-control" name="target_date" type="date" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label" for="plan_description">Description</label>
            <textarea class="form-control" name="plan_description" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label" for="status">Status</label>
            <select class="form-select" name="status">
              <option value="pending">Pending</option>
              <option value="in_progress">In Progress</option>
              <option value="completed">Completed</option>
            </select>
          </div>

          <button class="btn btn-primary" type="submit">Save Plan</button>
        </form>
      </div>
    </div>

    <!-- Plans Table -->
    <div class="card">
      <div class="card-header">
        <strong>📋 Planned Items</strong>
      </div>
      <div class="card-body p-0">
        <table class="table-bordered mb-0 table">
          <thead class="table-light">
            <tr>
              <th>Title</th>
              <th>Target Date</th>
              <th>Status</th>
              <th width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($plans as $plan)
              <tr>
                <td>{{ $plan->title }}</td>
                <td>{{ $plan->target_date }}</td>
                <td>
                  <span
                    class="badge @if ($plan->status == 'completed') bg-success
                              @elseif($plan->status == 'in_progress') bg-primary
                              @else bg-danger @endif">
                    {{ $plan->status }}
                  </span>
                </td>
                <td>
                  <!-- view button -->
                  <a class="btn btn-sm btn-outline-success view-plan-btn" data-id="{{ $plan->id }}"
                    href="javascript:void(0);">View</a>
                  <!-- delete button -->
                  <form class="d-inline" action="{{ route('admin.future-planning.destroy', $plan->id) }}"
                    method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger" type="submit"
                      onclick="return confirm('Are you sure you want to delete this plan?')">
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach

            @if ($plans->isEmpty())
              <tr>
                <td class="text-muted text-center" colspan="4">No future plans available.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Plan View Modal -->
  <div class="modal fade" id="viewPlanModal" aria-labelledby="viewPlanModalLabel" aria-hidden="true"
    tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewPlanModalLabel">Plan Details</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Title:</strong> <span id="planTitle"></span></p>
          <p><strong>Target Date:</strong> <span id="planDate"></span></p>
          <p><strong>Status:</strong> <span class="badge" id="planStatus"></span></p>
          <p><strong>Description:</strong> <span id="planDescription"></span></p>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
  <script>
    // sliding the form
    $(document).ready(function() {
      $('#toggle-form-btn').click(function() {
        const $formCardBody = $('.card-body');

        if ($formCardBody.hasClass('d-none')) {
          $formCardBody.removeClass('d-none').hide().slideDown();
          $(this).text('- New Plan');
        } else {
          $formCardBody.slideUp(function() {
            $formCardBody.addClass('d-none');
            $(this).css('display', 'none');
            $('#toggle-form-btn').text('+ New Plan');
          });
        }
      });
    });

    // plan submit form
    $(document).ready(function() {
      $('#create-plan-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        $.ajax({
          url: $(this).attr('action'),
          type: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(response) {
            alert('Plan created successfully!');
            // reset the form
            $('#create-plan-form')[0].reset();
            // only reload the data table

          },
          error: function(xhr, status, error) {
            alert('Error creating plan: ' + error);
          }
        });
      });
    });

    // plan view modal
    $(document).on('click', '.view-plan-btn', function() {
      const planId = $(this).data('id');

      $.ajax({
        url: `/admin/dashboard/future-planning/show/${planId}`,
        type: 'GET',
        success: function(plan) {
          $('#planTitle').text(plan.title);
          $('#planDate').text(plan.target_date);
          $('#planDescription').text(plan.plan_description || 'N/A');

          let badgeClass = 'bg-secondary';
          if (plan.status === 'completed') badgeClass = 'bg-success';
          else if (plan.status === 'in_progress') badgeClass = 'bg-primary';
          else if (plan.status === 'pending') badgeClass = 'bg-danger';

          $('#planStatus').removeClass().addClass('badge ' + badgeClass).text(plan.status);

          $('#viewPlanModal').modal('show');
        },
        error: function() {
          alert('Something went wrong. Please try again.');
        }
      });
    });
  </script>
@endpush
