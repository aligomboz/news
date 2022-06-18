<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ImagVideoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\ArticalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Models\Category;
use App\Models\ImagVideo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('admin')->middleware('auth')->group(function () {
            Route::get('/', [IndexController::class, 'test'])->name('admin');
            Route::resource('categories', CategoryController::class);
            Route::resource('posts', PostController::class);
            Route::resource('contact_us', ContactUsController::class);

            Route::post('/post/upload_attachment', [PostController::class, 'upload_attachment'])->name('post.upload_attachment');
            Route::post('/post/delete_attachment', [PostController::class, 'delete_attachment'])->name('post.delete_attachment');

            Route::resource('userss', UserController::class);
            Route::resource('videos', ImagVideoController::class);
        });

        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/about-us', [IndexController::class, 'aboutAs'])->name('fro.about.us');
        Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('fro.contact.us');
        Route::get('/show_post/{id}', [IndexController::class, 'show_post'])->name('show_post');
        Route::post('/store-contact-us', [IndexController::class, 'storeContactUs'])->name('store.contact.us');

        Route::get('/categort_post/{id}', [IndexController::class, 'categoryPost'])->name('category.post');

        Auth::routes();

        Route::get('/home', [HomeController::class, 'index'])->name('home');
    }
);

// Route::prefix('api')->namespace('Api')->group(function () {
//     Route::get('/posts', [ArticalController::class, 'index']);
// });
