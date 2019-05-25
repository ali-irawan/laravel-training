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

/*
Route::get('/', function () {
    return view('home');
})->name('home');
*/
Route::get('/','HomeController@index')->name('home');

/*
Route::get('/about/{name?}', function( $name = 'Unknown' ){
    return view('about');   
})->name('about');
*/
Route::get('/about/{name?}','AboutController@index')->name('about');

/*
Route::get('/contact', function(){
    return view('contact');
})->name('contact');
*/
Route::group([  ], function(){

    Route::get('/contact','ContactController@index')->name('contact');
    Route::post('/contact','ContactController@submit');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');