<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController; // Tambahkan import OrderController
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\MemesanController;

route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/buatpesan', function () {
    return view('buatpesan');
})->middleware(['auth', 'verified'])->name('buatpesan');


Route::get('/daftarpesan', [OrderController::class, 'index'])->name('daftarpesan');


Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');


Route::get('/kontakadmin', function () {
    return view('kontakadmin');
})->middleware(['auth', 'verified'])->name('kontakadmin');

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin']);
route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);

route::get('testimoni', function () {
    return view('home.testimoni');
});

Route::post('/order/{id}/upload-payment-proof', [OrderController::class, 'uploadPaymentProof'])->name('upload.payment.proof');
route::get('admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'admin']);

Route::resource('orders', OrderController::class);
Route::get('/caramengukur', [MeasurementController::class, 'index'])->name('caramengukur');
Route::get('/caramemesan', [MemesanController::class, 'index'])->name('caramemesan');
