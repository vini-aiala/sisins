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

//Rota raiz
Route::get('/', function () {
    return view('index');
})->name('index');

//Autenticação
Route::get('/cadastro', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/cadastro', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::prefix('senha')->group(function () {
    Route::get('/confirma', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('/confirma', 'Auth\ConfirmPasswordController@showConfirmForm');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});
Route::prefix('email')->group(function () {
    Route::post('/reenvio', 'Auth\VerificationController@resend')->name('verification.resend');
    Route::get('/verifica', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('/verifica/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
});

//Cadastro da pessoa como aluno
Route::get('/regaluno', 'CadastroAlunoController@exibeCadastro')->name('cadastro-aluno')->middleware('auth');
Route::post('/regaluno', 'CadastroAlunoController@processaCadastro')->middleware('auth');

//Rotas do aluno
Route::group(['prefix' => 'alunos',  'middleware' => ['aluno', 'verified']], function() {
    Route::get('/', 'AlunoController@index')->name('alunos-index');
    Route::get('/lista', 'AlunoController@listaCursos')->name('alunos-lista');
    Route::get('/prova', 'AlunoController@prova')->name('alunos-prova');
    Route::get('/edicao', 'AlunoController@edicao')->name('alunos-edicao');
});

