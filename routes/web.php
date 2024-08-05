<?php


use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserRegisteredController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/register', [UserRegisteredController::class, 'create']);
Route::post('/register', [UserRegisteredController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/admin',function (){
    return view('admin.admin-layout');
});

Route::get('/search', SearchController::class);

Route::view('/rent', 'rent.index');
Route::view('/dcs','rent.dcs');
Route::view('/dec','rent.dec');
Route::view('/dcd','rent.dcd');
Route::view('/dia','rent.dia');

Route::view('/dcs/rent', 'rent.form');

Route::view('/cart','cart.index');

Route::view('/buy','buy.index');
Route::view('/buy/product','rent.form');
Route::view('/product','buy.product');


