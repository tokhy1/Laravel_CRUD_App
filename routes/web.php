<?php

use App\Http\Controllers\ProductController;
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

Route::get('/products', [ProductController::class, 'index']);

Route::get('/add-product-form', [ProductController::class, 'create']);
Route::post('/add-product', [ProductController::class, 'insert']);

Route::get('/delete-product/{id}', [ProductController::class, 'delete']);

Route::get('update-product/{id}', [ProductController::class, 'showUpdate']);
Route::put('update-product/{id}', [ProductController::class, 'update']);
