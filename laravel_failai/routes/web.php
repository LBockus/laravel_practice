<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
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

Route::get('/category/{id}', function ($id) {
    return Category::firstOrCreate(
        [
            'id' => $id
        ],
        [
            'name' => 'Kompiuterija',
            'slug' => 'kompiuterija',
            'description' => 'Viskas apie kompiuterius',
            'image' => 'kompiuterija.jpg',
            'status' => 1
        ]
    );
});

Route::get('/products', function() {
    return User::all();
});
