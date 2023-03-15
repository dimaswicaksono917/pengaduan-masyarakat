<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardAdminController;

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
Route::get('/', [LandingController::class, 'index'])->name('landing');
// login masyarakat
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login/post', [UserController::class, 'loginpost'])->name('loginpost');

// register masyarakat
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register/post', [UserController::class, 'registerpost'])->name('registerpost');

// logout masyarakat
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// pengaduan
Route::prefix('masyarakat')->name('masyarakat')->middleware('auth')->group(function () {
    Route::get('pengaduan', [PengaduanController::class, 'pengaduan'])->name('pengaduan');
    Route::post('pengaduan/post', [PengaduanController::class, 'postpengaduan'])->name('postpengaduan');
    Route::get('pengaduanku', [PengaduanController::class, 'pengaduanku'])->name('pengaduanku');
});


Route::prefix('webmin')->name('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('.login');
    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('.authenticate');
    Route::get('/logout', [LoginController::class, 'logout'])->name('.logout');

    Route::middleware(['auth:petugas'])->group(function () {
        Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('.dashboard');

        Route::middleware(['auth:petugas'])->group(function () {

            Route::prefix('petugas')->name('.petugas')->group(function () {
                Route::get('/', [PetugasController::class, 'index'])->name('.index');
                Route::get('/get-petugas', [DatatableController::class, 'petugas'])->name('.get-petugas');
                Route::post('store', [PetugasController::class, 'store'])->name('.store');
                Route::delete('destroy/{id}', [PetugasController::class, 'destroy'])->name('.destroy');
            });
        });

        });

});
