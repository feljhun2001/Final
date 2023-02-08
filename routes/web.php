<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('homepage');
});
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products');

Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('users');

Route::get('/users/add', [UserController::class, 'form'])
    ->middleware(['auth', 'verified']);

Route::post('/users/add', [UserController::class, 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/users/update/{id}', [UserController::class, 'show'])
    ->middleware(['auth', 'verified']);

Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->middleware(['auth', 'verified']);

Route::get('/users/delete/{id}', [UserController::class, 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/users/delete/{id}', [UserController::class, 'delete'])
    ->middleware(['auth', 'verified']);



Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::get('/home/add', [HomeController::class, 'form'])
    ->middleware(['auth', 'verified']);

Route::post('/home/add', [HomeController::class, 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/home/update/{id}', [HomeController::class, 'show'])
    ->middleware(['auth', 'verified']);

Route::post('/home/update/{id}', [HomeController::class, 'update'])
    ->middleware(['auth', 'verified']);

Route::get('/home/delete/{id}', [HomeController::class, 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/home/delete/{id}', [HomeController::class, 'delete'])
    ->middleware(['auth', 'verified']);




    


  










Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
