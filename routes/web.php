<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Lit\Config\Form\Pages\ProjectConfig;

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
Route::view('duma-lisplank', 'duma-lisplank')
     ->name('product.duma_lisplank');
Route::view('duma-door', 'duma-door')
     ->name('product.duma_door');
Route::view('duma-deck', 'duma-deck')
     ->name('product.duma_deck');
Route::view('daftar-harga-dan-dokumen-lain', 'daftar-harga-dan-dokumen-lain')
     ->name('pricelist');
Route::view('berita-dan-acara', 'berita-dan-acara')
     ->name('posts.index');
Route::get('distributor', function () {
    $data = [
        'cms' => \Lit\Config\Form\Pages\DistributorConfig::load(),
    ];

    return view('distributor', $data);
})->name('distributor');
Route::view('faq', 'faq')
     ->name('faq');
Route::view('hubungi-kami', 'hubungi-kami')
     ->name('contact.index');
Route::view('kalkulator-biaya-duma', 'kalkulator')
     ->name('calculator.index');
Route::get('contoh-proyek', function () {
    $cms = ProjectConfig::load();

    $data = [
        'cms'      => $cms,
        'projects' => Project::active()
                             ->ordered()
                             ->whereIn(
                                 'project_category_id',
                                 optional(optional($cms)->project_categories)->plucK('id') ?? []
                             )
                             ->get(),
    ];

    return view('proyek', $data);
})->name('projects.index');
