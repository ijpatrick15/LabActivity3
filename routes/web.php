<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/team', 'TeamController@index')->name('team.index');

Route::get('/chat', 'ChatController@index')->name('chat.index');

Route::get('/chat/all-rooms', 'ChatController@rooms')->name('chat.rooms');

Route::get('/chat/{chatRooms}', 'ChatController@messages')->name('chat.messages');

Route::get('/chat/{chatRooms}', 'ChatController@messages')->name('chat.messages');

Route::get('/chat/{chatRooms}', 'ChatController@newMessages');


