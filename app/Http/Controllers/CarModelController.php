<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
class CarModelController extends Controller
{
    public function add(Request $request) {
        $carModel = CarModel::create($request->all());
        return response()->json($carModel);
    }

    public function index() {
        $data = CarModel::with('carBrand', 'carDetail')->get();
        return response()->json($data);
    }

    public function edit($id, Request $request) {
        $carModel = CarModel::findOrFail($id);
        if(!empty($carModel)) {
            $carModel['name'] = $request['name'];
            $carModel['active'] = $request['active'];
            $carModel['car_brand_id'] = $request['car_brand_id'];
            $carModel['car_detail_id'] = $request['car_detail_id'];
            $carModel->save();
            return response()->json($carModel);
        } else {
            return response()->json('Unable to save data into model.');
        }
        return response()->json('No car model were found with ID:' .$id);
    }

    public function delete($id) {
        $carModel = CarModel::findOrFail($id);
        $success =  $carModel->delete();
        if($succeess) {
            return response()->json('Deleted successfully');
        } else {
            return response()->json('Unable to delete successfully');
        }
    }

    public function show($id) {
        $carModel = CarModel::findOrFail($id);
        if(!empty($carModel)) {
            return response()->json($carModel);
        } else {
            return response()->json('No data were found with ID: '.$id);
        }
    }

    public function getCarDetail($id) {
        if(!is_null($id)){
        $carDetail = CarModel::findOrFail($id)->carDetail;
        if(!empty($carDetail)) {
            return response()->json($carDetail);
        } else {
            return response()->json('No car detail was found with associated ID');
            } 
        } 
        else {
            return response()->json('ID used is invalid');
        }
    }

    public function getCarBrand($id) {
        if(!is_null($id)) {
            $carBrand = CarBrand::findOrFail($id)->carModel;
            if(!empty($carBrand)) {
                return response()->json($carBrand);            
            } else {
                return response()->json('No car brand data found');
            }
        }
        else {
            return response()->json('ID requested is invalid.');
        }
    }
}
