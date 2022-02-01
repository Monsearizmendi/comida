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
    return view('blog.home');
})-> name('inicio');

Route::get('/contactillo', function () {
    return view('blog.contact');
})-> name('contacto');

Route::get('/teamesito', function () {
    return view('blog.team');
})-> name('equipo');

Route::get('/menusito', function () {
    return view('blog.menu');
})-> name('comida');