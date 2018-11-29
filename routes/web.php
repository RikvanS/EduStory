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


Route::get('/chapters/prologue', 'ChapterController@prologue');
Route::get('/chapters/1a', 'ChapterController@oneA');
Route::get('/chapters/1b', 'ChapterController@oneB');
Route::get('/chapters/2', 'ChapterController@two');

/*---Rik------------------------------------------------*/

/*---Dorieke------------------------------------------------*/

Route::post('/chapters/prologue/checkname', 'AjaxController@checkName');
Route::get('/chapters/prologue/askname', 'AjaxController@askName');
Route::post('/chapters/prologue/storename', 'AjaxController@storeName');
Route::post('/chapters/prologue/checkage', 'AjaxController@checkAge');
Route::get('/chapters/prologue/askage', 'AjaxController@askAge');
Route::post('/chapters/prologue/storeage', 'AjaxController@storeAge');

/*---Falco------------------------------------------------*/

/*---Anna------------------------------------------------*/

/*---Farhad------------------------------------------------*/

