<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsuranceProvider;
class InsuranceProviderController extends Controller
{
    //

    public function add(Request $request) {
        $data = InsuranceProvider::create($request->all());
        return response()->json($data);
    }

    public function index() {
        return response()->json(InsuranceProvider::all());
    }

    public function show($id) {
        if(!is_null($id))
        {
            $insuranceProvider = InsuranceProvider::findOrFail($id);
            if(!empty($insuranceProvider))
            {
                return response()->json($insuranceProvider);    
            } 
            else 
            {
                return response()->json('No insurance provider found.');
            }
        } 
        else 
        {
            return response()->json('No data was found with ID: ' .$id);
        }
        
    }

    public function edit($id, Request $request) {
        
        $data = InsuranceProvider::findOrFail($id);
        if(!empty($data)) 
        {
            $data['name'] = $request['name'];
            $data['short_name'] = $request['short_name'];
            $data['active'] = $request['active'];
            $data->save();
            return response()->json($data);
        }
        else 
        {
            return response()->json('No insurance provider data found.');
        }
    }

    public function delete($id) {
        $data = InsuranceProvider::findOrFail($id);
        $success = $data->delete();
        if($success) 
        {
            return response()->json('Deleted successfully');
        } 
        else 
        {
            return response()->json('Unable to delete');
        }
    }
}
