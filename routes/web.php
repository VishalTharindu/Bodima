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
Route::get('/membertype','PrimiumMemberPaymentController@index');

// -----------------Favourite Routies--------------------------
Route::post('/view/house/add/favourite','MyFavouritController@store')->middleware('auth');



/* ------------- Boarding routes----------------------*/
Route::get('/bodim','VisitBoarding@index');
Route::get('/bodim','VisitBoarding@showboarding');
Route::get('/addboarding','BoardingController@create')->middleware('auth');

   /****************House routes********************/
   Route::get('/show/house','HouseController@show');
   Route::get('/view/house/{house}','VisitBoarding@viewHouse')->middleware('auth');
   Route::get('/add/house','BoardingController@house')->middleware('auth');
   Route::post('/add/houses','BoardingController@housestore')->middleware('auth');
   Route::get('/edit/houses/{house}','HouseController@edit')->middleware('auth');
   Route::post('/delete/house/{house}','HouseController@destroy')->middleware('auth');
   Route::post('/searchresult/house/','HouseController@searchHouse')->middleware('auth');
   Route::get('/searchresult/house/','HouseController@searcresultview')->middleware('auth');
   Route::get('/add/favorite/house/{house}','MyFavouritController@favoriteHouse')->middleware('auth');
   Route::post('/house/contactowner/{house}','UserEmailController@houseContact');


   /****************Single room routes********************/
   Route::get('/show/singleroom','SingleRoomController@show');  
   Route::get('/view/singleroom/{singleroom}','VisitBoarding@viewSingleRoom')->middleware('auth');
   Route::get('/add/singalroom','BoardingController@singalroom')->middleware('auth');
   Route::post('/add/singalrooms','BoardingController@singleroomstore')->middleware('auth');
   Route::post('/delete/singleroom/{singleRoom}','SingleRoomController@destroy')->middleware('auth');
   Route::post('/searchresult/singleroom/','SingleRoomController@searchsingleroom')->middleware('auth');
   Route::get('/searchresult/singleroom/','SingleRoomController@searcresultview')->middleware('auth');
   Route::get('/add/favorite/singleroom/{singleroom}','MyFavouritController@favoriteHouse')->middleware('auth');


   /****************Annex routes********************/
   Route::get('/show/Annex','AnexController@show');
   Route::get('/view/anex/{anex}','VisitBoarding@viewAnex')->middleware('auth');
   Route::get('/add/anex','BoardingController@anex')->middleware('auth');
   Route::post('/add/anexs','BoardingController@anexstore')->middleware('auth');
   Route::post('/delete/anex/{anex}','AnexController@destroy')->middleware('auth');
   Route::post('/searchresult/annex/','AnexController@searchannex')->middleware('auth');
   Route::get('/searchresult/annex/','AnexController@searcresultview')->middleware('auth');
   Route::get('/add/favorite/anex/{annex}','MyFavouritController@favoriteHouse')->middleware('auth');
   

// ++++++++loadig views+++++++++++++++++













/*-------------Boarding Request Routers---------------*/

Route::get('/allboardingrequst','BoardingRequestController@index')->middleware('auth');
Route::get('/requestboarding','BoardingRequestController@create')->middleware('auth');

    /****************House request routes********************/
    Route::get('/show/houserequest','HouseRequestController@show');
    Route::get('/add/houserequst','HouseRequestController@create')->middleware('auth');
    Route::post('/add/houserequst','BoardingRequestController@storeHouserRequest')->middleware('auth');
    Route::post('/delete/boarding_requestsRequest/{boarding_requestsRequest}','BoardingRequestController@destroy')->middleware('auth');

    /****************Annex request routes********************/
    Route::get('/add/annexrequst','AnexRequstController@create')->middleware('auth');
    Route::post('/add/annexrequst','BoardingRequestController@storeAnnexRequest')->middleware('auth');

    /****************Annex request routes********************/
    Route::get('/add/singelroomrequest','SingleRoomRequestController@create')->middleware('auth');
    Route::post('/add/singelroomrequest','BoardingRequestController@storeSingelRoomRequest')->middleware('auth');

// ++++++++fonction related routies++++++++





/* -----------------User profile related routies-----------------*/
Route::get('/user/profile','PageController@userprofile')->middleware('auth');
Route::get('/user/boarding','BoardingController@show')->middleware('auth');
Route::post('profile/UpdateAccount','ProfileController@updateAccount')->middleware('auth');
Route::get('/house/favorite','MyFavouritController@showfavorite')->middleware('auth');
Route::get('/remove/favorite/{favoriteid}','MyFavouritController@destroyfavorite')->middleware('auth');
Route::get('/user/message','ProfileController@myMessage')->middleware('auth');
Route::get('/user/message/all','ProfileController@viewAllMessage')->middleware('auth');
Route::get('/user/message/{message}/view','ProfileController@viewMessage')->middleware('auth');
Route::post('/profile/message/reply','UserEmailController@replyMessage')->middleware('auth');
Route::post('/user/message/{message}/delete','ProfileController@deleteMessage')->middleware('auth');



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
    return view('incfile.innernav');
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

Route::get('/testselect', function () {
    return view('selecttest');
});

Route::get('/masterdash', function () {
    return view('profileManage.masterdashboard');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
