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

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blog', Blog\BlogController::class);
Route::resource('legal', Pages\LegalController::class);
Route::any('account/{page?}', Auth\AccountController::class)->name('account');
Route::any('/', IndexController::class)->name('index');
Route::resource('page', Pages\PageController::class);
Route::resource('{page?}', Pages\PageController::class);

// Route::get('update-git', function(){
//     dd($this);
//     if (!Gate::allows('update-git', $user = auth()->user())) {
//     // The current user can update the post...
//     dump('I CAN', $user);
// }

// });
