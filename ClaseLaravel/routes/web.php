<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;

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

Route::get('notas', function() {
    $notas = Notas::all(); //DB::table('notas')->get();

    return view('notas', ['notas' => $notas]);
});

Route::get('agregar', function() {
    return view('agregar');
});

Route::post('crear', function(Request $reques){
    Notas::create([
        'titulo' => $reques->input('title'),
        'contenido' => $reques->input('content'),
    ]);

    return redirect('/notas');

})->name('notas.store');

Route::get('notas/{id}/editar', function ($id){
    $notas = Notas::find($id); //DB::table('notas')->where('id', $id)->first();

        return view('editar', ['notas' => $notas]);
})->name('notas.edit');
