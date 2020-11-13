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
Route::view('mengapa-duma', 'mengapa-duma')
     ->name('why_duma');
Route::view('duma-panel', 'duma-panel')
     ->name('product.duma_panel');
Route::view('daftar-harga-dan-dokumen-lain', 'daftar-harga-dan-dokumen-lain')
     ->name('pricelist');
Route::view('berita-dan-acara', 'berita-dan-acara')
     ->name('posts.index');
Route::view('distributor', 'distributor')
     ->name('distributor');
Route::view('faq', 'faq')
     ->name('faq');
Route::view('hubungi-kami', 'hubungi-kami')
     ->name('contact.index');
Route::view('kalkulator-biaya-duma', 'kalkulator')
     ->name('calculator.index');
Route::view('contoh-proyek', 'proyek')
     ->name('projects.index');
