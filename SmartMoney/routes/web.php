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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PaginasController@exibirHome');
Route::get('/sobre-nos', 'PaginasController@exibirSobre');
Route::get('/contato', 'PaginasController@exibirContato');
Route::get('/login', 'PaginasController@exibirLogin');

Route::get('/cursos', 'CursosController@exibirCursos');
Route::get('/cursos/curso', 'CursosController@exibirCurso'); //Trocar nome da rota para /cursos/{id}