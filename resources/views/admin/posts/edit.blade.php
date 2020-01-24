@extends('admin.layout')

@section('header')
  <h1>
    POSTS
    <small>Crear publicación</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
    <li class="active">Posts</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    @if ($post->photos->count())
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
              <div class="row">
                @foreach ($post->photos as $photo)
                  <form action="{{ route('admin.photos.destroy', $photo) }}" method="post">
                    {{ method_field('DELETE') }} {{ csrf_field() }}
                    <div class="col-md-2">
                      <button class="btn btn-danger btn-xs"
                              style="position: absolute">
                              <i class="fa fa-remove"></i>
                      </button>
                      <img class="img-responsive img-list" src="{{ url($photo->url) }}" alt="">
                    </div>
                  </form>
                @endforeach
              </div>
            </div>
          </div>
      </div>
    @endif
    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
      {{ csrf_field() }} {{ method_field('PUT') }}
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
              <label for="">Título de la publicación</label>
              <input name="title" type="text"
                    value="{{ old('title', $post->title) }}"
                    class="form-control"
                    placeholder="Ingresa el título de la publicación">
              {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
              <label for="">Contenido de la publicación</label>
              <textarea rows="10" id="editor"
                        name="body" data-sample-preservewhitespace
                        class="form-control"
                        placeholder="Ingresa el contenido completo de la publicación">
                        {{ old('body', $post->body) }}
              </textarea>

              {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('iframe') ? 'has-error' : '' }}">
                <label for="">Contenido embebido (iframe)</label>
                <textarea rows="2" id="editor"
                          name="iframe"
                          class="form-control"
                          placeholder="Ingresa el contenido de audio o video">
                          {{ old('iframe', $post->iframe) }}</textarea>
                {!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group">
              <label>Fecha de publicación:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input name="published_at"
                    value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null) }}"
                    type="text" class="form-control pull-right"
                    id="datepicker">
              </div>
            </div>
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
              <label>Categorías</label>
              <select class="form-control select2" name="category_id" id="">
                <option value="">Selecciona una categoría</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}"
                          {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
                @endforeach
              </select>
              {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
              <label>Etiquetas</label>
              <select name="tags[]" class="form-control select2"
                      multiple="multiple"
                      data-placeholder="Selecciona una o más etiquetas"
                      style="width: 100%;">
                @foreach ($tags as $tag)
                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
              </select>
              {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
              <label for="">Extracto de la publicación</label>
              <textarea name="excerpt" class="form-control"
                        placeholder="Ingresa un extracto de la publicación">{{ old('excerpt', $post->excerpt) }}</textarea>
              {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
              <div class="dropzone"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Guardar publicación</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="/css/normalize.css">
  {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/default.min.css">
  {{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet"> --}}

@endpush

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  {{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}
  <script src="https://cdn.ckeditor.com/4.12.1/standard-all/ckeditor.js"></script>
  {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}
  <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
  <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
  {{-- <script charset="UTF-8"
 src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/languages/go.min.js"></script> --}}
{{--
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script> --}}

  <script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('.select2').select2({
      tags: true
    });

    // CKEDITOR.replace('editor');
    // CKEDITOR.config.height = 315;
    var config = {
      extraPlugins: 'codesnippet',
      codeSnippet_theme: 'monokai_sublime',
      height: 356
    };

    CKEDITOR.replace('editor', config);
    // $('#summernote').summernote({
    //   placeholder: 'Hello bootstrap 4',
    //   tabsize: 2,
    //   height: 100
    // });

    // Quill
    // var toolbarOptions = [
    //   ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    //   ['blockquote', 'code-block'],

    //   [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    //   [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    //   [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    //   [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    //   [{ 'direction': 'rtl' }],                         // text direction

    //   [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    //   [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    //   [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    //   [{ 'font': [] }],
    //   [{ 'align': [] }],

    //   ['clean']                                         // remove formatting button
    // ];

    // var editor = new Quill('#editor', {
    //   modules: {
    //     toolbar: toolbarOptions
    //   },
    //   theme: 'snow'
    // });
    // var editor = new Quill('#editor', {
    //   modules: {
    //     toolbar: toolbarOptions
    //   },
    //   theme: 'snow'
    // });

    //Fin Quill

    var myDropzone = new Dropzone('.dropzone', {
      url: '/admin/posts/{{$post->url}}/photos',
      acceptedFiles: 'image/*',
      paramName: 'photo',
      maxFilesize: 2,
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      dictDefaultMessage: 'Arrastra aquí tus images'
    });

    myDropzone.on('error', function(file, res) {
      var msg = res.errors.photo[0];
      $('.dz-error-message:last > span').text(msg);
    });

    Dropzone.autoDiscover = false;


    // myDropzone.on('error', function(file, res) {
    //   var msg = res.errors.photo[0];
    //   $('.dz-error-message:last > span').text(msg);
    // });

  </script>
@endpush
