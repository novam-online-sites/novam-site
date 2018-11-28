<?php

use Laravel\Socialite\Facades\Socialite;

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



Route::get('/test', function () {
        return view('welcome');
});

Route::any('/search', SearchController::class)->name('search');

Auth::routes(['verify' => true]);
Route::get('login/{driver}', 'Auth\OAuthController@redirectTo');
Route::get('login/{driver}/callback', 'Auth\OAuthController@doCallback');
Route::post('/passwords/text', 'Auth\ResetPasswordController@sendText')->name('password.text');

Route::get('/home', 'HomeController@index')->name('home');

// Route::domain('{account}.novamonline.com')->group(function () {
//     Route::any('{page?}/{id?}', function ($account, $id) {
//     //
//     dump($account, $id);
//     });
// });

Route::resource('blog', Pages\BlogController::class);
Route::any('{page?}', IndexController::class)->name('page');
