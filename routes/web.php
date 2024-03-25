<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/index',[ProductController::class,'index']);

Route::get('/create',[ProductController::class,'create']);

Route::post('/products', [ProductController::class, 'store']);
Route::delete('/delete/{product}', [ProductController::class, 'destroy']);

Route::get('/edit/{product}',[ProductController::class,'edit']);

Route::put('/update/{product}',[ProductController::class,'update']);

Route::resource('/api', 'ProductController');


