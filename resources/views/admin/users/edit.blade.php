@extends('admin.layout')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-title">Datos personales</div>
        </div>
        <div class="box-body">
          <form method="POST" action="{{ route('admin.users.update', $user) }}">
            {{ method_field('PUT') }} {{ csrf_field() }}

            @include('admin.partials.errors-messages')

            <div class="form-group">
              <label for="name">Nombre:</label>
              <input name="name" value="{{ old('name', $user->name) }}" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input name="email" value="{{ old('email', $user->email) }}" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Contraseña:</label>
              <input name="password" type="password" class="form-control" placeholder="Contraseña">
              <span class="help-block">Dejar en blanco si no quieres cambiar la contraseña</span>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirma contraseña:</label>
              <input name="password_confirmation" type="password" class="form-control" placeholder="Repite contraseña">
            </div>

            <button class="btn btn-primary btn-block">Actualizar usuario</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Roles</h3>
        </div>
        <div class="box-body">

          @role('Admin')
          <form method="POST" action="{{ route('admin.users.roles.update', $user) }}" >
            {{ method_field('PUT') }} {{ csrf_field() }}

            @include('admin.roles.checkboxes')

            <button class="btn btn-primary btn-block">Actualizar roles</button>

          </form>
          @else
            <ul class="list-group">
              @forelse ($user->roles as $role)
                  <li class="list-group-item">{{ $role->name }}</li>
                @empty
                <li class="list-group-item">No tiene roles</li>
              @endforelse
            </ul>
          @endrole
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Permisos</h3>
        </div>
        <div class="box-body">

          @role('Admin')
          <form method="POST" action="{{ route('admin.users.permissions.update', $user) }}" >
            {{ method_field('PUT') }} {{ csrf_field() }}

            @include('admin.permissions.checkboxes', ['model' => $user])

            <button class="btn btn-primary btn-block">Actualizar Permisos</button>

          </form>
          @else
            <ul class="list-group">
              @forelse ($user->permissions as $permission)
                <li class="list-group-item">{{ $permission->name }}</li>
              @empty
              <li class="list-group-item">No tiene permisos</li>
              @endforelse
            </ul>
          @endrole
        </div>
      </div>
    </div>
  </div>
@endsection
