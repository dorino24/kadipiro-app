<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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



Route::group([['middleware' => 'guest'],['middleware' => 'auth']], function () {
    Route::get('/', function () {return view('guest.beranda');});
    Route::get('/sejarah', function () {return view('guest.sejarahdesa');});
    Route::get('/informasi', function () {return view('guest.informasidesa');});
    Route::get('/regis', function () {return view('admin.register');});
    Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/register', [UserController::class, 'store']);
    Route::post('/login', [UserController::class, 'authenticate']);
    Route::get('/komoditas', [PostController::class, 'index_komoditas']);
    Route::get('/umkm', [PostController::class, 'index_umkm']);
    Route::get('/umkm', [PostController::class, 'index_umkm']);
    Route::get('/artikel/{post}', [PostController::class,'showPost']);
    
});


Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [PostController::class, 'index']);
    Route::resource('/post', PostController::class);
});
