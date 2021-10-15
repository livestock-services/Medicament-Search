<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::prefix('products')->namespace('App\Http\Controllers')->group(function () {
    Route::get('createProduct', 'ProductManagementController@create')->name('product.create');
    Route::post('storeProduct', 'ProductManagementController@store')->name('product.store');
    Route::resource('productManagement','ProductManagementController');
});

Route::prefix('categories')->namespace('App\Http\Controllers')->group(function () {
    Route::get('createCategory', 'CategoryManagementController@create')->name('category.create');
    Route::post('storeCategory', 'CategoryManagementController@store')->name('category.store');
    Route::post('showCategory', 'CategoryManagementController@showCategory')->name('category.show');
    //Route::resource('categoryManagement','CategoryManagementController');
});


use App\Http\Controllers\CategoryManagementController;

use App\Http\Controllers\ProductManagementController;

Route::resource('categoryManagement',CategoryManagementController::class);

Route::resources([
    'categories' => CategoryManagementController::class,
    'products' => ProductManagementController::class,
]);


