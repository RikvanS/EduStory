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

Route::get('/chapters/prologue', 'ChapterController@prologue')->middleware('auth');
Route::get('/chapters/prologue/setsail', 'ChapterController@prologueSetSail')->middleware('auth');
Route::get('/chapters/1', 'ChapterController@one')->middleware('auth');
Route::get('/chapters/1/setsail', 'ChapterController@oneSetSail')->middleware('auth');
Route::get('/chapters/2a', 'ChapterController@twoA')->middleware('auth');
Route::get('/chapters/2b', 'ChapterController@twoB')->middleware('auth');
Route::get('/chapters/2/setsail', 'ChapterController@twoSetSail')->middleware('auth');
Route::get('/chapters/3', 'ChapterController@three')->middleware('auth');
Route::get('/chapters/epilogue', 'ChapterController@epilogue')->middleware('auth');

Route::post('/chapters/prologue/checkname', 'AjaxController@checkName');
Route::get('/chapters/prologue/askname', 'AjaxController@askName');
Route::post('/chapters/prologue/storename', 'AjaxController@storeName');
Route::post('/chapters/prologue/checkage', 'AjaxController@checkAge');
Route::get('/chapters/prologue/askage', 'AjaxController@askAge');
Route::post('/chapters/prologue/storeage', 'AjaxController@storeAge');
Route::post('/chapters/prologue/checkgender', 'AjaxController@checkGender');
Route::post('/chapters/prologue/storegender', 'AjaxController@storeGender');
Route::get('/chapters/prologue/askgender', 'AjaxController@askGender');

Route::get('/storelubeck', 'ProgressionController@storeLubeck');
Route::get('/storevisby', 'ProgressionController@storeVisby');
Route::get('/storedanzig', 'ProgressionController@storeDanzig');
Route::get('/storeriga', 'ProgressionController@storeRiga');
Route::get('/storeepilogue', 'ProgressionController@storeEpilogue');
Route::get('/storesetsail1', 'ProgressionController@storeSetsail1');
Route::get('/storesetsail2', 'ProgressionController@storeSetsail2');
Route::get('/storesetsail3', 'ProgressionController@storeSetsail3');

/*---Falco------------------------------------------------*/
Route::get('/chapters/1/setsail1a', 'ChapterController@oneASetSail')->middleware('auth');
Route::get('/chapters/1/setsail1b', 'ChapterController@oneBSetSail')->middleware('auth');
/*---Anna------------------------------------------------*/


/*---Farhad------------------------------------------------*/

Route::get('/chapters/1/lubeck', 'ChapterController@lubeck')->middleware('auth');
Route::get('/chapters/1/artdealer', 'ChapterController@artDealer')->middleware('auth');
Route::get('/chapters/1/artgallery', 'ChapterController@artGallery')->middleware('auth');
Route::get('/chapters/1/plague', 'ChapterController@plague')->middleware('auth');

