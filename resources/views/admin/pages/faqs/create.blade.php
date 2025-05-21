@extends('admin.layouts.master')

@section('title', 'Create FAQ')

@section('content')
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">➕ Add New FAQ</h4>
      <a class="btn btn-secondary" href="{{ route('admin.faqs.index') }}">
        <i class="bi bi-arrow-left"></i> Back to FAQ List
      </a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <form action="{{ route('admin.faqs.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label class="form-label" for="question">Question <span class="text-danger">*</span></label>
            <input class="form-control @error('question') is-invalid @enderror" id="question" name="question"
              type="text" value="{{ old('question') }}" placeholder="Enter FAQ question" required>
            @error('question')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="answer">Answer <span class="text-danger">*</span></label>
            <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"
              rows="5" placeholder="Provide a clear answer" required>{{ old('answer') }}</textarea>
            @error('answer')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          {{-- Optional: Status, Category, etc. --}}
          {{-- 
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" name="status" id="status">
            <option value="1" selected>Published</option>
            <option value="0">Draft</option>
          </select>
        </div>
        --}}

          <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-save"></i> Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
