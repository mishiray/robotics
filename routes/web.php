<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
    return view('welcome');
});

Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/aboutus', [WebController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contactus', [WebController::class, 'contactUs'])->name('contactUs');

//Route::get('/our-blog', 'WebController@blogsView')->name('our_blog');

Route::post('/contact-process', [ContactController:: class, 'store'])->name('contact.store');
