<div id="commentsAdd">
  <h4><span>Comments</span></h4>
  <div class="comments-list">
    @if ($video->comments->count() > 0)
      @foreach ($video->comments as $comment)
        <div class="card rounded-3 mb-3 border-0 shadow-sm">
          <div class="row g-0 align-items-center">
            <div class="col-auto">
              <img class="img-fluid rounded-circle"
                src="{{ asset('assets/images/comment-user-image.webp') }}" alt="{{ $comment->name }}"
                style="width: 80px; height: 80px; object-fit: cover;">
            </div>
            <div class="col">
              <div class="card-body">
                <h5 class="card-title mb-1">{{ $comment->name }}</h5>
                <p class="card-text mb-2">{{ $comment->comment }}</p>
                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <p style="color: #a1a1aa !important;">No comments yet.</p>
    @endif
  </div>
  <h4><span>Add Comment</span></h4>
  <form class="comment-form" id="commentform" action="{{ route('video.comment.store') }}" method="post">
    @csrf

    <input name="video_id" type="hidden" value="{{ $video->id }}">
    <p class="comment-form-comment">
      <textarea class="form-control" id="comment" name="comment" aria-required="true"
        style="width: 100% !important" rows="8" placeholder="Comment Text*" required></textarea>
    </p>
    <p class="comment-form-author">
      <input class="form-control" id="author" name="name" type="text" value="{{ old('name') }}"
        aria-required="true" placeholder="Name*" size="30" required>
    </p>
    <p class="comment-form-email">
      <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}"
        aria-required="true" placeholder="Email (optional)" size="30">
    </p>
    <p class="form-submit">
      <input class="submit" id="submit" type="submit" value="Submit Comment">
    </p>
  </form>
</div>
