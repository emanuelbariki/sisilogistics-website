<?php

use App\Http\Controllers\EstimatedPriceController;
use App\Http\Controllers\NewsletterSubscribersController;
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

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/newsletter',[NewsletterSubscribersController::class,'newsletterForm']);

Route::post('/getEstimatedPrice', [EstimatedPriceController::class,'store']);


Route::post('/newsletter', [NewsletterSubscribersController::class,'storeEmails'])->name('email.store');

