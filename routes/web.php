<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\SiparisController;

use App\Http\Controllers\UrunController;
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



Route::prefix('nedmin')->group(function (){

    Route::get('',[DefaultController::class,'index'])->name('nedmin.index');
    Route::get('exports',[ExportController::class,'index'])->name('export.index');

    Route::prefix('urun')->group(function () {
        Route::get('/', [UrunController::class, 'index'])->name('products.index');
        Route::get('ekle', [UrunController::class, 'create'])->name('urun.Ekle');
        Route::post('ekle', [UrunController::class, 'store'])->name('urun.Store');
        Route::get('edit/{id}', [UrunController::class, 'edit'])->name('urun.Edit');
        Route::post('update/{id}', [UrunController::class, 'update'])->name('urun.Update');
        Route::get('sil/{id}', [UrunController::class, 'destroy'])->name('urun.Destroy');

    });

    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('add', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('add', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('update/{id}', [CustomerController::class, 'update'])->name('customer.update');
        Route::get('destroy/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
        Route::post('export-customer', [CustomerController::class, 'exportCustomer'])->name('export-customer');
    });



    Route::get('siparisler',[SiparisController::class,'index'])->name('siparis.Index');
    Route::get('siparis-ekle',[SiparisController::class,'create'])->name('siparis.Ekle');
    Route::post('siparis-ekle',[SiparisController::class,'store'])->name('siparis.Store');
    Route::get('siparis-edit/{id}',[SiparisController::class,'edit'])->name('siparis.Edit');
    Route::put('siparis-update/{id}',[SiparisController::class,'update'])->name('siparis.Update');
    Route::get('siparis-sil/{id}', [SiparisController::class, 'destroy'])->name('siparis.Destroy');





});





