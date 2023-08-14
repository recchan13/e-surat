<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/disposisi', function () {
    return view('disposisi');
});
Route::get('/no_surat', function () {
    return view('no_surat');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

//route resource
Route::resource('/surats', \App\Http\Controllers\SuratController::class);