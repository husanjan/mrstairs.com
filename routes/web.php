<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
    Route::get('/contact', [ContactController::class, 'index'])->name('frontend.email.index');
    Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('frontend.email.send');
    Route::get('/gallery/{id?}', [GalleryController::class, 'index'])->name('frontend.gallery');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
});

Route::get('/markup', [\App\Http\Controllers\Frontend\HomeController::class, 'markup'])->name('frontend.markup');
