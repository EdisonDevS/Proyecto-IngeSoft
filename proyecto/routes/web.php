<?php
//grupo para las rutas de administración
Route::group(['middleware' => ['auth:admin']], function () {
	Route::get('/admin/dashboard', 'AdminController@showAdminDashboard')->name('admin.dashboard');

	Route::get('/admin/manage/admins', 'AdminController@showAdminManagement')->name('admin.manage.admins');

	Route::get('/admin/manage/create_admin', 'AdminController@showAdminCreateForm')->name('admin.manage.crear_admin');

	Route::post('/admin/manage/create_admin', 'AdminController@createAdmin')->name('admin.manage.crear_admin');

	Route::get('/admin/manage/search_admin', 'AdminController@showAdminSearchForm')->name('admin.manage.buscar_admin');

	Route::get('/admin/manage/users', 'AdminController@showUserManagement')->name('admin.manage.users');


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





