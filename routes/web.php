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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/array","practiceController@findDuplicateElement");
Route::get("/freq-element","practiceController@countFrequencyOfElement");
Route::get("/uniqueorremoveduplicate-element","practiceController@printUniqueElementorRemoveDuplicate");
Route::get("/min-max","practiceController@FindMinAndMaxElement");
Route::get("/search","practiceController@searchElement");
Route::get("/star","practiceController@RhombusStar");
Route::get("/daimond","practiceController@diamondStar");

Route::get("/reverse-string","practiceController@reverseStringWithoutreversingSpecailcharacter");

Route::get("/homepage","HomeController@homepage");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
