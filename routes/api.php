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

Route::post('register', 'Api\LoginController@register');
Route::post('login', 'Api\LoginController@login');

Route::group(['middleware'=> 'auth:api'], function () {
    // return $request->user();
    Route::get('car_brand', 'CarBrandController@index');
    Route::get('car_brand/{id}', 'CarBrandController@show');
    Route::post('car_brand/add', 'CarBrandController@add');
    Route::put('car_brand/edit/{id}','CarBrandController@edit');
    Route::delete('car_brand/delete/{id}', 'CarBrandController@delete');
    Route::get('car_brand/showAll', 'CarBrandController@showCarModel');
    
    // route for car details
    
    Route::get('car_detail', 'CarDetailController@index');
    Route::get('car_detail/{id}', 'CarDetailController@show');
    Route::post('car_detail/add', 'CarDetailController@add');
    Route::put('car_detail/edit/{id}', 'CarDetailController@edit');
    Route::delete('car_detail/delete/{id}', 'CarDetailController@delete');
    
    // Route::get('car_detail/show/carmodel/{id}', 'CarDetailController@getCarModelDetails');
    
    //route for car models
    
    Route::get('car_model', 'CarModelController@index');
    Route::get('car_model/{id}', 'CarModelController@show');
    Route::post('car_model/add', 'CarModelController@add');
    Route::put('car_model/edit/{id}', 'CarModelController@edit');
    Route::delete('car_model/delete/{id}', 'CarModelController@delete');
    Route::get('car_model/show/cardetail/{id}', 'CarModelController@getCarDetail');
    Route::get('car_model/show/carbrand/{id}', 'CarModelController@getCarModel');
    
    Route::get('insurance_provider', 'InsuranceProviderController@index');
    Route::get('insurance_provider/{id}', 'InsuranceProviderController@show');
    Route::post('insurance_provider/add', 'InsuranceProviderController@add');
    Route::put('insurance_provider/edit/{id}', 'InsuranceProviderController@edit');
    Route::delete('insurance_provider/delete/{id}', 'InsuranceProviderController@delete');
    
    // route for car service
    Route::get('car_service_record', 'CarServiceRecordController@index');
    Route::get('car_service_record/show/{id}', 'CarServiceRecordController@show');
    Route::post('car_service_record/add', 'CarServiceRecordController@add');
    Route::put('car_service_record/edit/{id}', 'CarServiceRecordController@edit');
    Route::delete('car_service_record/delete/{id}', 'CarServiceRecordController@delete');
    
    
    Route::get('car_service_checklist', 'CarServiceCheckListController@index');
    Route::get('car_service_checklist/show/{id}', 'CarServiceCheckListController@show');
    Route::post('car_service_checklist/add', 'CarServiceCheckListController@add');
    Route::put('car_service_checklist/edit/{id}', 'CarServiceCheckListController@edit');
    Route::delete('car_service_checklist/delete/{id}', 'CarServiceCheckListController@delete');
    //
});
// route for car brand


