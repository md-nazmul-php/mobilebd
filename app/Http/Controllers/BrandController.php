<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

// Start Mobile =====================================
    // View Mobile Brand
    public function mobile_brand(){
        $brands=Brand::where('product_id','mobile')->get();
        return view('mobile_dashboard.brand_mobile',['brands'=>$brands]);
    }

     public function mobile_brand_save(Request $request){
        $request->validate([
            'brand_name'=>'required'
        ]);

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $mobile_brand=New Brand;
        $mobile_brand->brand_name = $request->brand_name;
        $mobile_brand->product_id = $request->product_id;
        $mobile_brand->created_by = $request->created_by;
        $mobile_brand->description = $request->description;
        $mobile_brand->brand_img = $imgName;
        $save = $mobile_brand->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }
    // view Mobile brand edit page
    public function mobile_brand_edit($brandID){
        $brands=Brand::where('product_id','mobile')->get();
        $mobile_brand_edit= Brand::where('id',$brandID)->first();
        return view('mobile_dashboard.edit_brand_mobile',['brands'=>$brands],['mobile_brand_edit'=>$mobile_brand_edit]);
        
    }
    // save Mobile bradn edted page
    public function mobile_brand_edit_save(Request $request){

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $mobile_brand_edit= Brand::where('id',$request->id)->first();
        $mobile_brand_edit->brand_name = $request->brand_name;
        $mobile_brand_edit->description = $request->description;
        $mobile_brand_edit->brand_img = $imgName;
        $save_change = $mobile_brand_edit->save();

        if($save_change){
            return redirect(route('mobile.brand'))->with('actionSM','The Brand Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete mobile Brand
    public function delete_mobile_brand($brandID){
        $one_barand=Brand::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }


 // End Mobile =====================================


// Start Camera =================================
    // View Camera Brand
    public function camera_brand(){
        $brands=Brand::where('product_id','camera')->get();
        return view('camera_dashboard.brand_camera',['brands'=>$brands]);
    }

    // add Camera Brand
    public function camera_brand_save(Request $request){
        $request->validate([
            'brand_name'=>'required'
        ]);

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

    	$camera_brand=New Brand;
    	$camera_brand->brand_name = $request->brand_name;
        $camera_brand->product_id = $request->product_id;
        $camera_brand->created_by = $request->created_by;
        $camera_brand->description = $request->description;
        $camera_brand->brand_img = $imgName;
    	$save = $camera_brand->save();

    	if($save){
    		return back()->with('success','Saved successfully');
    	}else{
    		return back()->with('fail','Have problem to save');
    	}
    }
    // view Camera brand edit page
    public function camera_brand_edit($brandID){
        $brands=Brand::where('product_id','camera')->get();
        $camera_brand_edit= Brand::where('id',$brandID)->first();
        return view('camera_dashboard.edit_brand_camera',['brands'=>$brands],['camera_brand_edit'=>$camera_brand_edit]);
        
    }
    // save Camera bradn edted page
    public function camera_brand_edit_save(Request $request){

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $camera_brand_edit= Brand::where('id',$request->id)->first();
        $camera_brand_edit->brand_name = $request->brand_name;
        $camera_brand_edit->description = $request->description;
        $camera_brand_edit->brand_img = $imgName;
        $save_change = $camera_brand_edit->save();

        if($save_change){
            return redirect(route('camera.brand'))->with('actionSM','The Brand Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete Camera Brand
    public function delete_camera_brand($brandID){
        $one_barand=Brand::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End Camera =====================================


// Start Laptop =====================================
    // View laptop Brand
    public function laptop_brand(){
        $brands=Brand::where('product_id','laptop')->get();
        return view('laptop_dashboard.brand_laptop',['brands'=>$brands]);
    }

     public function laptop_brand_save(Request $request){
        $request->validate([
            'brand_name'=>'required'
        ]);

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $laptop_brand=New Brand;
        $laptop_brand->brand_name = $request->brand_name;
        $laptop_brand->product_id = $request->product_id;
        $laptop_brand->created_by = $request->created_by;
        $laptop_brand->description = $request->description;
        $laptop_brand->brand_img = $imgName;
        $save = $laptop_brand->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }
    // view laptop brand edit page
    public function laptop_brand_edit($brandID){
        $brands=Brand::where('product_id','laptop')->get();
        $laptop_brand_edit= Brand::where('id',$brandID)->first();
        return view('laptop_dashboard.edit_brand_laptop',['brands'=>$brands],['laptop_brand_edit'=>$laptop_brand_edit]);
        
    }
    // save laptop bradn edted page
    public function laptop_brand_edit_save(Request $request){

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $laptop_brand_edit= Brand::where('id',$request->id)->first();
        $laptop_brand_edit->brand_name = $request->brand_name;
        $laptop_brand_edit->description = $request->description;
        $laptop_brand_edit->brand_img = $imgName;
        $save_change = $laptop_brand_edit->save();

        if($save_change){
            return redirect(route('laptop.brand'))->with('actionSM','The Brand Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete laptop Brand
    public function delete_laptop_brand($brandID){
        $one_barand=Brand::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End Laptop =====================================


// Start Smartwatch =====================================
    // View smartwatch Brand
    public function smartwatch_brand(){
        $brands=Brand::where('product_id','smartwatch')->get();
        return view('smartwatch_dashboard.brand_smartwatch',['brands'=>$brands]);
    }

     public function smartwatch_brand_save(Request $request){
        $request->validate([
            'brand_name'=>'required'
        ]);

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $smartwatch_brand=New Brand;
        $smartwatch_brand->brand_name = $request->brand_name;
        $smartwatch_brand->product_id = $request->product_id;
        $smartwatch_brand->created_by = $request->created_by;
        $smartwatch_brand->description = $request->description;
        $smartwatch_brand->brand_img = $imgName;
        $save = $smartwatch_brand->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }
    // view smartwatch brand edit page
    public function smartwatch_brand_edit($brandID){
        $brands=Brand::where('product_id','smartwatch')->get();
        $smartwatch_brand_edit= Brand::where('id',$brandID)->first();
        return view('smartwatch_dashboard.edit_brand_smartwatch',['brands'=>$brands],['smartwatch_brand_edit'=>$smartwatch_brand_edit]);
        
    }
    // save smartwatch bradn edted page
    public function smartwatch_brand_edit_save(Request $request){

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $smartwatch_brand_edit= Brand::where('id',$request->id)->first();
        $smartwatch_brand_edit->brand_name = $request->brand_name;
        $smartwatch_brand_edit->description = $request->description;
        $smartwatch_brand_edit->brand_img = $imgName;
        $save_change = $smartwatch_brand_edit->save();

        if($save_change){
            return redirect(route('smartwatch.brand'))->with('actionSM','The Brand Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete smartwatch Brand
    public function delete_smartwatch_brand($brandID){
        $one_barand=Brand::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End Smartwatch =====================================
    

// Start Tablet =======================================

// View tablet Brand
    public function tablet_brand(){
        $brands=Brand::where('product_id','tablet')->get();
        return view('tablet_dashboard.brand_tablet',['brands'=>$brands]);
    }

     public function tablet_brand_save(Request $request){
        $request->validate([
            'brand_name'=>'required'
        ]);

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $tablet_brand=New Brand;
        $tablet_brand->brand_name = $request->brand_name;
        $tablet_brand->product_id = $request->product_id;
        $tablet_brand->created_by = $request->created_by;
        $tablet_brand->description = $request->description;
        $tablet_brand->brand_img = $imgName;
        $save = $tablet_brand->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }
    // view tablet brand edit page
    public function tablet_brand_edit($brandID){
        $brands=Brand::where('product_id','tablet')->get();
        $tablet_brand_edit= Brand::where('id',$brandID)->first();
        return view('tablet_dashboard.edit_brand_tablet',['brands'=>$brands],['tablet_brand_edit'=>$tablet_brand_edit]);
        
    }
    // save tablet bradn edted page
    public function tablet_brand_edit_save(Request $request){

         if ($request->file('brand_img')) {
            $image=$request->file('brand_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/brand_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }

        $tablet_brand_edit= Brand::where('id',$request->id)->first();
        $tablet_brand_edit->brand_name = $request->brand_name;
        $tablet_brand_edit->description = $request->description;
        $tablet_brand_edit->brand_img = $imgName;
        $save_change = $tablet_brand_edit->save();

        if($save_change){
            return redirect(route('tablet.brand'))->with('actionSM','The Brand Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete tablet Brand
    public function delete_tablet_brand($brandID){
        $one_barand=Brand::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }


// End Tablet =========================================

}
