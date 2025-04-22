<center>
  <strong>
    <a data-wpel-link="external" href="" target="_blank"
      rel="nofollow external noopener noreferrer"><button class="button buttontg"><i class="fa fa-telegram"></i>
        Join Telegram</button></a>
    @foreach ($categories as $category)
      <a data-wpel-link="internal" href="{{ $category->slug }}" target="_blank"><button
          class="button button5">{{ $category->name }}</button></a>
    @endforeach
  </strong>
</center>
