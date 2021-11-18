<?php

use Illuminate\Support\Facades\Route;
use App\Services\Localization\LocalizationService;

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

// Auth routes
Auth::routes();

// Admin panel routes
Route::namespace('App\Http\Controllers\Admin')
    ->prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('homeAdmin');

        Route::resource('category', 'CategoryController')->except('show');
        Route::resource('post', 'PostController')->except('show');
        Route::resource('pages', 'StaticPageController')->except('show');
        Route::resource('users', 'UserController');
        Route::post('users/change-password/{user}', 'UserController@change_password')->name('change-password');
    }
);

// Front side rotes vith localization
Route::namespace('App\Http\Controllers')
    ->prefix(LocalizationService::locale()) // uz ru en
    ->middleware(['setLocale'])
    ->group(function () {
        // Route::get('', 'FrontController@index')->name('main');

        Route::get('', 'HomeController@index')->name('home');
        Route::get('page/{slug}', 'HomeController@page')->name('page');
        Route::get('/{slug}', 'HomeController@category')->name('category');
        // Route::get('post/{slug}', 'HomeController@post')->name('post'); // route('post', $post->slug)
        Route::get('/{category}/{slug}', 'HomeController@category_post')->name('category_post'); // route('category_post', [$post->category->slug, $post->slug])
    }
);
