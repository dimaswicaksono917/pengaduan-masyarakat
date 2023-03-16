<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\PengaduanController as PengaduanAdmin;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\DataTableController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\MonthController;

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
    Route::delete('pengaduan/destroy/{no_pengaduan}', [PengaduanController::class, 'destroypengaduan'])->name('destroypengaduan');
    Route::get('/tanggapan/{no_pengaduan}', [PengaduanController::class, 'tanggapanDetail'])->name('tanggapanDetail');
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
        Route::get('pengaduan/print/{no_pengaduan}', [PengaduanAdmin::class, 'cetakPDF'])->name('.cetakPDF');
        Route::get('pengaduan-undone', function () {return view('admin.pengaduan.undone');})->name('.pengaduan-undone');
        Route::get('get-undone', [DataTableController::class, 'pengaduanProgres'])->name('.get-undone');
        Route::get('pengaduan/{no_pengaduan}', [PengaduanAdmin::class, 'index'])->name('.pengaduan-detail');
        Route::post('create-tanggapan/{no_pengaduan}', [PengaduanAdmin::class, 'createTanggapan'])->name('.create-tanggapan');
        Route::get('pengaduan-done', function () {return view('admin.pengaduan.done');})->name('.pengaduan-done');
        Route::get('get-done', [DataTableController::class, 'pengaduanDone'])->name('.get-done');
        Route::get('rekap/bulan', [MonthController::class, 'index'])->name('.rekap');

    });
});
