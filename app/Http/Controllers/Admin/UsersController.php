<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Providers\UserWasCreated;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $users = User::allowed()->get();

      return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->authorize('create', new User);

      $user = new User();
      $roles = Role::with('permissions')->get();
      $permissions = Permission::pluck('name', 'id');

      return view('admin.users.create', compact('user', 'roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->authorize('create', new User);

      //Validar Datos
        $data = $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

      //Generar contraseña
        $data['password'] = str_random(8);

      //Creamos el usuario
        $user = User::create($data);

      // Asignamos los roles
      if ($request->filled('roles')) {

        $user->assignRole($request->roles);
      }

      // Asignamos los permisos
      if ($request->filled('permissions')) {

        $user->givePermissionTo($request->permissions);
      }

      // Enviamos el email
        UserWasCreated::dispatch($user, $data['password']);

      // Retornamos al usuario
        return redirect()->route('admin.users.index')->withFlash('El usuario ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      $this->authorize('view', $user);

      return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $this->authorize('update', $user);

      $roles = Role::with('permissions')->get();
      $permissions = Permission::pluck('name', 'id');

      return view('admin.users.edit', compact('user', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {

      // $data = $request->validate($rules);
      // $user->update($data);  //Tambien lo puedes hacer así, pero un metodo más simple es como el de abajo
      $this->authorize('update', $user);

      $user->update($request->validated());

      return redirect()->route('admin.users.edit', $user)->withFlash('Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $this->authorize('Delete', $user);

      $user->delete();

      return redirect()->route('admin.users.index')->withFlash('Usuario eliminado con exito');
    }
}
