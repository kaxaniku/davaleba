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

use App\Http\Controllers\Backend\CategoriesController;

use App\Http\Controllers\Backend\TagsController;

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

Route::post('/post/comment', [PostController::class, 'comment'])->name('posts.comment');

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

        Route::get('/categories', [CategoriesController::class, 'index'])->name('Backend.categories');
        Route::get('/category/create', [CategoriesController::class, 'create'])->name('Backend.categories.create');
        Route::post('/category/store', [CategoriesController::class, 'store'])->name('Backend.categories.store');
        Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('Backend.categories.edit');
        Route::post('/category/update', [CategoriesController::class, 'update'])->name('Backend.categories.update');
        Route::get('/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('Backend.categories.destroy');

        Route::get('/posts', [PostsController::class, 'index'])->name('Backend.posts');
        Route::get('/post/create', [PostsController::class, 'create'])->name('Backend.posts.create');
        Route::post('/post/insert', [PostsController::class, 'store'])->name('Backend.posts.store');
        Route::get('/post/edit/{id}', [PostsController::class, 'edit'])->name('Backend.posts.edit');
        Route::post('/post/update', [PostsController::class, 'update'])->name('Backend.posts.update');
        Route::get('/post/delete/{id}', [PostsController::class, 'destroy'])->name('Backend.posts.destroy');

        Route::get('/tags', [TagsController::class, 'index'])->name('Backend.tags');
        Route::get('/tag/create', [TagsController::class, 'create'])->name('Backend.tags.create');
        Route::post('/tag/store', [TagsController::class, 'store'])->name('Backend.tags.store');
        Route::get('/tag/edit/{id}', [TagsController::class, 'edit'])->name('Backend.tags.edit');
        Route::post('/tag/update', [TagsController::class, 'update'])->name('Backend.tags.update');
        Route::get('/tag/delete/{id}', [TagsController::class, 'destroy'])->name('Backend.tags.destroy');
    });
});