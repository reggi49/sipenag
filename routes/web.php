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
Route::get('admin/calonpengawas/create', [App\Http\Controllers\CalonPengawasController::class, 'create'])->name('calonpengawas.create');
Route::post('admin/calonpengawas', [App\Http\Controllers\CalonPengawasController::class, 'store'])->name('calonpengawas.store');
Route::get('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'show'])->name('calonpengawas.show');
Route::get('admin/calonpengawas/{calonpengawas}/edit', [App\Http\Controllers\CalonPengawasController::class, 'edit'])->name('calonpengawas.edit');
Route::put('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'update'])->name('calonpengawas.update');
Route::delete('admin/calonpengawas/{calonpengawas}', [App\Http\Controllers\CalonPengawasController::class, 'destroy'])->name('calonpengawas.destroy');
