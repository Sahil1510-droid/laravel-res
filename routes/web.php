<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('user', [ResController::class, 'view2']);

    Route::get('super', [ResController::class, 'supershow']);

    Route::get('view/{id}', [ResController::class, 'view']);

    Route::get('view_food/{id}', [ResController::class, 'view3']);

    Route::get('admin', [ResController::class, 'admin']);

    Route::get('delete/{id}', [ResController::class, 'delete']);

    Route::get('delete/{id}', [AuthController::class, 'delete2']);

    Route::get('edit/{id}', [ResController::class, 'edit']);

    Route::post('update_data/{id}', [ResController::class, 'update_data']);

    Route::get('add', [ResController::class, 'create']);

    Route::get('add_food', [ResController::class, 'food']);

    Route::post('store_data', [ResController::class, 'store_data']);

    Route::post('store_food', [ResController::class, 'store_food']);

    Route::get('add_admin', [AddAdminController::class, 'create']);

    Route::post('store_data2', [AddAdminController::class, 'store_data2']);

    Route::get('all_admin', [AddAdminController::class, 'show']);

    Route::get('all_user', [AddAdminController::class, 'show2']);


    Route::get('order/{id}', [OrderController::class, 'order']);

    // Mail Route
    Route::post('send_mail', [OrderController::class, 'send_mail']);

    Route::get('all_orders', [OrderController::class, 'show']);

    Route::get('view_all_orders', [OrderController::class, 'show2']);

    Route::get('delete/{id}', [OrderController::class, 'delete3']);

    // Route::post('start/{id}', [OrderController::class, 'start']);

    Route::post('store_time', [OrderController::class, 'store_time']);

    // Coupon
    Route::get('coupon', [CouponController::class, 'index']);

    Route::post('store_coupon', [CouponController::class, 'store']);

    Route::get('all_coupons', [CouponController::class, 'coupon']);

    Route::post('apply_coupon_code', [CouponController::class, 'apply_coupon_code']);
});

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return view('not_found');
});


Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
