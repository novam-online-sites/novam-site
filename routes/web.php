<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::domain('{account}.novamonline.com')->group(function () {
//     Route::any('{page?}/{id?}', function ($account, $id) {
//     //
//     dump($account, $id);
//     });
// });

Route::resource('blog', Pages\BlogController::class);
Route::any('{page?}', IndexController::class)->name('page');
