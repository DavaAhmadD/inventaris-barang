<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardOperatorController;
use App\Http\Controllers\DashboardPetugasController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataInventarisController;
use App\Http\Controllers\DataPemakaianController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\ProfileController;
use App\Models\DataPembelian;
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

Route::get('/', function () {
    return view('loginbaru');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('administrator',function(){
    return view('admin');
})->middleware(['auth', 'verified','role:administrator']);



//pindah page
Route::get('/dashboardbaru',[DashboardController::class, 'index'])->name('dashboardbaru');
Route::get('/dashboardoperator',[DashboardOperatorController::class, 'index'])->name('dashboardoperator');
Route::get('/dashboardpetugas',[DashboardPetugasController::class, 'index'])->name('dashboardpetugas');
Route::get('/datainventaris',[DataInventarisController::class, 'index'])->name('datainventaris');
Route::get('/databarang',[DataBarangController::class, 'index'])->name('databarang');
Route::get('/datapembelian',[DataPembelianController::class, 'index'])->name('datapembelian');
Route::get('/datapemakaian',[DataPemakaianController::class, 'index'])->name('datapemakaian');
//pindah ke form create
Route::get('/datainventaristambah', [DataInventarisController::class, 'create'])->name('datainventaristambah');
Route::get('/databarangtambah', [DataBarangController::class, 'create'])->name('databarangtambah');
Route::get('/datapembeliantambah', [DataPembelianController::class, 'create'])->name('datapembeliantambah');
Route::get('/datapemakaiantambah', [DataPemakaianController::class, 'create'])->name('datapemakaiantambah');
//pindah ke form edit
Route::get('/datainventarisedit/{id}', [DataInventarisController::class, 'show_inventaris'])->name('datainventarisedit');
Route::get('/databarangedit/{id}', [DataBarangController::class, 'show_barang'])->name('databarangedit');
Route::get('/datapembelianedit/{id}', [DataPembelianController::class, 'show_pembelian'])->name('datapembelianedit');
Route::get('/datapemakaianedit/{id}', [DataPemakaianController::class, 'show_pemakaian'])->name('datapemakaianedit');

//tambah data
Route::post('/store-inventaris', [DataInventarisController::class, 'store_inventaris'])->name('store-inventaris');
Route::post('/store-barang', [DataBarangController::class, 'store_barang'])->name('store-barang');
Route::post('/store-pembelian', [DataPembelianController::class, 'store_pembelian'])->name('store-pembelian');
Route::post('/store-pemakaian', [DataPemakaianController::class, 'store_pemakaian'])->name('store-pemakaian');

//update data
Route::put('/update-inventaris/{id}', [DataInventarisController::class, 'update'])->name('update-inventaris');
Route::put('/update-barang/{id}', [DataBarangController::class, 'update'])->name('update-barang');
Route::put('/update-pembelian/{id}', [DataPembelianController::class, 'update'])->name('update-pembelian');
Route::put('/update-pemakaian/{id}', [DataPemakaianController::class, 'update'])->name('update-pemakaian');

//hapus data
Route::delete('/datainventarishapus/{id}',[DataInventarisController::class, 'destroy'])->name('datainventarishapus');
Route::delete('/databaranghapus/{id}',[DataBarangController::class, 'destroy'])->name('databaranghapus');
Route::delete('/datapembelianhapus/{id}',[DataPembelianController::class, 'destroy'])->name('datapembelianhapus');
Route::delete('/datapemakaianhapus/{id}',[DataPemakaianController::class, 'destroy'])->name('datapemakaianhapus');

//tampilin table
Route::get('/inventaris', [DataInventarisController::class, 'inventaris'])->name('datainventaris');
Route::get('/barang', [DataBarangController::class, 'barang'])->name('databarang');
Route::get('/pembelian', [DataPembelianController::class, 'pembelian'])->name('datapembelian');
Route::get('/pemakaian', [DataPemakaianController::class, 'pemakaian'])->name('datapemakaian');

// Route::get('/databarang/exportdatabarangexcel', [Controller::class, 'export_excel'])->name('databarangexport');

Route::get('operator',function(){
    return view('operator');
})->middleware(['auth', 'verified','role:operator']);

Route::get('petugas',function(){
    return view('petugas');
})->middleware(['auth', 'verified','role:petugas']);

require __DIR__.'/auth.php';
