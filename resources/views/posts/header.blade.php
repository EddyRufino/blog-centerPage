<header class="container-flex space-between pb-2">
  {{-- <div class="date"> --}}
    <div class="name">
      <div class="circle">
        <img class="nameImg" src="/img/img-post-1.png" alt="">
      </div>
      <span class="c-gris">Por {{ $post->owner->name }}</span>
    </div>

    <div class="read">
      <img class="nameIcon" src="/img/reloj.png" alt="">
      <span class="c-gris">
        {{ optional($post->published_at)->format('M d') }}
      </span>
    </div>
  {{-- <div class="read">
    <img class="nameIcon" src="/img/read.png" alt="">
    <span class="c-gris">Leélo en 3 Min.</span>
  </div> --}}
  {{-- </div> --}}



{{--   @if ($post->category)

    <div class="post-category">
      <span  class="category">
        <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
      </span>
    </div>

  @endif --}}

</header>
