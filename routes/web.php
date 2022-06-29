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

// Route::get('/asd', function () {
//     return view('emails.contact-email');
// });



/* GET REQUESTS */

Route::get('/', 'MainController@getIndex');
Route::get('/about', 'MainController@getAbout');
Route::get('/contact', 'MainController@getContact');
Route::get('/portfolio', 'MainController@getPortfolio');
Route::get('/services', 'MainController@getServices');



/* POST REQUESTS */

Route::post('/change-language', 'MainController@changeLanguage');
Route::post('/contact', 'MainController@postContact');



/* HTTP ERRORS */

Route::get('404', ['as' => '404', 'uses' => 'HttpErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'HttpErrorController@internalError']);
