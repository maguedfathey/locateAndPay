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

Route::get('/redirect', [
   'as' => 'redirect',
   'uses' => 'SocialAuthController@redirect'
]);

 Route::get('/callback', [
   'as' => 'callback',
   'uses' => 'SocialAuthController@callback'
]);

Auth::routes();

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);

Route::post('order-post', ['as'=>'order-post','uses'=>'HomeController@orderPost']);
