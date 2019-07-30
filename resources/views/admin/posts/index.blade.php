@extends('admin.layout')

@section('header')
  <h1>
    POSTS
    <small>Listado de posts</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Posts</li>
  </ol>
@endsection

@section('content')
  <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Listado de publicaciones</h3>
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Crear publicación</button>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Estracto</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->excerpt }}</td>
                  <td>
                    <a href="{{ route('posts.show', $post) }}"
                          target="_blanck"
                          class="btn btn-xs btn-default"><i class="fa fa-eye"></i>
                    </a>

                    <a href="{{ route('admin.posts.edit', $post) }}"
                          class="btn btn-xs btn-info">
                          <i class="fa fa-pencil"></i>
                    </a>

                    <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" style="display: inline">
                      {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-xs btn-danger"
                          onclick="return confirm('¿Seguro de querer eliminar la publicación?')">
                          <i class="fa fa-times"></i>
                        </button>
                    </form>

                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@push('styles')

  {{-- Styles Data Table --}}
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush

@push('scripts')
  <!-- DataTables -->
  <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $('#posts-table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endpush
