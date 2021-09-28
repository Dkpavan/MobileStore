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
    return view('welcome');
});


//login
Route::get('/login', function () {
    return view('admin.login');
});

//index
Route::get('/index', function () {
    return view('admin.index');
});


Route::get('/product', function () {
    return view('admin.product.grid');
});

Route::get('/category', function () {
    return view('admin.category.grid');
});

//admin
// Route::prefix('admin')->group(function ()
// {

// });

Route::get('/table', function () {
    return view('table');
});
