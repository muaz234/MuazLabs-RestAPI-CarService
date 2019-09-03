<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarServiceRecord;
class CarServiceRecordController extends Controller
{
    //

    public function index() {
        return response()->json(CarServiceRecord::with('carDetail')->all());
    }

    public function add(Request $request) {
        $data = CarServiceRecord::create($request->all());
        if(!empty($data)) {
            return response()->json($data);
        } else {
            return response()->json('Unable to complete request. No data found.');
        }
    }

    public function show($id) {
        if(!is_null($id)) {
            $data = CarServiceRecord::with('carDetail')->get($id);
            if(!empty($data)){
                return response()->json($data);
            } else {
                return response()->json('Unable to perform request. No data found');
            }
        } else {
            return response()->json('Unable to fetch request. No ID passed.');
        }
    }

    public function edit($id, Request $request) {
        if(!is_null($id))
        {
            $data = CarServiceRecord::findOrFail($id);
            if(!empty($data)) {
                $data->car_detail_id = $request->car_detail_id;
                $data->part_changed = $request->part_changed;
                $data->total_cost = $request->total_cost;
                $data->receipt = $request->receipt;
                $data->mileage = $request->mileage;
                $data->service_on = $request->service_on;
                $data->remarks = $request->remarks;
                $data->update();
                return response()->json($data);
            } 
            else 
            {
                return response()->json('Unable to update data. Please retry.');
            }
        } 
        else 
        {
            return response()->json('Unable to process your request. No id passed.');
        }
    }

    public function delete($id)
    {
        if(!is_null($id)) {
            $data = CarServiceRecord::findOrFail($id);
            $success = $data->delete();
            if($success) {
                return response()->json('Car Service Record deleted successfully.');
            } else {
                return response()->json('Unable to delete Car Service Record');
            }
        } else 
        {
            return response()->json('Unable to process your request. No ID passed.');        
        }
        
    }
}
