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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PageController@index');
Route::get('/dashboard','PageController@dashboard');
Route::get('/bodim','BoardingController@index');
Route::get('/addboarding','BoardingController@create');

// Route::get('/lg', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/bodim', function () {
//     return view('bodimsec');
// });

/* inc file routes*/

Route::get('/header', function () {
    return view('incfile.headersec');
});
Route::get('/FTR', function () {
    return view('incfile.footersec');
});
Route::get('/nav', function () {
    return view('incfile.navibar');
});
Route::get('/rec', function () {
    return view('incfile.recomond');
});
Route::get('/test', function () {
    return view('incfile.test');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
