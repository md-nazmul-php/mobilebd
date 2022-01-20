<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;

class TabletController extends Controller
{
    public function all_tablet(){
    	return view('tablet_dashboard.all_tablet');
    }

     //add new product in tablet
    public function add_tablet(){
    	$brands=Brand::where('product_id','tablet')->get();
    	$categories=Category::where('product_id','tablet')->get();
    	return view('tablet_dashboard.add_new_tablet',['brands'=>$brands],['categories'=>$categories]);
    }
}
