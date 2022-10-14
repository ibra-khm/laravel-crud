<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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

Route::get('/', [BooksController::class, 'index' ]);

Route::post('/store',[BooksController::class, 'store']);

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit', function () {
    return view('edit');
})->name('edit');