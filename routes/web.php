<?php

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

Route::view('/', 'index')
     ->name('home');
Route::get('mengapa-duma', 'mengapa-duma')
     ->name('why_duma');
Route::get('duma-panel', 'duma-panel')
     ->name('product.duma_panel');
Route::get('daftar-harga-dan-dokumen-lain', 'daftar-harga-dan-dokumen-lain')
     ->name('pricelist');
Route::get('berita-dan-acara', 'berita-dan-acara')
     ->name('posts.index');
Route::get('distributor', 'distributor')
     ->name('distributor');
Route::get('tentang-duma', '');
