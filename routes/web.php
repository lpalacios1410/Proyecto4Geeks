<?php

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
    return view('welcome');
});

//	PARA QUE TE MUESTRE LA PAGINA SIN INICIO DE SESION 

Route::get('/home2', function () {
    return view('index2');
});

// PARA QUE TE MUESTRE LA PAGINA CUANDO ESTAS INICIADO SESION 

Route::get('/home', function(){
	return view('index1');

});

Route::get('/registro', function(){
	
	return view('registro');

});


Auth::routes();

        // RUTAS DE MULTIUSUARIO
Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'UserLoginController@getUserLogin');
    Route::post('login', ['as'=>'user.auth','uses'=>'UserLoginController@userAuth']);
    Route::get('admin/login', 'AdminLoginController@getAdminLogin');
    Route::post('admin/login', ['as'=>'admin.auth','uses'=>'AdminLoginController@adminAuth']);
    Route::group(['middleware' => ['admin']], function () {
        Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
    });
});



                // RUTAS DE API FACEBOOK
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


// CRUD

Route::resource('products', 'ProductController');

//


Route::get('/login', function(){
    
    return view('auth.login');

});
