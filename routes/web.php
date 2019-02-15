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
// Route::group(['middleware'=>['web']], function (){
Route::get('/', 'WelcomeController@index');
Route::get('/packages', 'WelcomeController@packages');
Route::get('/mainTopics', 'MainTopicController@index');
Route::get('/mainTopics/{topic}', 'MainTopicController@show');
Route::get('/subTopics', 'SubTopicController@index');
Route::get('/subTopics/{subTopic}', 'SubTopicController@show')->name('subTopics.show');
Route::post('/subTopics/{subTopic}', 'SubTopicController@nextQuestion')->name('nextQuestion');
// Route::get('/questions/{question}', 'QuestionController@show');
// Route::post('/questions/{question}', 'QuestionController@nextQuestion')->name('nextQuestion');
// });
