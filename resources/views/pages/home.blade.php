@extends('layout')

@section('content')
<div class="container">

  <div class="mt-4">
    @if (isset($title))
      <h3>{{$title}}</h3>
    @endif
  </div>

  <div class="row mt-4 mb-2">
    
    @forelse ($posts as $post)

    <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
      <div class="card shadow">
        <header style="background-color: tomato" class="p-1 card-header-radius">
             
        </header>
        <div class="card-body ">
          <h5 class="card-title">
            <a class="font-weight-bold color-title" href="{{ route('posts.show', $post) }}">
              {{ $post->title }}
            </a>
          </h5>

          @include('posts.header')

        <p class="card-text">{{ $post->excerpt }}</p>

        <footer class="container-flex space-between">
          <div class="read-more">
              
              <a href="{{ route('posts.show', $post) }}" class="c-green">Leer más</a>
          </div>

          @include('posts.tags')
        </footer>

        </div>
      </div>
    </div>

    @empty
    <article class="post">
      <div class="content-post">
        <h1>No hay publicaciones todavía.</h1>
      </div>
    </article>
    
    @endforelse
  </div>
</div>
{{-- <div class="container">
  <div class="row mb-2">
  @if (isset($title))
    <h3>{{$title}}</h3>
  @endif

  @forelse ($posts as $post)
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 photo" width="250px" height="250px">
            @include($post->viewType())
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">{{ $post->title }}</h3>
              @include('posts.header')

              <p class="font-weight-normal">{{ $post->excerpt }}</p>
              <footer class="container-flex space-between">
                <div class="read-more">
                    
                    <a href="{{ route('posts.show', $post) }}" class="c-green">Leer más</a>
                </div>
    
                @include('posts.tags')
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
    <article class="post">
      <div class="content-post">
        <h1>No hay publicaciones todavía.</h1>
      </div>
    </article>
    
    @endforelse
  </div>
</div> --}}
{{-- <section class="posts container">

  @if (isset($title))
    <h3>{{$title}}</h3>
  @endif

  @forelse ($posts as $post)
    <article class="post">
      <div class="content-post">

        <h1>{{ $post->title }}</h1>

        @include('posts.header')

        <p>{{ $post->excerpt }}</p>

        <footer class="container-flex space-between">
            <div class="read-more">
                
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

</section> --}}
<!-- fin del div.posts.container -->

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

