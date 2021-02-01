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
    return view('welcome');
});

Route::get('notas/{id}/detalles', function ($id) {
    return 'Aqui se muestran los detalles de la nota: ' .$id;
});

Route::get('notas/crear', function () {
    return 'Aqui se crea una nueva nota';
});

Route::get('notas/listar', function () {
    return 'Aqui se listan las notas';
});

Route::get('notas/editar', function () {
    return 'Aqui se editan las notas';
});

Route::get('notas', function () {
    return view('notas');
});

Route::get('agregar', function () {
    return view('agregar');
});
