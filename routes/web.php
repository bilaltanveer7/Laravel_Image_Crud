<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'index']);
Route::get('/add product', [ProductController::class, 'create']);
Route::post('/add product', [ProductController::class, 'store']);
Route::get('/list', [ProductController::class, 'show']);
Route::get('edit/{id}', [ProductController::class, 'showdata']);
Route::post('/edit', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
Route::post('/delete', [ProductController::class, 'delete']);