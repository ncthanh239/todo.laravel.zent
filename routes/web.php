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

use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;

Route::get('/vd', function(){
	// Cart::destroy();
	// Cart::add('192ao12', 'Product 1', 1, 100);
	// Cart::add('1239ad0', 'Product 2', 2, 200, ['size' => 'large']);
	// Cart::add('1239ad3', 'Product 3', 2, 300, ['size' => 'large']);
	// dd(Cart::Content());
    // return view('userview.checkout');
});


Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AdminAuth\LoginController@login')->name('admin.logined');
	Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

        // Registration Routes...
	Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('register', 'AdminAuth\RegisterController@register')->name('admin.signin');

        // Password Reset Routes...
	Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'AdminAuth\ResetPasswordController@reset');

	Route::middleware('admin.auth')->group(function(){

		Route::get('/dashboard', function(){
			echo "dashboard page";
		});

		Route::get('/test',function(){
			return view('test');
		});

		// Route::get('/shoes',function(){
		// 	return view('admin_shoes/list');
		// });

		Route::get('/users','UserController@list');
		Route::get('/listusers','UserController@getUsers')->name('admin.listusers');
		Route::delete('/users/{id}','UserController@destroy');	
		Route::get('/users/edit/{id}','UserController@edit');
		Route::post('/users/update/{id}', 'UserController@update');
		Route::get('/users/{id}', 'UserController@show');
		

		




		Route::get('/shoes','ProductController@index');
		Route::get('/listshoes','ProductController@Shoes')->name('admin.shoes');
		Route::get('/shoes/create_frist','ProductController@create_first')->name('admin.createshoes');
		
		Route::get('/shoes/create','ProductController@create')->name('admin.createdetail');
		Route::post('/shoes', 'ProductController@store_first')->name('admin.storeshoes');
		Route::post('/shoes/{id}', 'ProductController@store')->name('admin.storedetail');
		Route::delete('/shoes/{id}','ProductController@destroy');	
		Route::get('/shoes/{id}','ProductController@show');	
		Route::get('/shoes/edit/{id}', 'ProductController@edit');
		Route::post('/shoes/update/{id}', 'ProductController@update');
		Route::delete('shoes/delete/{id}','ProductController@destroydetail');
		Route::get('shoes/showimg/{id}','ProductController@detail_img');
		Route::get('listorder','OrderController@listorder');
	});
	

});


Route::get('/test',function(){
	return view('test');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::middleware('auth')->group(function(){

	Route::get('/home', 'HomeController@index')->name('home');
});
// Route::get('/details', function(){
// 	return view('admin_shoes.detail');
// });

Route::get('createimg/{id}','ProductImgController@create');
Route::post('upload','ProductImgController@upload');

Route::get('createav/{id}','AvatarController@createav');
Route::post('uploadav','AvatarController@uploadav');
Route::get('/', function(){
	return view('userview.index');
});

// Route::get('shop', function(){
// 	return view('userview.shop');
// });

Route::get('shop', 'ProductController@indexshop');
Route::get('single/{id}', 'ProductController@single');
Route::get('checkout', function(){
	return view('userview.checkout');
});
Route::get('payment', function(){
	return view('userview.payment');
});
Route::get('detail/{id}', 'CartController@getIdUser');
Route::post('getSize', 'ProductController@getSize');
Route::post('getQuantity', 'ProductController@getQuantity');
Route::post('getDetail', 'ProductController@getDetail');
Route::post('getCart', 'CartController@getCart');


Route::get('/users/create', 'UserController@create');
Route::post('/users', 'UserController@store')->name('storeUser');
Route::post('/users/update/detail/{id}', 'UserController@update1');
Route::get('/getIdUser/{id}', 'CartController@getIdUser');
Route::post('/getIdDetail', 'CartController@Cart');


