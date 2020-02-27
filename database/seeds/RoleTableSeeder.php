<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Administrador';
        $role_admin->description = 'Responsável por gerenciar a Intranet';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'Gestor';
        $role_user->description = 'Área de Gestão';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Fiscal';
        $role_author->description = 'Área de Fiscalização';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'Comunicacao';
        $role_admin->description = 'Área de Comunicação';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Financeiro';
        $role_admin->description = 'Área Financeira';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'RH';
        $role_admin->description = 'Recursos Humanos';
        $role_admin->save();
    }
}
