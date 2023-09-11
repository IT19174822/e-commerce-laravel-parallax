<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/','ProductController@index');
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);


Route::get('/home', function () {
    return view('home');
});
Route::controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/add-product','create')->name('create');
    Route::post('/add-product','store')->name('store');
    Route::get('/edit-product/{product}','edit')->name('edit-product');

});
Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'index')->name('index');
    Route::get('/add-category','create')->name('createCategory');
    Route::post('/add-category','store')->name('store');

});