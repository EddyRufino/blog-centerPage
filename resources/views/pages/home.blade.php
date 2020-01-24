@extends('layout')

@section('content')
<section class="posts container">

  @if (isset($title))
    <h3>{{$title}}</h3>
  @endif

  @forelse ($posts as $post)
    <article class="post">
      <div class="content-post">

        <h1>{{ $post->title }}</h1>

        @include('posts.header')

        {{-- <div class="divider"></div> --}}

        <p>{{ $post->excerpt }}</p>

        <footer class="container-flex space-between">
            <div class="read-more">
                {{-- <a href="blog/{{ $post->url }}" class="text-uppercase c-green">Leer más</a> --}}
                <a href="{{ route('posts.show', $post) }}" class="c-green">Leer más</a>
            </div>

            @include('posts.tags')
        </footer>
      </div>

      <div class="content-img">
        @include($post->viewType())
      </div>
    </article>

  @empty
    <article class="post">
      <div class="content-post">
        <h1>No hay publicaciones todavía.</h1>
      </div>
    </article>

  @endforelse

</section><!-- fin del div.posts.container -->

  {{-- {{ $posts->render("pagination::default") }} --}}
  {{ $posts->appends(request()->all())->links() }}

{{-- <div class="pagination">
    <ul class="list-unstyled container-flex space-center">
        <li><a href="#" class="pagination-active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</div>--}}
@endsection

