<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\AboutPageController;

use App\Http\Controllers\Frontend\HomePageController;

use App\Http\Controllers\Frontend\ContactPageController;

use App\Http\Controllers\Frontend\PostController;

use App\Http\Controllers\Backend\HomeController;

use App\Http\Controllers\Backend\PostsController;

use App\Http\Controllers\Backend\AboutController;

use App\Http\Controllers\Backend\ContactController;

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

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/about', [AboutPageController::class, 'index'])->name('about');

Route::get('/post/{slug}/{id}', [PostController::class, 'view'])->name('post.view');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');

Route::post('/contact/send', [ContactPageController::class, 'send'])->name('mail.send');

Auth::routes();

Route::get('/Backend', [HomeController::class, 'index'])->name('Backend.home')->middleware('auth');

Route::prefix('Backend')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('Backend.home');

        Route::get('/about', [AboutController::class, 'index'])->name('Backend.about');
        Route::post('/about', [AboutController::class, 'update'])->name('Backend.about.update');

        Route::get('/contact', [ContactController::class, 'index'])->name('Backend.contact');
        Route::post('/contact', [ContactController::class, 'update'])->name('Backend.contact.update');

        Route::get('/posts', [PostsController::class, 'index'])->name('Backend.posts');
        Route::get('/post/create', [PostsController::class, 'create'])->name('Backend.posts.create');
        Route::post('/post/insert', [PostsController::class, 'store'])->name('Backend.posts.store');
        Route::get('/post/edit/{id}', [PostsController::class, 'edit'])->name('Backend.posts.edit');
        Route::post('/post/update', [PostsController::class, 'update'])->name('Backend.posts.update');
        Route::get('/post/delete/{id}', [PostsController::class, 'destroy'])->name('Backend.posts.destroy');
    });
});