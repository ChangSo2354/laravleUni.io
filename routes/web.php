<?php

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

