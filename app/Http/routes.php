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

Route::get('/', function () {
    $tracks = \App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross');

    $twitterUser = Twitter::getUserTimeline(['screen_name' => 'rossthequeen', 'count' => 2])[0]->user;

    $tweets = Twitter::getUserTimeline(['screen_name' => 'rossthequeen', 'count' => 4]);

    return view('home.index')->with([
        'tracks' => $tracks['results'],
        'twitterUser' => $twitterUser,
        'tweets' => $tweets
    ]);
});

Route::get('/about', function () {
    $tracks = \App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross');

    return view('about.index')->with([
        'tracks' => $tracks['results']
    ]);
});

Route::get('/music', function () {
    $tracks = \App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross');

    return view('music.index')->with([
        'tracks' => $tracks['results']
    ]);
});

Route::get('/contact', function () {
    $tracks = \App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross');

    return view('contact.index')->with([
        'tracks' => $tracks['results']
    ]);
});

Route::get('/itunes', function () {
    $tracks = \App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross');

    return view('itunes.index')->with([
        'tracks' => $tracks['results']
    ]);
});

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('itunes', function ()    {
        return response()->json(\App\Libraries\Tunes::iTunesSearchTerm('Shanice Ross'));
    });

    Route::get('tweets', function () {
        return response()->json(Twitter::getUserTimeline(['screen_name' => 'rossthequeen', 'count' => 2]));
    });

    Route::get('twitterUser', function () {
        $twitterUser = Twitter::getUserTimeline(['screen_name' => 'rossthequeen', 'count' => 2])[0]->user;

        return response()->json($twitterUser);
    });
});

Route::post('/send-contact', [
    'as' => 'contact.send',
    'uses' => 'ContactsController@send'
]);

// Route::get('/gallery', function () {
//     return view('gallery.index');
// });
