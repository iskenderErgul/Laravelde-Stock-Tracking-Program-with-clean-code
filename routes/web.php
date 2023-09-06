<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\RaporController;
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

    Route::get('',[DefaultController::class,'index'])->name('nedmin.Index');
    Route::get('raporlama',[RaporController::class,'index'])->name('raporla.Index');

    Route::prefix('urun')->group(function () {
        Route::get('/', [UrunController::class, 'index'])->name('urun.Index');
        Route::get('ekle', [UrunController::class, 'create'])->name('urun.Ekle');
        Route::post('ekle', [UrunController::class, 'store'])->name('urun.Store');
        Route::get('edit/{id}', [UrunController::class, 'edit'])->name('urun.Edit');
        Route::post('update/{id}', [UrunController::class, 'update'])->name('urun.Update');
        Route::get('sil/{id}', [UrunController::class, 'destroy'])->name('urun.Destroy');
        Route::post('/rapor-olustur', [RaporController::class, 'exportUrun'])->name('urun-rapor-olustur');
    });


    Route::prefix('musteri')->group(function () {
        Route::get('/', [MusteriController::class, 'index'])->name('musteri.Index');
        Route::get('ekle', [MusteriController::class, 'create'])->name('musteri.Ekle');
        Route::post('ekle', [MusteriController::class, 'store'])->name('musteri.Store');
        Route::get('edit/{id}', [MusteriController::class, 'edit'])->name('musteri.Edit');
        Route::put('update/{id}', [MusteriController::class, 'update'])->name('musteri.Update');
        Route::get('sil/{id}', [MusteriController::class, 'destroy'])->name('musteri.Destroy');
        Route::post('/rapor-olustur', [RaporController::class, 'exportMusteri'])->name('musteri-rapor-olustur');
    });



    Route::get('siparisler',[SiparisController::class,'index'])->name('siparis.Index');
    Route::get('siparis-ekle',[SiparisController::class,'create'])->name('siparis.Ekle');
    Route::post('siparis-ekle',[SiparisController::class,'store'])->name('siparis.Store');
    Route::get('siparis-edit/{id}',[SiparisController::class,'edit'])->name('siparis.Edit');
    Route::put('siparis-update/{id}',[SiparisController::class,'update'])->name('siparis.Update');
    Route::get('siparis-sil/{id}', [SiparisController::class, 'destroy'])->name('siparis.Destroy');
    Route::post('siparis-rapor-olustur', [RaporController::class, 'exportSiparis'])->name('siparis-rapor-olustur');




});





