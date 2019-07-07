<?php
//grupo para las rutas de administración
Route::group(['middleware' => ['auth:admin']], function () {
	
	//rutas para la gestión de administradores
	Route::get('/admin/dashboard', function()
	{
		return view('admin.layout');
	})->name('admin.dashboard');

	
	Route::get('/admin/manage/admins', function()
	{
		return view('admin.manage_admin.manage');
	})->name('admin.manage.admins');

	
	Route::get('/admin/manage/create_admin', function()
	{
		return view('admin.manage_admin.create');
	})->name('admin.manage.crear_admin');

	
	Route::post('/admin/manage/create_admin', 'AdminController@createAdmin')->name('admin.manage.crear_admin');

	
	Route::get('/admin/manage/search_admin', 'AdminController@showAdminSearchForm')->name('admin.manage.buscar_admin');

	
	Route::get('/admin/manage/modify/{id}', 'AdminController@showAdminModifyForm')->name('admin.manage.modify');

	
	Route::post('/admin/manage/modify', 'AdminController@modifyAdmin')->name('admin.manage.modify');
	
	
	Route::get('/admin/manage/delete/{id}', 'AdminController@showAdminDeleteForm')->name('admin.manage.delete');

	
	Route::get('/admin/manage/delete/confirm/{id}', 'AdminController@deleteAdmin');		


	//rutas para la gestión de usuarios
	Route::get('/admin/manage/users', function()
	{
		$users=[];
		return view('admin.manage_user.manage', compact('users'));
	})->name('admin.manage.users');

	Route::post('/admin/manage/users', 'AdminController@searchUsers')->name('admin.manage.users');

	Route::get('/admin/manage/users/modify/{id}', 'AdminController@showUserModifyForm')->name('admin.manage.users.modify');

	Route::post('/admin/manage/users/modify', 'UserController@modifyUser')->name('admin.manage.users.modify');


});


//grupo para las rutas del usuario común
Route::group(['middleware' => ['auth:web']], function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/profile', 'UserController@profile')->name('profile');

	Route::post('/profile', 'UserController@profileModify')->name('profile');

	Route::get('/change_profile_picture', function(){
		return view('users.change_profile_picture');
	})->name('change_profile_photo');

	Route::post('/change_profile_picture', 'UserController@changeProfilePicture')->name('change_profile_photo');
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





