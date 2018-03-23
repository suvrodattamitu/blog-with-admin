<?php

//FOR USER CAN BE MAKE IN GROUP .. FOR MAKING GROUP LOOK BELLOW AT ADMIN
Route::get('/','User\HomeController@index');
Route::get('post','User\PostController@index')->name('post');

//ADMIN

Route::group(['namespace'=>'Admin'],function(){

	Route::get('admin/home','HomeController@home')->name('admin.home');
	Route::resource('admin/user','UserController');
	Route::resource('admin/post','PostController');
	Route::resource('admin/tag','TagController');
	Route::resource('admin/category','CategoryController');

});






