<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;


use Illuminate\Http\Request;

class Admin extends Controller
{
    public function admin()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function postAdminRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_gestor']) {
            $user->roles()->attach(Role::where('name', 'Gestor')->first());
        }
        if ($request['role_fiscal']) {
            $user->roles()->attach(Role::where('name', 'Fiscal')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Administrador')->first());
        }
        if ($request['role_comunicacao']) {
            $user->roles()->attach(Role::where('name', 'Comunicacao')->first());
        }
        if ($request['role_financeiro']) {
            $user->roles()->attach(Role::where('name', 'Financeiro')->first());
        }
        if ($request['role_rh']) {
            $user->roles()->attach(Role::where('name', 'RH')->first());
        }
        if ($request['role_atendente']) {
            $user->roles()->attach(Role::where('name', 'Atendente')->first());
        }
        return redirect()->back();
    }
}
