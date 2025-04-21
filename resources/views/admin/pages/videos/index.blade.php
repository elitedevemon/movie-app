@extends('admin.layouts.master')
@section('content')
  <form id="addMovie" action="https://video-donwload-page.test/video/add" method="POST">
    @csrf
    <div class="row">
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label" for="name">Video Name</label>
          <input class="form-control" name="name" id="name" type="text" placeholder="name@example.com">
        </div>
        <div class="form-group mb-3">
          <label class="form-label" for="url">URL</label>
          <input class="form-control" id="url" name="url" type="url">
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
@endsection

@section('scripts')
  <script>
    $("#addMovie").submit(function(e) {
      e.preventDefault();

      let formData = new FormData(this);
      $.ajax({
        headers: {
          'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          console.log(response);
        },
      });

    });
  </script>
@endsection
