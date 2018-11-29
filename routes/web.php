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

Route::get('/', 'ViewController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'ViewController@game');
Route::get('/chapters/prologue', 'ChapterController@prologue');
Route::get('/chapters/1a', 'ChapterController@oneA');
Route::get('/chapters/1b', 'ChapterController@oneB');
Route::get('/chapters/2', 'ChapterController@two');

