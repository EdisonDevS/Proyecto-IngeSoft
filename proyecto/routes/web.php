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


	Route::post('/admin/manage/modify', 'AdminController@modifyAdmin')->name('admi.manage.modify');


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


	// rutas para la creacion de productos

	Route::get('/admin/manage/product', function(){
		return view('admin.manage_product.manage');
	})->name('admin.manage.products');

	Route::get('/admin/manage/product/create', function(){
		return view('admin.manage_product.crear_producto');
	})->name('crear_producto');


	Route::post('/admin/manage/product/create/lugar_luna', 'ProductoController@crearLugarLunaDeMiel')->name('crear_lugar_lm');

	Route::post('/admin/manage/product/create/lugar_recepcion', 'ProductoController@crearLugarRecepcion')->name('crear_lugar_recepcion');

	Route::post('/admin/manage/product/create/lugar_ceremonia', 'ProductoController@crearLugarCeremonia')->name('crear_lugar_ceremonia');

	Route::post('/admin/manage/product/create/ropa', 'ProductoController@crearRopa')->name('crear_ropa');

	Route::post('/admin/manage/product/create/maquillaje', 'ProductoController@crearMaquillaje')->name('crear_maquillaje');

	Route::post('/admin/manage/product/create/transporte', 'ProductoController@crearTransporte')->name('crear_transporte');

	Route::post('/admin/manage/product/create/cena', 'ProductoController@crearCena')->name('crear_cena');

	Route::post('/admin/manage/product/create/maquillaje', 'ProductoController@crearMaquillaje')->name('crear_maquillaje');

	Route::post('/admin/manage/product/create/anillo', 'ProductoController@crearAnillo')->name('crear_anillo');

	Route::post('/admin/manage/product/create/actividad_recepcion', 'ProductoController@crearActividadRecepcion')->name('actividad_recepcion');

	Route::post('/admin/manage/product/create/actividad_LM', 'ProductoController@crearActividadLunaDeMiel')->name('actividad_lm');




	Route::post('/admin/manage/product/create/ceremonia', 'ProductoController@crearCeremonia')->name('crear_ceremonia');



	Route::get('/admin/consultar/productos', 'ProductoController@consultarProductos')->name('consultar_productos');

	Route::get('/admin/modificar/productos/lugar_ceremonia/{id}', 'ProductoController@modificarLugarCeremonia')->name('modificar_lugar_Ceremonia');

	Route::get('/admin/modificar/productos/lugar_luna_de_miel/{id}', 'ProductoController@modificarLugarLunaDeMiel')->name('modificar_lugar_lm');

	Route::get('/admin/modificar/productos/lugar_recepcion/{id}', 'ProductoController@modificarLugarRecepcion')->name('modificar_lugar_recepcion');

	Route::get('/admin/modificar/productos/transporte/{id}', 'ProductoController@modificarTransporte')->name('modificar_transporte');

	Route::get('/admin/modificar/productos/pastel/{id}', 'ProductoController@modificarPastel')->name('modificar_pastel');


	Route::get('/admin/modificar/productos/vestuario/{id}', 'ProductoController@modificarVestuario')->name('modificar_vestuario');

	Route::get('/admin/modificar/productos/maquillaje/{id}', 'ProductoController@modificarMaquillaje')->name('modificar_maquillaje');

	Route::get('/admin/modificar/productos/anillo/{id}', 'ProductoController@modificarAnillo')->name('modificar_anillo');

	Route::get('/admin/modificar/productos/actividad_recepcion/{id}', 'ProductoController@modificarActividadRecepcion')->name('modificar_actividad_recepcion');

	Route::get('/admin/modificar/productos/actividad_lm/{id}', 'ProductoController@modificarActividadLunaDeMiel')->name('modificar_actividad_lm');



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
	Route::get("/lunamiel", "UserController@mostrarlunamiellugar")->name('lunamiel');
	Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

	Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::get('/', function () {
		return view('welcome');
	});

	Auth::routes();

});
