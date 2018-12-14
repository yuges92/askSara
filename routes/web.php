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

Route::get('/', 'WelcomeController@index');
Route::get('/topics', 'WelcomeController@index');
Route::get('/topics/{topic}', 'TopicsController@show');
Route::get('/sections', 'SectionsController@index');
Route::get('/sections/{section}', 'SectionsController@index');
Route::get('/sections/{section}/questions', 'SectionsController@index');
Route::get('/questionnaire/{questionnaire}', 'QuestionnaireController@index');
