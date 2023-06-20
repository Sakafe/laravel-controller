<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PageController::class)->group(function (){
    Route::get('/','showHome')->name('Home');
    Route::get('/blog','showBlog')->name('Blog');
    // Route::get('/user/{id}',[PageController::class,'showUser'])-name('User');
    Route::get('/user/{id}','showUser');
});

Route::get('/test', TestingController::class);
