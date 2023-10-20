<?php

use App\Models\Band;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/bandes', function () {
//     return view('bandes');
// });

Route::middleware('language')->prefix('/')->group(function() {
    Route::get('/', [ProductController::class, 'mostRecent'])->name('mostRecent');
    Route::get('/bandes', [BandController::class, 'bandes'])->name('bandes');
    Route::get('/haute-couture', [OrderController::class, 'order'])->name('order');
    Route::get('/a-propos', [ProductController::class, 'about'])->name('about');
    Route::get('/FaQs', [ProductController::class, 'FaQs'])->name('FaQs');
    Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
    Route::get('/mention-legales', [ProductController::class, 'legales'])->name('legales');
    Route::get('/cgv', [ProductController::class, 'cgv'])->name('cgv');
    Route::get('/boutique/homme', [ProductController::class, 'homme'])->name('homme');
    Route::get('/boutique/femme', [ProductController::class, 'femme'])->name('femme');

    Route::match(['get', 'post'], '/boutique/{name}', [ProductController::class, 'show'])->name('show');
    Route::match(['get', 'post'],'/haute-couture/save', [OrderController::class, 'saveOrder'])->name('saveOrder');
    Route::get('/change-language/{lang}', [ProductController::class, 'changeLang'])->name('changeLang');
    Route::match(['get', 'post'], '/boutique/add/{id}', [ProductController::class, 'StandardOrder'])->name('StandardOrder');
});

Auth::routes();


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'adminHome'])->name('adminHome');
    Route::match(['get', 'post'], '/produits', [AdminController::class, 'products'])->name('products');
    Route::match(['get', 'post'], '/produits/add', [AdminController::class, 'createPage'])->name('createPage');
    Route::match(['get', 'post'], '/produits/edit/{id}', [AdminController::class, 'editProduct'])->name('editProduct');

    Route::match(['get', 'post'], '/posts', [AdminController::class, 'posts'])->name('posts');
    Route::match(['get', 'post'], '/posts/add', [AdminController::class, 'createPosts'])->name('createPosts');

    Route::match(['get', 'post'], '/bandes', [AdminController::class, 'bands'])->name('bands');
    Route::match(['get', 'post'], '/bandes/add', [AdminController::class, 'createBands'])->name('createBands');

    Route::match(['get', 'post'], '/commandes', [AdminController::class, 'orders'])->name('orders');

    Route::match(['get', 'post'], '/produits/add/store', [ProductController::class, 'storeProduct'])->name('storeProduct');
    Route::match(['get', 'post'], '/produits/update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::match(['get', 'post'], '/bands/add/store', [BandController::class, 'storeBand'])->name('storeBand');
    Route::match(['get', 'post'], '/posts/add/store', [PostController::class, 'storePost'])->name('storePost');
    Route::delete('/produits/delete/{id}', [AdminController::class, 'destroyProduct'])->name('destroyProduct');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
