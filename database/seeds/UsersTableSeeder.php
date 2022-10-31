<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $usuarioRole = Role::where('name','usuario')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name'     => 'Elizabeth Castillo Sanchez',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);
        $usuario = User::create([
            'name'     => 'Jose Reyes Garcia',
            'email'    => 'usuario@usuario.com',
            'password' => Hash::make('contraseña')
        ]);
        $user = User::create([
            'name'     => 'Generic User',
            'email'    => 'user@user.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $usuario->roles()->attach($usuarioRole);
        $user->roles()->attach($userRole);
    }
}
