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

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});

Route::get('/blog-single', function () {
    return view('blog-single', [
        "title" => "Blog"
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        "title" => "Portfolio"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
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
