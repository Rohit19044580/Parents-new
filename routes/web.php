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
    return view('users.login');
});
Route::get('createUser', function () {
    return view('createUser');
});




Auth::routes();


Route::get('/chat', 'ParentsController@chat')->name('parents.chat');
Route::get('/chat/{id}', 'ParentsController@getMessages')->name('parents.messages');
Route::post('/chat/{id}', 'ParentsController@sendMessage')->name('parents.send');
Route::get('/dashboard', 'StudentController@home')->name('students.home');


Route::get('/createMessage', 'MessageController@create')->name('messages.create');
Route::post('/login', 'UserController@login')->name('users.login');
Route::get('/logout', 'UserController@logout')->name('users.logout');


Route::resource('users','UserController');

Route::resource('parents','ParentsController');
Route::resource('messages','MessageController');