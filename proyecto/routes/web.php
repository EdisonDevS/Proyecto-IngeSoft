<?php

Route::get('/', function () {
	    return view('welcome');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login/', 'AdministratorController@showLoginForm');

Route::post('/admin/login/', 'AdministratorController@login');

Route::get('/admin/login/', 'AdministratorController@showAdminArea');

