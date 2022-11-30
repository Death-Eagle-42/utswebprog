<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controllerbaru;
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

Route::get('/contact', [Controllerbaru::class,'contact']);
Route::get('/', [Controllerbaru::class,'home']);
Route::get('/publisher', [Controllerbaru::class,'publisher']);
Route::get('/bookdetail/{id}', [Controllerbaru::class,'bookdetail'])->name('book.detail');
Route::get('/category/{id}', [Controllerbaru::class,'list'])->name('category.list');
Route::get('/createbook', [Controllerbaru::class,'createbook']);
Route::get('/createcategory', [Controllerbaru::class,'createcategory']);
Route::get('/createpublisher', [Controllerbaru::class,'createpublisher']);
Route::get('/createbookcategory', [Controllerbaru::class,'createbookcategory']);
Route::post('/storescat', [Controllerbaru::class, 'storecat']);
Route::post('/storesbookcat', [Controllerbaru::class, 'storebookcat']);
Route::post('/storesbook', [Controllerbaru::class, 'storebook']);
Route::post('/storespub', [Controllerbaru::class, 'storepub']);
