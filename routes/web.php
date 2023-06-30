<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuppyController;
use App\Http\Controllers\UserController;

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

Route::get('/', [Controller::class, 'index'])->name('home')->middleware('guest');

// auth
Route::get('login', [Controller::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [Controller::class, 'loginProses'])->name('loginProses')->middleware('guest');

Route::get('logout', [Controller::class, 'logout'])->name('logout')->middleware('auth');

Route::get('register', [Controller::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [Controller::class, 'registerProses'])->name('registerProses')->middleware('guest');

// group routes prefix admin
Route::prefix('admin')->name('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('.home');

    // prefix post
    Route::prefix('/post')->name('.post')->group(function () {
        Route::get('/', [AdminController::class, 'post'])->name('.index');
        Route::get('/anjing', [AdminController::class, 'anjing'])->name('.anjing');
        Route::get('/anjing/tambah', [AdminController::class, 'anjingTambah'])->name('.anjingTambah');
        Route::post('/anjing/simpan', [AdminController::class, 'anjingSimpan'])->name('.anjingSimpan');
        Route::get('/anjing/edit/{id}', [AdminController::class, 'anjingEdit'])->name('.anjingEdit');
        Route::post('/anjing/update/{id}', [AdminController::class, 'anjingUpdate'])->name('.anjingUpdate');
        Route::delete('/anjing/hapus/{id}', [AdminController::class, 'anjingHapus'])->name('.anjingHapus');

        Route::get('/kucing', [AdminController::class, 'kucing'])->name('.kucing');
        Route::get('/kucing/tambah', [AdminController::class, 'kucingTambah'])->name('.kucingTambah');
        Route::post('/kucing/simpan', [AdminController::class, 'kucingSimpan'])->name('.kucingSimpan');
        Route::get('/kucing/edit/{id}', [AdminController::class, 'kucingEdit'])->name('.kucingEdit');
        Route::post('/kucing/update/{id}', [AdminController::class, 'kucingUpdate'])->name('.kucingUpdate');
        Route::delete('/kucing/hapus/{id}', [AdminController::class, 'kucingHapus'])->name('.kucingHapus');

        Route::get('/hamster', [AdminController::class, 'hamster'])->name('.hamster');
        Route::get('/hamster/tambah', [AdminController::class, 'hamsterTambah'])->name('.hamsterTambah');
        Route::post('/hamster/simpan', [AdminController::class, 'hamsterSimpan'])->name('.hamsterSimpan');
        Route::get('/hamster/edit/{id}', [AdminController::class, 'hamsterEdit'])->name('.hamsterEdit');
        Route::post('/hamster/update/{id}', [AdminController::class, 'hamsterUpdate'])->name('.hamsterUpdate');
        Route::delete('/hamster/hapus/{id}', [AdminController::class, 'hamsterHapus'])->name('.hamsterHapus');
    });
});

// group routes prefix user
Route::prefix('user')->name('user')->middleware(['auth', 'isUser'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('.home');
    Route::prefix('list')->name('.list')->group(function () {
        Route::get('/', [UserController::class, 'list'])->name('.index');
        Route::get('/anjing', [UserController::class, 'anjing'])->name('.anjing');
        Route::get('/kucing', [UserController::class, 'kucing'])->name('.kucing');
        Route::get('/hamster', [UserController::class, 'hamster'])->name('.hamster');

        Route::get('/anjing/detail/{id}', [UserController::class, 'anjingDetail'])->name('.anjingDetail');
        Route::get('/kucing/detail/{id}', [UserController::class, 'kucingDetail'])->name('.kucingDetail');
        Route::get('/hamster/detail/{id}', [UserController::class, 'hamsterDetail'])->name('.hamsterDetail');
    });
});

// group routes prefix list
Route::prefix('list')->name('list')->middleware('guest')->group(function () {
    Route::get('/', [Controller::class, 'list'])->name('.index');
    Route::get('/anjing', [Controller::class, 'anjing'])->name('.anjing');
    Route::get('/kucing', [Controller::class, 'kucing'])->name('.kucing');
    Route::get('/hamster', [Controller::class, 'hamster'])->name('.hamster');
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/get-puppies', [PuppyController::class, 'index'])->name('getPuppies');
Route::get('/get-puppies/{id}', [PuppyController::class, 'show'])->name('getPuppyById');
