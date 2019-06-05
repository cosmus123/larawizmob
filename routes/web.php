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

Route::get('/', 'DefaultController@index');

Route::get('/download', 'DefaultController@download');

Route::post('/contact', 'ContactController@store');

Route::post('/subscribe_first', 'SubscribeController@send_first');

Route::post('/subscribe_second', 'SubscribeController@send_second');


