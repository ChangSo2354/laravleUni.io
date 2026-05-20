<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layout');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/showproduct', function () {
    return view('showproduct');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::post('/addproduct',[ProductController::class,'create'])->name('addproduct');
Route::get('/showproduct',[ProductController::class,'show'])->name('showproduct');

Route::post('/customer',[CustomerController::class,'store'])->name('addcustomer');
Route::get('/customer',[CustomerController::class,'show'])->name('showcustomer');

Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('updatecustomer');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('deletecustomer');