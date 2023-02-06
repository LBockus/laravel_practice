<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::resources([
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'orders' => OrderController::class,
    'statuses' => StatusController::class,
    'addresses' => AddressController::class,
    'users' => UserController::class,
]);
