<?php

use App\Models\Distributor;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lit\Config\Form\Pages\DistributorsConfig;
use Lit\Config\Form\Pages\PostsConfig;
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
Route::get('duma-door', function () {
    $cms = \Lit\Config\Form\Pages\ProductDoorConfig::load();

    return view('duma-door', compact('cms'));
})
     ->name('product.duma_door');
Route::view('duma-deck', 'duma-deck')
     ->name('product.duma_deck');
Route::view('daftar-harga-dan-dokumen-lain', 'daftar-harga-dan-dokumen-lain')
     ->name('pricelist');
Route::get('berita-dan-acara', function () {
    $data = [
        'cms'   => PostsConfig::load(),
        'posts' => Post::active()->published()->get(),
    ];

    return view('berita-dan-acara', $data);
})->name('posts.index');
Route::get('distributor', function () {
    $data = [
        'cms' => DistributorsConfig::load(),
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
Route::view('tentang-duma', 'about')->name('about');

Route::get('{slug}', function (Request $request) {
    $post = Post::whereSlug($request->slug)->active()->published()->first();

    abort_if(! $post, 404);

    $data = [
        'post' => $post,
    ];

    return view('blog-detail', $data);
})->name('posts.show');
