<?php

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

Route::get('/uber', function () {
    return view('pages.uber');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/test', function () {
    return view('pages.test');
});

