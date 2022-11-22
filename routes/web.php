<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
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
Route::redirect('/', '/Home');
Route::get('/Home',[BookController::class, 'index']);
Route::get('/Book/{id}',[BookController::class, 'detail']);
Route::get('/Category/{id}',[CategoryController::class, 'index']);
Route::get('/Publisher',[PublisherController::class, 'index']);
Route::get('/Publisher/{id}',[PublisherController::class, 'detail']);
Route::get('/Contact', function () {
    return view('contact.contact');
});
