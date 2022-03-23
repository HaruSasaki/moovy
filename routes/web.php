<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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


Route::get('/about', function () {
    return view('about', [
        'navlink' => 'about'
    ]);
});

Route::get('/', [MovieController::class, 'home']);
Route::get('/profile', [MovieController::class, 'profile'])->middleware('auth');
Route::get('/movies', [MovieController::class, 'movies']);
Route::get('/series', [MovieController::class, 'series']);
Route::get('/detail/{id}', [MovieController::class, 'show']);
Route::get('/add', [MovieController::class, 'create'])->middleware('auth');
Route::post('/add', [MovieController::class, 'store'])->middleware('auth');
Route::get('/edit/{id}', [MovieController::class, 'edit'])->middleware('auth');
Route::put('/edit/{id}', [MovieController::class, 'update'])->middleware('auth');
Route::delete('/detail/{id}', [MovieController::class, 'destroy'])->middleware('auths');

require __DIR__ . '/auth.php';
