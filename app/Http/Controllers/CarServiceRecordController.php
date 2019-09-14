<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarServiceRecord;
class CarServiceRecordController extends Controller
{
    //

    public function index() {
        return response()->json(CarServiceRecord::with('carDetail')->get());
    }

    public function add(Request $request) {
        if($request->hasFile('receipt')){
            $allowedExtension = ['png', 'PNG', 'jpg', 'JPG'];
            $file = $request->file('receipt');
            $check = in_array($file->getClientOriginalExtension(),$allowedExtension);
            if($check) {
                $filename = $request->receipt->store('receipt', ['disk'=> 'public']);
                $data = CarServiceRecord::create([
                    'car_detail_id' => $request->car_detail_id,
                    'part_changed' => $request->part_changed,
                    'total_cost' => $request->total_cost,
                    'receipt' => $filename,
                    'mileage' => $request->mileage,
                    'service_on' => $request->service_on,
                    'remarks' => $request->remarks
                ]);
            }
        } else {
            $data = CarServiceRecord::create($request->all());
        }
        if(!empty($data)) {
            return response()->json($data);
        } else {
            return response()->json('Unable to complete request. No data found.');
        }
    }

    public function show($id) {

        $data = CarServiceRecord::with('carDetail')->where('id', $id)->get();
            if(!empty($data)){
                return response()->json($data);
            } else {
                return response()->json('Unable to perform request. No data found');
            }
    }

    public function edit($id, Request $request) {
            
        $data = CarServiceRecord::findOrFail($id);
            if(!empty($data)) 
            {
                $data->car_detail_id = $request->car_detail_id;
                $data->part_changed = $request->part_changed;
                $data->total_cost = $request->total_cost;
                // $data->receipt = $request->receipt;
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
    

    public function delete($id)
    {
        $data = CarServiceRecord::findOrFail($id);
            if(!empty($data)) 
            {
                Storage::disk('public')->delete('receipt/'.$data->receipt); //remove receipt on delete
                $data->delete();
                return response()->json('Car Service Record deleted successfully.');
            } else 
            {
                return response()->json('Unable to delete Car Service Record');
            }
    }
}
