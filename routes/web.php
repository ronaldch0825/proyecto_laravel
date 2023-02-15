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
    //return view('contenido/contenido');
    //return view('home');
    return view('principal');
});

//------------------------------------------------------------------------
//Mi contenido dinamico
Route::view('/', 'contenido.principaldashboard');
Route::view('/dasboardexample1', 'contenido.dasboardexample1');




//------------------------------------------------------------------------
//Metodos
//Route::get('/dasboardexample1', 'DashsboardExampleController@GetDataDashboard');
//Route::get('/dasboardexample1', [App\Http\Controllers\DashsboardExampleController::class, 'GetDataDashboard'])->name('dasboardexample1');

Route::get('/dasboardexample1/{fechaInicio}/{fechaFin}', [App\Http\Controllers\DashsboardExampleController::class, 'GetDataForDate'])->name('dasboardexample1');



//------------------------------------------------------------------------
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
