<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarDetail;
class CarDetailController extends Controller
{
    //

    public function index() {
        return response()->json(CarDetail::all());
    }

    public function add(Request $request) {
        if(!empty($request)) {
            $carDetail = CarDetail::create($request->all());
        } else {
            return response()->json('Unable to save Car Detail');
        }
        return response()->json(['Data saved successfully', $carDetail]);
    }

    public function show($id) {
        $carDetail = CarDetail::findOrFail($id);
        if(!empty($carDetail)){
            return response()->json($carDetail);
        } else {
            return response()->json('No car details found');
        }
    }

    public function edit(Request $request, $id) {
        $carDetail = CarDetail::findOrFail($id);
        if(!empty($carDetail)){
            $data = $request->all();
            $carDetail['owner_name'] = $data['owner_name'];
            $carDetail['plate_no'] = $data['plate_no'];
            $carDetail['bought_on'] = $data['bought_on'];
            $carDetail['current_mileage'] = $data['current_mileage'];
            $carDetail['road_tax_expiry'] = $data['road_tax_expiry'];
            $carDetail['in_use'] = $data['in_use'];
            $carDetail->save($data);
            return response()->json($carDetail);
        } else {
            return response()->json('No data found.');
        }
    }

    public function delete($id) {
        if($id !=null){
        $carDetail = CarDetail::findOrFail($id);
        
        if($carDetail->delete()) {
            return response()->json('Car Detail deleted successfully.');
        } else {
            return response()->json('Unable to delete Car Detail.');
            }
        }else {
            return response()->json('Unable to delete Car Detail. No Id associated');

        }
    }
}
