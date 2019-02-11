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
Route::get('/mainTopics', 'MainTopicController@index');
Route::get('/mainTopics/{topic}', 'MainTopicController@show');
Route::get('/subTopics', 'SubTopicController@index');
Route::get('/subTopics/{subTopic}', 'SubTopicController@index');
Route::get('/subTopics/{subTopic}/questions', 'SubTopicController@index');
Route::get('/questions/{question}', 'QuestionController@index');
// });
