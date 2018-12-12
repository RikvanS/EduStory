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

/*---Rik------------------------------------------------*/

Route::get('/chapters/lubeck/lubeck-story', 'ProgressionController@lubeckstory'); 
Route::get('/chapters/lubeck/lubeck-choice1', 'ProgressionController@gotovisby');
Route::get('/chapters/lubeck/lubeck-choice2', 'ProgressionController@gotodanzig');
Route::get('/chapters/visby/visby-battleship', 'ProgressionController@visbybattleship');
Route::get('/chapters/visby/visby-boatrepair', 'ProgressionController@visbyboatrepair');
Route::get('/chapters/danzig/danzig-hanoi', 'ProgressionController@danzighanoi');
Route::get('/chapters/danzig/danzig-memory', 'ProgressionController@danzigmemory');
Route::get('/chapters/riga/riga-quiz', 'ProgressionController@rigaquiz');



/*---Dorieke------------------------------------------------*/

Route::get('/chapters/prologue', 'ChapterController@prologue');
Route::get('/chapters/prologue/setsail', 'ChapterController@prologueSetSail');
Route::get('/chapters/1', 'ChapterController@one');
Route::get('/chapters/1/setsail', 'ChapterController@oneSetSail');
Route::get('/chapters/2a', 'ChapterController@twoA');
Route::get('/chapters/2b', 'ChapterController@twoB');
Route::get('/chapters/2/setsail', 'ChapterController@twoSetSail');
Route::get('/chapters/3', 'ChapterController@three');
Route::get('/chapters/epilogue', 'ChapterController@epilogue');

Route::post('/chapters/prologue/checkname', 'AjaxController@checkName');
Route::get('/chapters/prologue/askname', 'AjaxController@askName');
Route::post('/chapters/prologue/storename', 'AjaxController@storeName');
Route::post('/chapters/prologue/checkage', 'AjaxController@checkAge');
Route::get('/chapters/prologue/askage', 'AjaxController@askAge');
Route::post('/chapters/prologue/storeage', 'AjaxController@storeAge');

/*---Falco------------------------------------------------*/
Route::get('/chapters/1/setsail1a', 'ChapterController@oneASetSail');
Route::get('/chapters/1/setsail1b', 'ChapterController@oneBSetSail');
/*---Anna------------------------------------------------*/


/*---Farhad------------------------------------------------*/

Route::get('/chapters/1/Lubeck', 'ChapterController@lubeck');
Route::get('/chapters/1/artdealer', 'ChapterController@artDealer');
Route::get('/chapters/1/artgallery', 'ChapterController@artGallery');
Route::get('/chapters/1/plague', 'ChapterController@plague');

