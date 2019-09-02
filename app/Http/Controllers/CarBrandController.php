<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarBrand;
class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return response()->json(CarBrand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $car_brand = CarBrand::create($request->all());
        return response()->json($car_brand);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function showDetails($id){

        $car_detail = CarBrand::findOrFail($id)->carDetail;
        if(!empty($car_detail))
        {
            return response()->json($car_detail);
        } else {
            return response()->json('No car detail found with the ID');
        }
     }


    public function show($id)
    {
        //
        if(!is_null($id)){
            $car_brand = CarBrand::findOrFail($id);
            if(empty($car_brand)) {
                return response()->json('No car brand found.');
            }
            return response()->json($car_brand);
        } else {
            return response()->json('Invalid id used.');
        }
         
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $result = App\CarBrand::findOrFail($id);

        if(!empty($result)) {
            $data = $request->all();
            $result['brand_name'] = $data['brand_name'];
            $result['active'] = $data['active'];
            $result['car_detail_id'] = $data['car_detail_id'];
            $result->save($data);
            return response()->json($result);
        } else {
            $message = 'No result found';
            return response()->json($message);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $result = CarBrand::findOrFail($id);
        $success = $result->delete();
        if($success) {
            $message = "Delete successfully";
            return response()->json($message);
        } else {
            $message = "Delete not successful. Please try again";
            return response()->json($message);
        }
    }
}
