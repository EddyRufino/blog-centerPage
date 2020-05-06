<div class="tags container-flex">

{{--   @foreach ($post->tags as $tag)
    <span class="tag c-gray-1 text-capitalize">
      <a href="{{route('tags.show', $tag)}}">#{{ $tag->name }}</a>
    </span>
  @endforeach --}}

@if ($post->category)

    <div class="post-category">
      <span  class="category">
        <a class="text-muted" href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
      </span>
    </div>

 @endif

</div>
