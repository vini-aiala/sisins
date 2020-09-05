<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('alunos')->group(function () {
    Route::get('/', 'AlunoController@index')->name('alunos-index');
    Route::get('/lista', 'AlunoController@listaCursos')->name('alunos-lista');
    Route::get('/prova', 'AlunoController@prova')->name('alunos-prova');
    Route::get('/edicao', 'AlunoController@edicao')->name('alunos-edicao');
});

