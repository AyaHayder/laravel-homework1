<?php
Route::get('/about', function () {
    return view('about');
});


Route::get('/index','pagesController@getHome');

Route::get('/videos/{id?}/{number?}','pagesController@getVideos');

Route::get('/myCodelabTasks','pagesController@getMyCodelabTasks');

Route::get('/secondDay','pagesController@getDay2');

Route::get('/hw','pagesController@getHw');

Route::get('/Hw2','pagesController@getHw2');

Route::get('/thirdDay','pagesController@getDay3');

Route::get('/fourthDay','pagesController@getDay4');

Route::get('/fifthDay','pagesController@getDay5');

Route::get('/signUp','pagesController@getSignUp');

Route::get('/login','pagesController@getLogin');



