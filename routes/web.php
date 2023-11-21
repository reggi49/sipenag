<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

Route::get('admin/calonpengawas', [App\Http\Controllers\CalonPengawasController::class, 'index'])->name('calonpengawas.index');
Route::get('admin/calonpengawas/hasil', [App\Http\Controllers\CalonPengawasController::class, 'hasil'])->name('calonpengawas.hasil');
Route::get('admin/calonpengawas/hasil/cari', [App\Http\Controllers\CalonPengawasController::class, 'cekhasil'])->name('calonpengawas.cekhasil');
Route::get('admin/calonpengawas/create', [App\Http\Controllers\CalonPengawasController::class, 'create'])->name('calonpengawas.create');
Route::post('admin/calonpengawas', [App\Http\Controllers\CalonPengawasController::class, 'store'])->name('calonpengawas.store');
Route::get('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'show'])->name('calonpengawas.show');
Route::get('admin/calonpengawas/{calonpengawas}/edit', [App\Http\Controllers\CalonPengawasController::class, 'edit'])->name('calonpengawas.edit');
Route::put('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'update'])->name('calonpengawas.update');
Route::delete('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'destroy'])->name('calonpengawas.destroy');

Route::get('admin/adminkota', [App\Http\Controllers\AdminkotaController::class, 'index'])->name('adminkota.index');
Route::get('admin/adminkota/verifikasi', [App\Http\Controllers\AdminkotaController::class, 'verifikasi'])->name('adminkota.verifikasi');
Route::get('admin/adminkota/{adminkota}/editverif', [App\Http\Controllers\AdminkotaController::class, 'editverif'])->name('adminkota.editverif');
Route::put('admin/adminkota/updateverif/{adminkota}', [App\Http\Controllers\AdminkotaController::class, 'updateverif'])->name('adminkota.updateverif');
Route::get('admin/adminkota/create', [App\Http\Controllers\AdminkotaController::class, 'create'])->name('adminkota.create');
Route::post('admin/adminkota', [App\Http\Controllers\AdminkotaController::class, 'store'])->name('adminkota.store');
Route::get('admin/adminkota/{adminkota}', [App\Http\Controllers\AdminkotaController::class, 'show'])->name('adminkota.show');
Route::get('admin/adminkota/{adminkota}/edit', [App\Http\Controllers\AdminkotaController::class, 'edit'])->name('adminkota.edit');
Route::put('admin/adminkota/{adminkota}', [App\Http\Controllers\AdminkotaController::class, 'update'])->name('adminkota.update');
Route::delete('admin/adminkota/{adminkota}', [App\Http\Controllers\AdminkotaController::class, 'destroy'])->name('adminkota.destroy');

Route::get('admin/adminprov', [App\Http\Controllers\AdminProvController::class, 'index'])->name('adminprov.index');
Route::get('admin/adminprov/create', [App\Http\Controllers\AdminProvController::class, 'create'])->name('adminprov.create');
Route::post('admin/adminprov', [App\Http\Controllers\AdminProvController::class, 'store'])->name('adminprov.store');
Route::get('admin/adminprov/{adminprov}', [App\Http\Controllers\AdminProvController::class, 'show'])->name('adminprov.show');
Route::get('admin/adminprov/{adminprov}/edit', [App\Http\Controllers\AdminProvController::class, 'edit'])->name('adminprov.edit');
Route::put('admin/adminprov/{adminprov}', [App\Http\Controllers\AdminProvController::class, 'update'])->name('adminprov.update');
Route::delete('admin/adminprov/{adminprov}', [App\Http\Controllers\AdminProvController::class, 'destroy'])->name('adminprov.destroy');

Route::get('admin/adminpusat', [App\Http\Controllers\AdminPusatController::class, 'index'])->name('adminpusat.index');
Route::get('admin/adminpusat/create', [App\Http\Controllers\AdminPusatController::class, 'create'])->name('adminpusat.create');
Route::post('admin/adminpusat', [App\Http\Controllers\AdminPusatController::class, 'store'])->name('adminpusat.store');
Route::get('admin/adminpusat/{adminpusat}', [App\Http\Controllers\AdminPusatController::class, 'show'])->name('adminpusat.show');
Route::get('admin/adminpusat/{adminpusat}/edit', [App\Http\Controllers\AdminPusatController::class, 'edit'])->name('adminpusat.edit');
Route::put('admin/adminpusat/{adminpusat}', [App\Http\Controllers\AdminPusatController::class, 'update'])->name('adminpusat.update');
Route::delete('admin/adminpusat/{adminpusat}', [App\Http\Controllers\AdminPusatController::class, 'destroy'])->name('adminpusat.destroy');

Route::get('admin/datasimpeg', [App\Http\Controllers\DataSimpegController::class, 'index'])->name('datasimpeg.index');
