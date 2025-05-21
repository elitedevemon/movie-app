@extends('admin.layouts.master')

@section('title', 'Edit FAQ')

@section('content')
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">➕ Edit FAQ</h4>
      <a class="btn btn-secondary" href="{{ route('admin.faqs.index') }}">
        <i class="bi bi-arrow-left"></i> Back to FAQ List
      </a>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label" for="question">Question <span class="text-danger">*</span></label>
            <input class="form-control @error('question') is-invalid @enderror" id="question" name="question"
              type="text" value="{{ old('question', $faq->question) }}" placeholder="Enter FAQ question"
              required>
            @error('question')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="answer">Answer <span class="text-danger">*</span></label>
            <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"
              rows="5" placeholder="Provide a clear answer" required>{{ old('answer', $faq->answer) }}</textarea>
            @error('answer')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="status">Status</label>
            <select class="form-select" id="status" name="status">
              <option {{ $faq->status == true ? 'selected' : '' }} value="1" selected>Published</option>
              <option {{ $faq->status == false ? 'selected' : '' }} value="0">Draft</option>
            </select>
          </div>

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
