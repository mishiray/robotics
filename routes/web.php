<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogCategoryController;

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/aboutus', [WebController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactus', [WebController::class, 'contactUs'])->name('contactUs');
Route::get('/blogs', [WebController::class, 'blogsView'])->name('our_blog');
Route::get('/gallery', [WebController::class, 'gallery'])->name('our_gallery');
Route::get('/events', [WebController::class, 'events'])->name('events');
Route::post('/our-blog/comment', [WebController::class, 'blogsComment'])->name('our_blog.comment');
Route::match(['post', 'get'],'/subscribe', [WebController::class, 'subscribe'])->name('subscribe');
Route::get('unsubscribe/{email}',[WebController::class, 'unsubscribe'])->name('unsubscribe');
Route::post('make-comment', [WebController::class, 'make_comment'])->name('make_comment');
Route::get('/share/{id}',[WebController::class, 'share_post'])->name('share_post');
Route::post('/contact-process',[ContactController::class, 'store'])->name('contact.store');
// Route::post('/contact-process', function (Request $request) {
//     //dd($request);
//     $this->validate($request,[
//         'name' => 'required',
//         'email' => 'required|email',
//         'company' => 'nullable|string',
//         'mobile' => 'required',
//         'subject' => 'required',
//         'message' => 'required',
//     ]);
//     Mail::send( new ContactMessage($request));
//     return redirect()->back();
// })->name('contact.store');
Route::get('event/{id}/{slug}', [WebController::class, 'event_info'])->name('event_info');
Route::get('post/{id}/{slug}', [WebController::class, 'blog_info'])->name('blog_info');

    //Route::get('/logout',[AdminController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function(){

        Route::get('/dashboard', function () {
                return view('admin.dashboard');
        })->middleware(['auth'])->name('dashboard');

        Route::prefix('blog')->as('blog.')->group(function(){
            Route::resource('categories', BlogCategoryController::class);
            Route::resource('posts', BlogController::class);
        });

        Route::prefix('event')->as('event.')->group(function(){
            Route::resource('posts', EventController::class);
        });

        //Route::get('/contactus', [WebController::class, 'gallery'])->name('');
        Route::prefix('gallery')->as('gallery.')->group(function(){
            Route::resource('posts', GalleryController::class);
        });
    });



require __DIR__.'/auth.php';
