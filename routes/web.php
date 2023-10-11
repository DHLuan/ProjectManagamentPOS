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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/orders', 'OrderController');
Route::resource('/products', 'ProductController');
Route::resource('/users', 'UserController');
Route::resource('/suppliers', 'SupplierController');
Route::resource('/companies', 'CompanyController');
Route::resource('/transactions', 'TransactionController');
