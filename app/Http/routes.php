<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('home.index');
    });

    Route::get('/about', function () {
        return view('about.index');
    });

    Route::get('/music', function () {
        return view('music.index');
    });

    Route::get('/gallery', function () {
        return view('gallery.index');
    });

    Route::get('/contact', function () {
        return view('contact.index');
    });

});
// 0cYqNV39lL8
