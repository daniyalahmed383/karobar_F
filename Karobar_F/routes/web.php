<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
 *
 *  Used for Front End Pages...
 */
Route::get('/', function () {
    return view('front-end.home');
})->name('home');

Route::get('/features/', function () {
    return view('front-end.features');
})->name('features');

Route::get('/business-model/', function () {
    return view('front-end.businuss_model');
})->name('business-model');

Route::get('/pricing/', function () {
    return view('front-end.pricing');
})->name('pricing');

Route::get('/contact/', function () {
    return view('front-end.contact');
})->name('contact');


Route::get('/marketplace-sync/', function () {
    return view('front-end.marketplace_sync');
})->name('marketplace-sync');

Route::get('/marketplace-multistore-sync/', function () {
    return view('front-end.marketplace_multistore_sync');
})->name('marketplace-multistore-sync');

Route::get('/whatsapp-commerce/', function () {
    return view('front-end.whatsapp_commerce');
})->name('whatsapp-commerce');

Route::get('/training/', function () {
    return view('front-end.training');
})->name('training');

Route::get('/billings/', function () {
    return view('front-end.billings');
})->name('billings');

Route::get('/reseller/', function () {
    return view('front-end.reseller');
})->name('reseller');

Route::get('/marketplace-comparison/', function () {
    return view('front-end.marketplace_comparison');
})->name('marketplace-comparison');

Route::get('/social-commerce/', function () {
    return view('front-end.social_commerce');
})->name('social-commerce');


