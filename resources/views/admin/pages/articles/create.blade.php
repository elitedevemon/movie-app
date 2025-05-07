@extends('admin.layouts.master')
@section('title', 'Create Category')

@section('content')
  <div class="container py-5">
    <h2 class="mb-4">Write a New Movie Article</h2>

    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      {{-- Article Title --}}
      <div class="mb-3">
        <label class="form-label" for="title">Article Title</label>
        <input class="form-control" id="title" name="title" type="text" required>
      </div>

      {{-- Thumbnail --}}
      <div class="mb-3">
        <label class="form-label" for="thumbnail">Article Thumbnail</label>
        <input class="form-control" id="thumbnail" name="thumbnail" type="file" accept="image/*" required>
      </div>

      {{-- Short Description --}}
      <div class="mb-3">
        <label class="form-label" for="short_description">Short Description</label>
        <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
      </div>

      {{-- Full Content --}}
      <div class="ck-editor-wrapper mb-3">
        <label class="form-label" for="article_content">Full Article Content</label>
        <textarea class="form-control" id="article_content" name="content" rows="10"></textarea>
      </div>

      {{-- SEO Section --}}
      <h5 class="mt-4">SEO Meta Information</h5>

      <div class="mb-3">
        <label class="form-label" for="seo_title">SEO Title</label>
        <input class="form-control" id="seo_title" name="seo_title" type="text">
      </div>

      <div class="mb-3">
        <label class="form-label" for="seo_description">SEO Description</label>
        <textarea class="form-control" id="seo_description" name="seo_description" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label" for="seo_keywords">SEO Keywords (comma separated)</label>
        <textarea class="form-control" id="seo_keywords" name="seo_keywords" rows="4"></textarea>
      </div>

      {{-- Status --}}
      <div class="mb-3">
        <label class="form-label" for="status">Publication Status</label>
        <select class="form-select" id="status" name="status">
          <option value="draft">Draft</option>
          <option value="published">Published</option>
        </select>
      </div>

      {{-- Submit --}}
      <button class="btn btn-primary" type="submit">Publish Article</button>
    </form>
  </div>

@endsection

@push('scripts')
  <!-- TinyMCE -->
  <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>

  <script>
    tinymce.init({
      selector: '#article_content',
      plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media',
        'searchreplace', 'table', 'visualblocks', 'wordcount', 'preview', 'importcss', 'directionality', 'visualchars', 'fullscreen', 'pagebreak', 'nonbreaking', 'advlist', 'code', 'accordion', 'autoresize', 'autosave', 'help', 'insertdatetime', 'quickbars', 'save'
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | forecolor backcolor | anchor code codesample | fullscreen preview',
      menubar: 'file edit view insert format tools table help',
      images_upload_url: '/upload', // Optional: Laravel route for image uploads
      content_css: '//www.tiny.cloud/css/codepen.min.css',
      automatic_uploads: true,
      image_caption: true,
      file_picker_types: 'image',
      extended_valid_elements: 'script[src|type],iframe[src|frameborder|style|scrolling|class|width|height|name|align]',
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
  </script>
@endpush