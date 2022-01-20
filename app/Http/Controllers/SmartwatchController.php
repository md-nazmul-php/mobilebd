<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;

class SmartwatchController extends Controller
{
    public function all_smartwatch(){
    	return view('smartwatch_dashboard.all_smartwatch');
    }

     //add new product in smartwatch
    public function add_smartwatch(){
    	$brands=Brand::where('product_id','smartwatch')->get();
    	$categories=Category::where('product_id','smartwatch')->get();
    	return view('smartwatch_dashboard.add_new_smartwatch',['brands'=>$brands],['categories'=>$categories]);
    }
}
