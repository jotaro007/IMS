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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/customers', 'CustomersController');
Route::resource('/products', 'ProductsController');
Route::resource('/suppliers', 'SuppliersController');
Route::resource('/units', 'UnitsController');
Route::resource('/types', 'TypesController');
Route::resource('/sale' , 'SaleController');
Route::post('/sale/ajax' , 'SaleController@addToCart');



/*

Route::get('/products','ProductController@store')->name('view');
Route::get('/addProducts',function (){
    return view('products.addProducts');
});
Route::get('/suppliers', 'suppliersController@index');*/
