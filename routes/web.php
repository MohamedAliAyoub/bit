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


// });
	Auth::routes();


	Route::get('/home', 'HomeController@index')->name('home');

    

	//category routes
            Route::resource('categories', 'Dashboard\CategoryController')->except(['show']);
  //tenders routes
            Route::resource('tenders', 'Dashboard\TenderController')->except(['show']);          

   	//category routes
            Route::resource('sub_categories', 'Dashboard\CategorySubController')->except(['show']);
           Route::get('GetSubCategory/{category}', 'Dashboard\CategoryController@GetSubCategory')->name('category.sub');
           Route::get('Getproducts/{product}', 'Dashboard\ProductController@GetSubCategoryProduct')->name('sub.product');
   //product routes
            Route::resource('products', 'Dashboard\ProductController')->except(['show']);


    //client routes
            Route::resource('clients', 'Dashboard\ClientController')->except(['show']);
            Route::resource('clients.orders', 'Dashboard\Client\OrderController')->except(['show']);

            //order routes
            Route::resource('orders', 'Dashboard\OrderController');
            Route::get('/orders/{order}/products', 'Dashboard\OrderController@products')->name('orders.products');
        
            
