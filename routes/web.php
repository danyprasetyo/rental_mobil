<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdmin\KelolaAkunController;
use App\Http\Controllers\SuperAdmin\PersetujuanAkunController;
use App\Http\Controllers\AdminRental\KelolaMobilController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::middleware('role:Super Admin')->group(function () {
        Route::prefix('dashboard/superAdmin')->group(function () {
            Route::name('superAdmin.')->group(function () {
                Route::controller(KelolaAkunController::class)->group(function () {
                    Route::get('/kelolaAkun', 'index')->name('kelolaAkun.index');
                    Route::post('/kelolaAkun', 'store')->name('kelolaAkun.store');
                    Route::get('/kelolaAkun/{id}/edit', 'edit')->name('kelolaAkun.edit');
                    Route::put('/kelolaAkun/{id}', 'update')->name('kelolaAkun.update');
                    Route::delete('/kelolaAkun/{id}', 'destroy')->name('kelolaAkun.destroy');
                });
                Route::controller(PersetujuanAkunController::class)->group(function () {
                    Route::get('/persetujuanAkun', 'index')->name('persetujuanAkun.index');
                    Route::get('/persetujuanAkun/{id}', 'profile')->name('persetujuanAkun.profile');
                    Route::post('/persetujuanAkun/setujuiAkun/{id}', 'setujui')->name('persetujuanAkun.setujui');
                    Route::post('/persetujuanAkun/tolakAkun/{id}', 'tolak')->name('persetujuanAkun.tolak');
                });
            });
        });
    });
    Route::middleware('role:Admin Rental')->group(function () {
        Route::prefix('dashboard/adminRental')->group(function () {
            Route::name('adminRental.')->group(function () {
                Route::controller(KelolaMobilController::class)->group(function () {
                    Route::get('/kelolaMobil', 'index')->name('kelolaMobil.index');
                    Route::post('/kelolaMobil', 'store')->name('kelolaMobil.store');
                    Route::get('/kelolaMobil/{id}/edit', 'edit')->name('kelolaMobil.edit');
                    Route::put('/kelolaMobil/{id}', 'update')->name('kelolaMobil.update');
                    Route::delete('/kelolaMobil/{id}', 'destroy')->name('kelolaMobil.destroy');
                });
            });
        });
    });
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.index');
        Route::post('/profile', 'store')->name('profile.store');
        Route::put('/profile', 'update')->name('profile.update');
        Route::patch('/profile/akun', 'akunUpdate')->name('profile.akunUpdate');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
