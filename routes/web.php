<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Services\Localization\LocalizationService;
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


// Route::get('/', function () {return redirect()->route('home_locale');});
Route::prefix(LocalizationService::locale())->middleware(['setLocale'])->group(function () {

    Route::namespace('App\Http\Controllers')->group(function () {
        Route::get('/', 'FrontController@index')->name('main');
        Route::get('/about', 'FrontController@about')->name('about');
        Route::get('/services', 'FrontController@services')->name('services');
        Route::get('/project', 'FrontController@project')->name('project');
        Route::get('/blog', 'FrontController@blog')->name('blog');
        Route::get('/contact', 'FrontController@contact')->name('contact');
        Route::get('/elements', 'FrontController@elements')->name('elements');
        Route::get('/project-details', 'FrontController@projectDetails')->name('project-details');
        Route::get('/single-blog/{id}', 'FrontController@singleBlog')->name('single-blog');

    });




    Route::get('post/{slug}', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

    Route::get('page/{slug}', [App\Http\Controllers\HomeController::class, 'page'])->name('page');
    // Route::get('/', function () {return view('welcome');})->name('home_locale');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
        Route::get('/profile', [App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('profile');

        Route::resource('category', CategoryController::class)->except('show');
        Route::resource('post', PostController::class)->except('show');
        Route::resource('users', UserController::class);
        Route::resource('pages', StaticPageController::class)->except('show');
    });
});



//    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/article', 'ArticleController@index')->name('article');
//    Route::get('/article/store', 'ArticleController@store')->name('store.article');
//    Route::get('/summernote-editor-upload', 'EmployeeController@index');
//    Route::post('file-upload', 'EmployeeController@fileUpload');
    // Route::post('ckeditor/image_upload', 'PostController@upload')->name('upload');
