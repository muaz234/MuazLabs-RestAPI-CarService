<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// route for car brand


Route::get('car_brand', 'CarBrandController@index');
Route::get('car_brand/{id}', 'CarBrandController@show');
Route::post('car_brand/add', 'CarBrandController@add');
Route::put('car_brand/edit/{id}','CarBrandController@edit');
Route::delete('car_brand/delete/{id}', 'CarBrandController@delete');
Route::get('car_brand/show/cardetail/{id}', 'CarBrandController@showDetails');

// route for car details

Route::get('car_detail', 'CarDetailController@index');
Route::get('car_detail/{id}', 'CarDetailController@show');
Route::post('car_detail/add', 'CarDetailController@add');
Route::put('car_detail/edit/{id}', 'CarDetailController@edit');
Route::delete('car_detail/delete/{id}', 'CarDetailController@delete');
Route::get('car_detail/show/carmodel/{id}', 'CarDetailController@getCarModelDetails');

//route for car models

Route::get('car_model', 'CarModelController@index');
Route::get('car_model/{id}', 'CarModelController@show');
Route::post('car_model/add', 'CarModelController@add');
Route::put('car_model/edit/{id}', 'CarModelController@edit');
Route::delete('car_model/delete/{id}', 'CarModelController@delete');
Route::get('car_model/show/cardetail/{id}', 'CarModelController@getCarDetail');
Route::get('car_model/show/carbrand/{id}', 'CarModelController@getCarModel');