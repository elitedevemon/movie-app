@extends('admin.layouts.master')
@section('title', 'Settings')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0">⚙️ Website System Settings</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label class="form-label">Base URL</label>
                <input class="form-control" name="base_url" type="url"
                  value="{{ old('base_url', $settings->base_url ?? '') }}" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Site Name</label>
                <input class="form-control" name="site_name" type="text"
                  value="{{ old('site_name', $settings->site_name ?? '') }}" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Admin Email</label>
                <input class="form-control" name="admin_email" type="email"
                  value="{{ old('admin_email', $settings->admin_email ?? '') }}" required>
              </div>

              <div class="mb-3">
                <label class="form-label">OpenRouter AI Key</label>
                <input class="form-control" name="openrouter_key" type="text"
                  value="{{ old('openrouter_key', $settings->openrouter_key ?? '') }}" required>
              </div>

              <div class="text-end">
                <button class="btn btn-success" type="submit">💾 Save Settings</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
