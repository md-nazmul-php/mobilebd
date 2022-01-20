<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Kamrul;
use Illuminate\Http\Request;

class CameraController extends Controller
{
     public function all_camera(){
    	return view('camera_dashboard.all_camera');
    }

    //add new product in Camera
    public function add_camera(){

    	$brands=Brand::where('product_id','mobile')->get();
    	$categories=Category::where('product_id','mobile')->get();
    	$ratings=Rating::where('product_id','mobile')->get();
    	return view('camera_dashboard.add_new_camera',['categories'=>$categories],['brands'=>$brands])->with(['ratings'=>$ratings]);
    }

    public function add_new_camera(Request $request){
    	$mobile_ckeck = $request->input('camera_video');

    	return $mobile_ckeck;
    	
    }
    
   
}
