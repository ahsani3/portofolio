<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/admin', function () {
    return view('admin/home', [
        "title" => "Dashboard"
    ]);
});

Route::get('/admin/blog', function () {
    return view('admin/blog', [
        "title" => "Blog"
    ]);
});
