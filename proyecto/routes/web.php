<?php
//grupo para las rutas de administración
Route::group(['middleware' => ['auth:admin']], function () {
	Route::get('/admin/dashboard', 'AdminController@showAdminDashboard')->name('admin.dashboard');
});


//grupo para las rutas del usuario común
Route::group(['middleware' => ['auth:web']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});


//grupo para las rutas de acceso público
Route::group(['middleware' => ['web']], function () {
	Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm');

	Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

	Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::get('/', function () {
	    return view('welcome');
	});

	Auth::routes();

});





