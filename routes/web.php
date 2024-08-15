<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SellerCenterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserRegisteredController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/register', [UserRegisteredController::class, 'create']);
Route::post('/register', [UserRegisteredController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/admin',function (){
    return view('admin.book');
});
Route::view('/admin/book','admin.book');
Route::get('/search', SearchController::class);

Route::view('/rent', 'rent.index');
Route::view('/dcs','rent.dcs');
Route::view('/dec','rent.dec');
Route::view('/dcd','rent.dcd');
Route::view('/dia','rent.dia');

Route::view('/dcs/rent', 'rent.form');

Route::view('/cart','cart.index');

Route::view('/buy','buy.index');
Route::view('/buy/product','buy.form');
Route::view('/product','buy.product');
Route::view('/product/create','buy.sell-form');

Route::get('/seller_center', [SellerCenterController::class, 'redirectToSellerCenter'])->middleware('auth');
Route::get('/bank', [SellerCenterController::class, 'showBankInfoForm']);
Route::post('/bank', [SellerCenterController::class, 'Update']);
Route::get('/seller', [SellerCenterController::class, 'showSellerCenterPage']);

Route::view('/admin/rent','admin.rent');
Route::view('/admin/product', 'admin.product');
Route::view('/admin/payment', 'admin.payment');
Route::view('/admin/user', 'admin.user');
Route::view('/admin/ads', 'admin.ads');

Route::view('/seller/product', 'seller.product');
Route::view('/seller/order', 'seller.order');
Route::view('/seller/ads', 'seller.ads');
Route::view('/order', 'order.index');
Route::view('/order/index', 'order.index');
Route::view('/order/product', 'order.product');

