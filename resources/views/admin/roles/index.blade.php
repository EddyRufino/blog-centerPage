@extends('admin.layout')

@section('header')
  <h1>
    Roles
    <small>Listado de roles</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">roles</li>
  </ol>
@endsection

@section('content')
  <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Listado de roles</h3>

        @can('create', $roles->first())
          <a href="{{ route('admin.roles.create') }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Crear Role
          </a>
        @endcan

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="roles-table" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Permisos</th>
            <th>Acciones</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($roles as $role)
                <tr>
                  <td>{{ $role->id }}</td>
                  <td>{{ $role->name }}</td>
                  <td>{{ $role->display_name }}</td>
                  <td>{{ $role->permissions->pluck('name')->implode(', ') }}</td>
                  <td>
                    @can('update', $role)
                      <a href="{{ route('admin.roles.edit', $role) }}"
                        class="btn btn-xs btn-info">
                        <i class="fa fa-pencil"></i>
                      </a>
                    @endcan

                    @can('delete', $role)
                      @if ($role->id !== 1)
                        <form method="POST" action="{{ route('admin.roles.destroy', $role) }}" style="display: inline">
                          {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button class="btn btn-xs btn-danger"
                              onclick="return confirm('¿Seguro de querer eliminar role?')">
                              <i class="fa fa-times"></i>
                            </button>
                      </form>
                      @endif
                    @endcan



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
      $('#roles-table').DataTable({
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
