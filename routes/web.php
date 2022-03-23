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
    return view('dashboard', [
        'navlink' => 'home'
    ]);
});
Route::get('/login', function () {
    return view('auth.loginbaru', [
        'navlink' => 'home'
    ]);
});

Route::get('/sign', function () {
    return view('auth.registerbaru', [
        'navlink' => 'home'
    ]);
});
Route::get('/movies', function () {
    return view('movies', [
        'navlink' => 'movies'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'navlink' => 'about'
    ]);
});
Route::get('/series', function () {
    return view('series', [
        'navlink' => 'series'
    ]);
});
Route::get('/detail', function () {
    return view('detail', [
        'navlink' => 'detail'
    ]);
});

Route::get('/add', [MovieController::class, 'create']);
Route::post('/add', [MovieController::class, 'store']);

require __DIR__ . '/auth.php';
