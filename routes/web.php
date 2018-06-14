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

Route::get('/', function () { return view('welcome');  });

Auth::routes();

Route::get('/home/{id?}', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');

Route::get('/page/{id}', 'SongsController@showLyrics');
Route::get('/edit/{id}', 'SongsController@findLyrics');

Route::post('/addSong', 'SongsController@processSongs');
Route::post('/addSong/{id?}', 'SongsController@processSongs');

Route::get('/delete/{id}', 'SongsController@destroy');

 