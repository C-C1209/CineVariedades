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
//Pagina Principal
Route::get('/', function () { return view('/menu/index'); });

//Pagina Login
Route::get('/login', function () { return view('login'); });

//Pagina controlAdmin
Route::get('/controlAdmin', function () { return view('/controlAdmin/controlPanel'); });

//Ruta Peliculas del control Admin
Route::get('/controlAdmin/peliculas', function () { return view('/controlAdmin/peliculas'); });
