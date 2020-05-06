@extends('layout')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')
  <article class="mt-4 postShow container">



    <div class="content-post">

    <h1 class="titleShow">{{ $post->title }}</h1>

    {{-- @include('posts.header') --}}
    <div class="nameShow">
      {{-- <div class="nameTitleShow"> --}}
        <span class="c-grisShow"> {{ $post->owner->name }}</span>
      {{-- </div> --}}
      {{-- <div class="circle"> --}}
        <img class="nameImg" src="/img/img-post-1.png" alt="">
      {{-- </div> --}}
    </div>


        {{-- <div class="divider"></div> --}}
        <div class="image-w-text">
          {{-- <figure class="block-left"><img src="/img/img-post-2.png" alt=""></figure> --}}
          <p class="bodyShow read">{!! $post->body !!}</p>
        </div>

        <footer class="container-flex space-between">

          @include('partials.social-links', ['description' => $post->title])

          {{-- @include('posts.tags') --}}

      </footer>
      <div class="comments">
        <div class="divider"></div>
        <div id="disqus_thread"></div>

        @include('partials.disqus-script')

      </div><!-- .comments -->
    </div>
  </article>
@endsection

@push('styles')
    <link rel="stylesheet" href="/css/twitter-bootstrap.css">
@endpush

@push('scripts')
  <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  <script src="/js/twitter-bootstrap.js"></script>
@endpush
