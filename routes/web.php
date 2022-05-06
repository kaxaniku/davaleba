<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\AboutPageController;

use App\Http\Controllers\Frontend\HomePageController;

use App\Http\Controllers\Frontend\ContactPageController;

use App\Http\Controllers\Backend\HomeController;

use App\Http\Controllers\Backend\BackendAboutController;

use App\Http\Controllers\Backend\BackendContactController;

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

Route::get('/about/{id}', [AboutPageController::class, 'view'])->name('about-inner');

Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Auth::routes();

Route::prefix('Backend')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('Backend.home');

    Route::get('/about', [BackendAboutController::class, 'index'])->name('Backend.about');

    Route::get('/contact', [BackendContactController::class, 'index'])->name('Backend.contact');
});