<?php



Route::get('/', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
