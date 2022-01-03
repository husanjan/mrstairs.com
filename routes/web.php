<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HelpController;
use App\Http\Controllers\Frontend\HomeController;
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
    Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
    Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact.index');
    Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('frontend.contact.send');
    Route::get('/help-resources', [HelpController::class, 'index'])->name('frontend.help.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
});

Route::get('/markup', [HomeController::class, 'markup'])->name('frontend.markup');
