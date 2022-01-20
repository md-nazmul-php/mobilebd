<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function all_laptop(){
    	return view('laptop_dashboard.all_laptop');
    }

     //add new product in laptop
    public function add_laptop(){
    	$brands=Brand::where('product_id','laptop')->get();
    	$categories=Category::where('product_id','laptop')->get();
    	return view('laptop_dashboard.add_new_laptop',['brands'=>$brands],['categories'=>$categories]);
    }
}
