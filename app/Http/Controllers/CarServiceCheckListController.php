<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarServiceCheckList;
class CarServiceCheckListController extends Controller
{
    //

    public function index() 
    {
        return response()->json(CarServiceCheckList::with('carDetail')->get());
    }

    public function show($id) 
    {
        return response()->json(CarServiceCheckList::with('carDetail')->get($id));
    }

    public function add(Request $request) 
    {

        $data = CarServiceCheckList::create($request->all());
        return response()->json(['Car ServiceCheckList has been created successfully', $data]);
    }

    public function edit($id, Request $request) 
    {
        $data = CarServiceCheckList::findOrFail($id);
        if(!empty($data)) 
        {
            $data->title = $request->title;
            $data->expected_mileage = $request->expected_mileage;
            $data->time_interval = $request->time_interval;
            $data->due_on = $request->due_on;
            $data->completed = $request->completed;
            $data->remarks = $request->remarks;
            $data->update();
            return response()->json(['Data updated successfully', $data]);
        } 
        else 
        {
            return response()->json('Unable to modify data. No data were found with the ID passed.');
        }
    }

    public function delete($id) 
    {
        $data = CarServiceCheckList::findOrFail($id);
        if(!empty($data)) 
        {
            $data->delete();
            return response()->json('Deleted successfully');
        }
        else 
        {
            return response()->json('Unable to delete CarService CheckList. Please try again.');
        }
    }
}
