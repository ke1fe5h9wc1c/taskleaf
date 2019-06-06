<?php
Route::get('/','TasksController@index');
Route::resource('tasks', 'TasksController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'TasksController@logout');
