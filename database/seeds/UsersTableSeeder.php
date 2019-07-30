<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Permission::truncate();
      Role::truncate();
      User::truncate();

      $adminRole = Role::create(['name' => 'Admin', 'display_name' => 'Administrador']);
      $writerRole = Role::create(['name' => 'Writer', 'display_name' => 'Escritor']);

      $viewPostsPermission = Permission::create(['name' => 'View posts', 'display_name' => 'Ver publicaiones']);
      $createPostsPermission = Permission::create(['name' => 'Create posts', 'display_name' => 'Crear publicaiones']);
      $updatePostsPermission = Permission::create(['name' => 'Update posts', 'display_name' => 'Actualizar publicaiones']);
      $deletePostsPermission = Permission::create(['name' => 'Delete posts', 'display_name' => 'Eliminar publicaiones']);

      $viewUsersPermission = Permission::create(['name' => 'View users', 'display_name' => 'Ver usuarios']);
      $createUsersPermission = Permission::create(['name' => 'Create users', 'display_name' => 'Crear usuarios']);
      $updateUsersPermission = Permission::create(['name' => 'Update users', 'display_name' => 'Actualizar usuarios']);
      $deleteUsersPermission = Permission::create(['name' => 'Delete users', 'display_name' => 'Eliminar usuarios']);

      $updateRolesPermission = Permission::create(['name' => 'View roles','display_name' => 'Ver roles']);
      $updateRolesPermission = Permission::create(['name' => 'Create roles','display_name' => 'Crear roles']);
      $updateRolesPermission = Permission::create(['name' => 'Update roles','display_name' => 'Actualizar roles']);
      $updateRolesPermission = Permission::create(['name' => 'Delete roles','display_name' => 'Eliminar roles']);

      $viewPermissionsPermission = Permission::create(['name' => 'View permissions', 'display_name' => 'Ver permisos']);
      $updatePermissionsPermission = Permission::create(['name' => 'Update permissions', 'display_name' => 'Actualizar permisos']);

      $admin = new User;
      $admin->name = 'Eddy Rufino';
      $admin->email = 'eddyjaair@gmail.com';
      $admin->password = '123456';
      $admin->save();

      $admin->assignRole($adminRole);


      $writer = new User;
      $writer->name = 'Jaair Silva';
      $writer->email = 'jaairsilva@gmail.com';
      $writer->password = '123456';
      $writer->save();

      $writer->assignRole($writerRole);

    }
}
