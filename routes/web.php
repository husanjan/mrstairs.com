<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HelpController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AddressController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\GalleryController;

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
    // Home
    Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

    // Contact form
    Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact.index');
    Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('frontend.contact.send');

    // Help & Resources pages
    Route::get('/help-resources', [HelpController::class, 'index'])->name('frontend.help.index');
    Route::get('/faq', [HelpController::class, 'faq'])->name('frontend.help.faq');
    Route::get('/delivery-information', [HelpController::class, 'deliveryInformation'])
        ->name('frontend.help.deliveryInformation');

    Route::get('/how-will-my-stairs-arrive', [HelpController::class, 'stairsArrival'])
        ->name('frontend.help.stairsArrival');

    Route::get('/rules-regulations', [HelpController::class, 'rulesRegulations'])
        ->name('frontend.help.rulesRegulations');

    Route::get('/measuring-your-stairs', [HelpController::class, 'measuringYourStairs'])
        ->name('frontend.help.measuringYourStairs');

    Route::get('/staircase-terminology', [HelpController::class, 'staircaseTerminology'])
        ->name('frontend.help.staircaseTerminology');

    Route::get('/fitting-guide', [HelpController::class, 'fittingGuide'])
        ->name('frontend.help.fittingGuide');

    Route::get('/privacy-policy', [HelpController::class, 'privacyPolicy'])
        ->name('frontend.help.privacyPolicy');

    // Gallery page
    Route::get('/gallery', [GalleryController::class, 'index'])->name('frontend.gallery');

    // My account page
    Route::get('/profile/edit', [ProfileController::class, 'show'])->name('frontend.profile.show');
    Route::put('/profile/edit', [ProfileController::class, 'edit'])->name('frontend.profile.edit');

    Route::get('/address', [AddressController::class, 'index'])->name('frontend.address.index');
    Route::get('/address/edit/{type?}', [AddressController::class, 'show'])->name('frontend.address.show');
    Route::post('/address/edit', [AddressController::class, 'edit'])->name('frontend.address.edit');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
});
