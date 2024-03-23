<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[PostController::class,'index']);


Route::resource('posts',PostController::class);

Route::resource('articles',ArticleController::class);