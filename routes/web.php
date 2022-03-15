<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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


Route::get('/post/about', [PostController::class,'about'])->name('about');

Route::get('/post/contactUs', [PostController::class,'contactus'])->name('contactus');

// Book k routes

Route::get('/post',[Postcontroller::class,'index'])->name('post.index');

Route::get('/post/create', [Postcontroller::class, 'create'])->name('post.create');

Route::post('/post/store', [Postcontroller::class, 'store'])->name('post.store');

Route::get('/post/edit/{id}', [Postcontroller::class, 'edit'])->name('post.edit');

Route::get('/post/destroy/{id}', [Postcontroller::class, 'destroy'])->name('post.destroy');

Route::post('/post/update', [Postcontroller::class, 'update'])->name('post.update');


// costomers k routes

Route::get('/post/customers', [Postcontroller::class, 'customers'])->name('cust.customers');

Route::get('/post/create_c', [Postcontroller::class, 'create_c'])->name('cust.create_c');

Route::post('/post/store_c', [Postcontroller::class, 'store_c'])->name('cust.store_c');

Route::get('/post/edit_c/{id}', [Postcontroller::class, 'edit_c'])->name('cust.edit_c');

Route::post('/post/update_c', [Postcontroller::class, 'update_c'])->name('cust.update_c');

Route::get('/post/destroy_c/{id}', [Postcontroller::class, 'destroy_c'])->name('cust.destroy_c');


// thesis k routes


Route::get('/post/thesis', [Postcontroller::class, 'thesis'])->name('R.thesis');

Route::get('/post/create_t', [Postcontroller::class, 'create_t'])->name('R.create_t');

Route::post('/post/store_', [Postcontroller::class, 'store_t'])->name('R.store_t');

Route::get('/post/edit_t/{id}', [Postcontroller::class, 'edit_t'])->name('R.edit_t');

Route::post('/post/update_t', [Postcontroller::class, 'update_t'])->name('R.update_t');

Route::get('/post/destroy_t/{id}', [Postcontroller::class, 'destroy_t'])->name('R.destroy_t');

// booking routes

Route::get('/post/booking', [Postcontroller::class, 'booking'])->name('b.booking');

Route::get('/post/create_b', [Postcontroller::class, 'create_b'])->name('b.create_b');

Route::post('/post/store_b', [Postcontroller::class, 'store_b'])->name('b.store_b');

Route::get('/post/destroy_b/{id}', [Postcontroller::class, 'destroy_b'])->name('b.destroy_b');

Route::post('/post/update_b', [Postcontroller::class, 'update_b'])->name('b.update_b');

Route::get('/post/return/{id}', [Postcontroller::class, 'return'])->name('return');

 // ye specific Id k lye        (ye postcontroller mn function se cheezay lene k lye)      or last wala route k name k lye
