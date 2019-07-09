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

Route::view('/test', 'test');//This route is for dev purposes only. To be deleted.

/*
* This is frontpage route.
* Should be kept outside Auth group.
*/
Route::get('/', 'IndexController@index');

/*
* This route is for submitting user's request from the frontpage.
* Should be kept outside Auth group.
*/
Route::post('/feedback', 'FeedbackController@store')->name('saveMessage');

/*
* This expression disables registration option to admin panel.
*
*/
Auth::routes(['register' => false]);

/*
* This route is for homepage of the admin panel.
* This route is ouside of Auth group due to Auth middleware set at HomeController constructor.
*
*/
Route::get('/home', 'HomeController@index')->name('home');

/*
* This is Auth group.
* All routes within this group are accessible only for authorized users.
*
*/
Route::group(['middleware' => ['auth']], function () {

    Route::prefix('/news')->group(function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::get('/archive', 'NewsController@archive');
        Route::post('/store', 'NewsController@store');
        // Route::post('/avatar', 'UserController@updateAvatar');
        // Route::post('/information', 'UserController@editInformation');
        // Route::post('/password', 'UserController@editPassword');
        // Route::get('/set-lang/{lang}/{route}', 'UserController@setLang');
    });


});