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

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/store', [
    'uses' => 'FrontEndController@store',
    'as' => 'store'
]);

Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('cart/incr/{id}/{qty}', [
    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'
]);

Route::get('cart/decr/{id}/{qty}', [
    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::get('/results', function(){
	$product = \App\Product::where('title','like', '%' . request('query') . '%')->get();

	return view('results')->with('products', $product)
						  ->with('title', 'Search results : ' . request('query'))
    					  ->with('categories', \App\Category::all())
    					  ->with('query', request('query'));
});

Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

Route::get('/about', [
    'uses' => 'FrontEndController@about',
    'as' => 'about'
]);

Route::get('/category/page/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'categorypage'
]);

Route::get('/singleproduct/{id}', [
    'uses' => 'FrontEndController@product',
    'as' => 'singleproduct'
]);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/category', [
        'uses' => 'CategoriesController@index',
        'as' => 'category'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
    ]);
    
    Route::get('/category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
    ]);
    
    Route::get('/product', [
        'uses' => 'ProductsController@index',
        'as' => 'product'
    ]);

    Route::get('/product/create', [
        'uses' => 'ProductsController@create',
        'as' => 'product.create'
    ]);

    Route::post('/product/store', [
        'uses' => 'ProductsController@store',
        'as' => 'product.store'
    ]);

    Route::get('/product/edit/{id}', [
		'uses' => 'ProductsController@edit',
		'as' => 'product.edit'
    ]);
    
    Route::get('/product/delete/{id}', [
		'uses' => 'ProductsController@destroy',
		'as' => 'product.delete'
	]);

	Route::post('/product/update/{id}', [
		'uses' => 'ProductsController@update',
		'as' => 'product.update'
    ]);

});
