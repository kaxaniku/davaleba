<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutPageController;

use App\Http\Controllers\HomePageController;

use App\Http\Controllers\ContactPageController;

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