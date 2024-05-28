<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KPAController;
use App\Http\Controllers\KPPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenyidikController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\PemasaranController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TersangkaController;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\SerahTerimaController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('superadmin');
        } elseif (Auth::user()->hasRole('pemohon')) {
            return redirect('pemohon');
        }
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('daftar', [DaftarController::class, 'index']);
Route::post('daftar', [DaftarController::class, 'daftar']);
Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('superadmin/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('superadmin/pegawai/create', [PegawaiController::class, 'store']);
    Route::get('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

    Route::get('superadmin/ikan', [IkanController::class, 'index']);
    Route::get('superadmin/ikan/create', [IkanController::class, 'create']);
    Route::post('superadmin/ikan/create', [IkanController::class, 'store']);
    Route::get('superadmin/ikan/edit/{id}', [IkanController::class, 'edit']);
    Route::post('superadmin/ikan/edit/{id}', [IkanController::class, 'update']);
    Route::get('superadmin/ikan/delete/{id}', [IkanController::class, 'delete']);

    Route::get('superadmin/petani', [PetaniController::class, 'index']);
    Route::get('superadmin/petani/create', [PetaniController::class, 'create']);
    Route::post('superadmin/petani/create', [PetaniController::class, 'store']);
    Route::get('superadmin/petani/edit/{id}', [PetaniController::class, 'edit']);
    Route::post('superadmin/petani/edit/{id}', [PetaniController::class, 'update']);
    Route::get('superadmin/petani/delete/{id}', [PetaniController::class, 'delete']);

    Route::get('superadmin/pemasaran', [PemasaranController::class, 'index']);
    Route::get('superadmin/pemasaran/create', [PemasaranController::class, 'create']);
    Route::post('superadmin/pemasaran/create', [PemasaranController::class, 'store']);
    Route::get('superadmin/pemasaran/edit/{id}', [PemasaranController::class, 'edit']);
    Route::post('superadmin/pemasaran/edit/{id}', [PemasaranController::class, 'update']);
    Route::get('superadmin/pemasaran/delete/{id}', [PemasaranController::class, 'delete']);

    Route::get('superadmin/pengambilan', [PengambilanController::class, 'index']);
    Route::get('superadmin/pengambilan/create', [PengambilanController::class, 'create']);
    Route::post('superadmin/pengambilan/create', [PengambilanController::class, 'store']);
    Route::get('superadmin/pengambilan/edit/{id}', [PengambilanController::class, 'edit']);
    Route::post('superadmin/pengambilan/edit/{id}', [PengambilanController::class, 'update']);
    Route::get('superadmin/pengambilan/delete/{id}', [PengambilanController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::post('superadmin/laporan/periode', [LaporanController::class, 'periode']);
    Route::get('superadmin/laporan/pegawai', [LaporanController::class, 'pegawai']);
    Route::get('superadmin/laporan/petani', [LaporanController::class, 'petani']);
    Route::get('superadmin/laporan/ikan', [LaporanController::class, 'ikan']);
    Route::get('superadmin/laporan/pengajuan', [LaporanController::class, 'pengajuan']);
    Route::get('superadmin/laporan/validasi', [LaporanController::class, 'validasi']);
    Route::get('superadmin/laporan/serahterima', [LaporanController::class, 'serahterima']);
});

Route::group(['middleware' => ['auth', 'role:pemohon']], function () {
    Route::get('pemohon', [HomeController::class, 'pemohon']);
    Route::get('pemohon/gp', [GantiPasswordController::class, 'index']);
    Route::post('pemohon/gp', [GantiPasswordController::class, 'update']);
    Route::get('pemohon/pengajuan', [PengajuanController::class, 'index']);
    Route::get('pemohon/pengajuan/create', [PengajuanController::class, 'create']);
    Route::post('pemohon/pengajuan/create', [PengajuanController::class, 'store']);
    Route::get('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
    Route::post('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'update']);
    Route::get('pemohon/pengajuan/delete/{id}', [PengajuanController::class, 'delete']);
    Route::get('pemohon/pengajuan/ajukan/{id}', [PengajuanController::class, 'ajukan']);
    Route::post('pemohon/pengajuan/bibit', [PengajuanController::class, 'storeBibit']);
    Route::get('pemohon/serahterima', [SerahTerimaController::class, 'pemohon_index']);
});
