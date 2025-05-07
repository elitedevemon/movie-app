<aside class="sidebar c-4-12 mts-sidebar-sidebar" id="sidebar" role="complementary">
  <!-- related categories -->
  <div class="widget widget_cool_tag_cloud" id="cool_tag_cloud-5">
    <h3 class="widget-title">RELATED CATEGORIES</h3>
    @foreach ($category_values as $category)
      <div class="cool-tag-cloud">
        <div class="cloudbold">
          <div class="animation">
            <div class="ctcblack">
              <div class="ctcleft">
                <div class="verdana" style="text-transform:none!important;">
                  <a class="tag-cloud-link tag-link-43 ctc-active tag-link-position-1"
                    href="{{ route('video-category.show', $category->slug) }}"
                    style="font-size: 10px;">{{ $category->name }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- popular categories -->
  <div class="widget widget_cool_tag_cloud" id="cool_tag_cloud-5">
    <h3 class="widget-title">POPULAR CATEGORIES</h3>
    @foreach ($popular_categories as $category)
      <div class="cool-tag-cloud">
        <div class="cloudbold">
          <div class="animation">
            <div class="ctcblack">
              <div class="ctcleft">
                <div class="verdana" style="text-transform:none!important;">
                  <a class="tag-cloud-link tag-link-43 ctc-active tag-link-position-1"
                    href="{{ route('video-category.show', $category->category->slug) }}"
                    style="font-size: 10px;">{{ $category->category->name }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="widget widget_mts_popular_posts_widget vertical-small" id="mts_popular_posts_widget-17">
    <h3 class="widget-title">Popular Posts</h3>
    <div class="clear">
      <div class="row row-cols-1 g-2">
        @foreach ($popular_posts as $post)
          <a class="main-card" href="{{ route('video.check', $post->video->slug) }}">
            <div class="card">
              <div class="card-img-container">
                <img class="card-img-top" src="{{ asset($post->video->thumbnail) }}" alt="{{ $post->video->title }}">
                <div class="overlay d-flex align-items-center justify-content-center">
                  <img src="{{ asset('assets/images/video-play-button.png') }}" alt=""
                    style="width: 75px; height: 15px;">
                </div>
              </div>
              <div class="card-body p-2">
                <p class="card-text card-text-title"
                  style="text-align: center; font-size: 15px; font-family: 'Alif';">{{ $post->video->title }}
                </p>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
  <div class="widget widget_block" id="block-11"></div>
</aside>
