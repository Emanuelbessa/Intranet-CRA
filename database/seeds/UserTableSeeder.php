<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_fiscal = Role::where('name', 'Fiscal')->first();
        $role_rh = Role::where('name', 'RH')->first();
        $role_admin = Role::where('name', 'Administrador')->first();
        $role_gestor = Role::where('name', 'Gestor')->first();
        $role_comunicacao = Role::where('name', 'Comunicacao')->first();
        $role_financeiro = Role::where('name', 'Financeiro')->first();

        $fiscal = new User();
        $fiscal->first_name = 'Peter';
        $fiscal->last_name = 'Parker';
        $fiscal->email = 'peter@example.com';
        $fiscal->password = bcrypt('123456');
        $fiscal->save();
        $fiscal->roles()->attach($role_fiscal);

        $financeiro = new User();
        $financeiro->first_name = 'Tony';
        $financeiro->last_name = 'Stark';
        $financeiro->email = 'tony@example.com';
        $financeiro->password = bcrypt('123456');
        $financeiro->save();
        $financeiro->roles()->attach($role_financeiro);

        $comunicacao = new User();
        $comunicacao->first_name = 'Bruce';
        $comunicacao->last_name = 'Banner';
        $comunicacao->email = 'bruce@example.com';
        $comunicacao->password = bcrypt('123456');
        $comunicacao->save();
        $comunicacao->roles()->attach($role_comunicacao);

        $rh = new User();
        $rh->first_name = 'Steve';
        $rh->last_name = 'Rogers';
        $rh->email = 'steve@example.com';
        $rh->password = bcrypt('123456');
        $rh->save();
        $rh->roles()->attach($role_rh);

        $gestor = new User();
        $gestor->first_name = 'Rainan';
        $gestor->last_name = 'Gramacho';
        $gestor->email = 'rainan@example.com';
        $gestor->password = bcrypt('123456');
        $gestor->save();
        $gestor->roles()->attach($role_gestor);

        $admin = new User();
        $admin->first_name = 'Emanuel';
        $admin->last_name = 'Bessa';
        $admin->email = 'emanuel.bessa@hotmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
