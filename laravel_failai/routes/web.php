<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', HomeController::class);

Route::get('/product/{product:slug}', [ProductsController::class, 'show'])->name('product.show');

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', DashBoardController::class)->name('admin.dashboard');
    Route::resources([
        'products' => ProductController::class,
        'categories' => CategoryController::class,
        'orders' => OrderController::class,
        'statuses' => StatusController::class,
        'addresses' => AddressController::class,
        'users' => UserController::class,
        'persons' => PersonController::class,
        'paymentTypes' => PaymentController::class,
    ]);
});



