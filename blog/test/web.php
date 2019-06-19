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

Route::get('/saludar/', 'CalculatorController@saludar');
Route::get('/categories/', 'CategoriesController@index');
Route::get('/cars/create/', ['uses'=>'CarsController@index','as'=>'cars_index'] );
Route::post('/store/', 'CarsController@store');
Route::get('/delete/', 'CarsController@delete');
Route::post('/available/', ['uses'=>'CarsController@available','as'=>'cars_available']);
Route::post('/save_res/', ['uses'=>'CarsController@store_order','as'=>'cars_res']);
Route::get('/reservations/', function(){
	$locations=\App\Location::all();
	return view('Categories.dates')->withLocations($locations);
});