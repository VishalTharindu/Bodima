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

Route::get('/','PageController@index');
Route::get('/dashboard','PageController@dashboard');
Route::get('/user/delete/boarding','BoardingController@show');
Route::get('/bodim','VisitBoarding@index');
Route::get('/view/house/{house}','VisitBoarding@viewHouse');
Route::get('/view/anex/{anex}','VisitBoarding@viewAnex');
Route::get('/view/singleroom/{singleroom}','VisitBoarding@viewSingleRoom');
Route::get('/bodim','VisitBoarding@showboarding');


// -----------------Favourite Routies--------------------------
Route::post('/view/house/add/favourite','MyFavouritController@store')->middleware('auth');



/* ------------- Boarding routes----------------------*/

   /****************House routes********************/
   Route::get('/add/house','BoardingController@house')->middleware('auth');
   Route::post('/add/houses','BoardingController@housestore')->middleware('auth');
   Route::get('/edit/houses/{house}','HouseController@edit')->middleware('auth');
   Route::post('/delete/house/{house}','HouseController@destroy')->middleware('auth');

// ++++++++loadig views+++++++++++++++++

Route::get('/addboarding','BoardingController@create')->middleware('auth');

Route::get('/add/anex','BoardingController@anex')->middleware('auth');
Route::get('/add/singalroom','BoardingController@singalroom')->middleware('auth');

// ++++++++fonction related routies++++++++




Route::post('/add/anexs','BoardingController@anexstore')->middleware('auth');
Route::post('/add/singalrooms','BoardingController@singleroomstore')->middleware('auth');


/*-------------Boarding Request Routers---------------*/


// +++loadig views+++

Route::get('/allboardingrequst','BoardingRequestController@index')->middleware('auth');
Route::get('/requestboarding','BoardingRequestController@create')->middleware('auth');
Route::get('/add/boardingrequst','BoardingRequestController@house')->middleware('auth');

// ++++++++fonction related routies++++++++

Route::post('/add/houserequst','BoardingRequestController@storeHouserRequest')->middleware('auth');



/* -----------------User profile related routies-----------------*/
Route::get('/user/profile','PageController@userprofile')->middleware('auth');
Route::get('/user/boarding','BoardingController@show')->middleware('auth');
Route::post('profile/UpdateAccount','ProfileController@updateAccount')->middleware('auth');


// Route::get('/lg', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/bodimtest', function () {
    return view('boardingview');
});

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
Route::get('/pro', function () {
    return view('membershoptype');
});

Route::get('/prof', function () {
    return view('profileManage.profile');
});

Route::get('/masterdash', function () {
    return view('profileManage.masterdashboard');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
