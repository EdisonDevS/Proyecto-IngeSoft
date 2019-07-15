<?php
//grupo para las rutas de administración
use App\Vestuario;
use App\User;
use App\Maquillaje;
use App\Transporte;
use App\Plato;
use App\Ceremonia;
use App\Lugar;
use App\Anillo;
use App\ActividadLunaDeMiel;
use App\ActividadRecepcion;


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


	Route::get('/admin/borrar/eliminarLugarCeremonia/{id}', 'ProductoController@eliminarLugarCeremonia');

	Route::get('/admin/borrar/eliminarLugarLunaDeMiel/{id}', 'ProductoController@eliminarLugarLunaDeMiel');

	Route::get('/admin/borrar/eliminarLugarRecepcion/{id}', 'ProductoController@eliminarLugarRecepcion');

	Route::get('/admin/borrar/eliminarTransporte/{id}', 'ProductoController@eliminarTransporte');

	Route::get('/admin/borrar/eliminarPastel/{id}', 'ProductoController@eliminarPastel');

	Route::get('/admin/borrar/eliminarVestuario/{id}', 'ProductoController@eliminarVestuario');

	Route::get('/admin/borrar/eliminarMaquillaje/{id}', 'ProductoController@eliminarMaquillaje');

	Route::get('/admin/borrar/eliminarAnillo/{id}', 'ProductoController@eliminarAnillo');

	Route::get('/admin/borrar/eliminarActividadRecepcion/{id}', 'ProductoController@eliminarActividadRecepcion');

	Route::get('/admin/borrar/eliminarActividadLunaDeMiel/{id}', 'ProductoController@eliminarActividadLunaDeMiel');



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
	Route::get("/pasteles", "UserController@mostrarpastel")->name('pasteles');
	Route::get("/transporte", "UserController@mostrartransporte")->name('transporte');
	Route::get("/ceremonia", "UserController@mostrarceremonia")->name('ceremonia');
	Route::get("/actividades/recepcion", "UserController@mostrarActividadesRecepcion")->name('actividades_recepcion');
	Route::get("/anillos", "UserController@mostraranillos")->name('anillos');
	Route::get("/actividades_luna_de_miel", "UserController@mostrarActividadesLunaDeMiel")->name('actividades_lm');
	Route::get("/maquillaje", "UserController@mostrarmaquillaje")->name('maquillaje');
	Route::get("/vestuario", "UserController@mostrarVestuario")->name('vestuario');
	Route::get("/recepcion", "UserController@mostrarRecepcion")->name('recepcion');

	Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

	Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::get('/', 'PackageController@verHome');


	Route::get('/ver_producto/ceremonia/{id}', function($id)
	{
		$ceremonia=Lugar::find($id);
		return view('categoria.product_pages.ceremonia', compact('ceremonia'));
	});

	Route::get('/ver_producto/luna_de_miel/{id}', function($id)
	{
		$ceremonia=Lugar::find($id);
		return view('categoria.product_pages.lunademiel', compact('ceremonia'));
	});

	Route::get('/ver_producto/recepcion/{id}', function($id)
	{
		$ceremonia=Lugar::find($id);
		return view('categoria.product_pages.recepcion', compact('ceremonia'));
	});

	Route::get('/ver_producto/transporte/{id}', function($id)
	{
		$ceremonia=Transporte::find($id);
		return view('categoria.product_pages.transporte', compact('ceremonia'));
	});

	Route::get('/ver_producto/pastel/{id}', function($id)
	{
		$ceremonia=Plato::find($id);
		return view('categoria.product_pages.pastel', compact('ceremonia'));
	});

	Route::get('/ver_producto/anillos/{id}', function($id)
	{
		$ceremonia=Anillo::find($id);
		return view('categoria.product_pages.anillos', compact('ceremonia'));
	});

	Route::get('/ver_producto/actividad_recepcion/{id}', function($id)
	{
		$ceremonia=ActividadRecepcion::find($id);
		return view('categoria.product_pages.actividad_recepcion', compact('ceremonia'));
	});

	Route::get('/ver_producto/vestuario/{id}', function($id)
	{
		$ceremonia=Vestuario::find($id);
		return view('categoria.product_pages.vestuario', compact('ceremonia'));
	});

	Route::get('/ver_producto/maquillaje/{id}', function($id)
	{
		$ceremonia=Maquillaje::find($id);
		return view('categoria.product_pages.maquillaje', compact('ceremonia'));
	});

	Route::get('/ver_producto/actividad_lunademiel/{id}', function($id)
	{
		$ceremonia=ActividadLunaDeMiel::find($id);
		return view('categoria.product_pages.actividad_lunademiel', compact('ceremonia'));
	});

	Route::post('/agregar_al_carro/act_lm', 'ProductoController@agregarCarritoAct_LM');

	Route::post('/agregar_al_carro/act_rec', 'ProductoController@agregarCarritoAct_REC');

	Route::post('/agregar_al_carro/lugar', 'ProductoController@agregarCarrito_LUGAR');

	Route::post('/agregar_al_carro/transporte', 'ProductoController@agregarCarrito_TRANSPORTE');

	Route::post('/agregar_al_carro/plato', 'ProductoController@agregarCarrito_PLATO');

	Route::post('/agregar_al_carro/vestuario', 'ProductoController@agregarCarrito_VESTUARIO');

	Route::post('/agregar_al_carro/maquillaje', 'ProductoController@agregarCarrito_MAQUILLAJE');

	Route::post('/agregar_al_carro/anillo', 'ProductoController@agregarCarrito_ANILLO');

	Route::get('/ver_carrito/{id}', function($id)
	{
		$ceremonias=User::find($id)->lugares()->where('type', 'Ceremonia')->get();
		$recepciones=User::find($id)->lugares()->where('type', 'Recepcion')->get();
		$anillos=User::find($id)->anillos;
		$pasteles=User::find($id)->platos;
		$vestuario=User::find($id)->vestuarios;
		$maquillaje=User::find($id)->maquillajes;
		$lunademiel=User::find($id)->lugares()->where('type', 'LunaDeMiel')->get();

		return view('categoria.carritocompleto', compact('ceremonias','recepciones','anillos','pasteles','vestuario','maquillaje','lunademiel'));
	});


	Auth::routes();

});
