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

/*Route::get('/', function () {return view('welcome');});*/

Route::get('/', 'BaseController@getIndex');
Route::get('oferta', 'OfertaController@getIndex');
Route::get('confedencialnost', 'ConfedencialnostController@getIndex');
Route::get('about', 'AboutController@getIndex');
Route::get('consultation', 'ConsultationController@getIndex');
Route::get('revies', 'ReviewsController@getIndex');
Route::post('revies', 'ReviewsController@postIndex');
Route::get('revies', 'ReviewsController@getAll');
Route::get('program', 'ProgramController@getIndex');
Route::get('program_family_ranking', 'Program_rankingController@getIndex');
Route::get('program_release', 'Program_releaseController@getIndex');
Route::get('contact', 'ContactController@getIndex');
Route::get('lidmagnit', 'LidmagnitController@getIndex');
Route::post('lidmagnit', 'LidmagnitController@postIndex');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
