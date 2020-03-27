<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::post('/atendimento/criar-atendimento', 'AtendimentoController@criarAtendimento');
Route::get('/painel', 'PainelController@Painel')->name('painel');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('home');
    })->name('main');

    Route::get('/admin', [
        'uses' => 'Admin@admin',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Administrador']
    ]);

    Route::post('/admin/assign-roles', [
        'uses' => 'Admin@postAdminRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Administrador']
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('/atendimento', [
        'uses' => 'AtendimentoController@atendimento',
        'middleware' => 'roles',
        'roles' => ['Administrador', 'Atendente', 'Gestor'],
        'as' => 'atendimento'
    ]);

    Route::get('/atendimento/novo', [
        'uses' => 'AtendimentoController@atendimentoNovo',
        'middleware' => 'roles',
        'roles' => ['Administrador', 'Atendente'],
        'as' => 'atendimentoNovo'
    ]);
    Route::get('/atendimento/relatorio', [
        'uses' => 'AtendimentoController@relatorio',
        'middleware' => 'roles',
        'roles' => ['Administrador', 'Gestor'],
        'as' => 'relatorio'
    ]);

    Route::post('/atendimento/relatorio/Novo', [
        'uses' => 'AtendimentoController@relatorioNovo',
        'middleware' => 'roles',
        'roles' => ['Administrador', 'Gestor'],
        'as' => 'relatorioNovo'
    ]);
});
