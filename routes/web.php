<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnquiryController;

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

Route::get('/', [SiteController::class, 'homepage'])
    ->name('homepage');

Route::post('/contact-send', [EnquiryController::class, 'store'])
    ->name('contact.send');

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/home', [AdminController::class, 'home'])
            ->name('admin.home');

        Route::resources([
            'enquiries' => EnquiryController::class,
        ]);
    });
