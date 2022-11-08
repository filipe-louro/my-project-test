<?php

use App\Http\Controllers\PostController;
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

//create
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->middleware('auth');

//show
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/', [PostController::class, 'index']);

//delete
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
