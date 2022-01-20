<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
  // Start mobile =========================
    // View mobile Category
    public function mobile_category(){
        $categories=Category::with('mobilecategory')->where('product_id','mobile')->get();
        return view('mobile_dashboard.category_mobile',['categories'=>$categories]);
    }

    // add mobile Category
    public function mobile_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $mobile_cat=New Category;
        $mobile_cat->category_name = $request->category_name;
        $mobile_cat->created_by = $request->created_by;
        $mobile_cat->product_id = $request->product_id;
        $mobile_cat->description = $request->description;
        $save = $mobile_cat->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

     // view mobile brand edit page
    public function mobile_category_edit($categoryID){
        $categoris=Category::where('product_id','mobile')->get();
        $mobile_cat_edit= Category::where('id',$categoryID)->first();
        return view('mobile_dashboard.edit_category_mobile',['categoris'=>$categoris],['mobile_cat_edit'=>$mobile_cat_edit]);   
    }

    // save mobile bradn edted page
    public function mobile_category_edit_save(Request $request){
        $mobile_cat_edit= Category::where('id',$request->id)->first();
        $mobile_cat_edit->category_name = $request->category_name;
        $mobile_cat_edit->description = $request->description;
        $save_change = $mobile_cat_edit->save();

        if($save_change){
            return redirect(route('mobile.category'))->with('actionSM','The Category Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete mobile Category
    public function delete_mobile_category($categoryID){
        $one_category=Category::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End mobile ==========================


  // Start Camera ==============
    // View Camera Category
    public function camera_category(){
    	$categoris=Category::where('product_id','camera')->get();
    	return view('camera_dashboard.category_camera',['categoris'=>$categoris]);
    }

    // add Camera Category
    public function camera_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
    	$camera_cat=New Category;
    	$camera_cat->category_name = $request->category_name;
    	$camera_cat->created_by = $request->created_by;
        $camera_cat->product_id = $request->product_id;
        $camera_cat->description = $request->description;
    	$save = $camera_cat->save();

    	if($save){
    		return back()->with('success','Saved successfully');
    	}else{
    		return back()->with('fail','Have problem to save');
    	}
    }

     // view Camera brand edit page
    public function camera_category_edit($categoryID){
        $categoris=Category::where('product_id','camera')->get();
        $camera_cat_edit= Category::where('id',$categoryID)->first();
        return view('camera_dashboard.edit_category_camera',['categoris'=>$categoris],['camera_cat_edit'=>$camera_cat_edit]);   
    }

    // save Camera bradn edted page
    public function camera_category_edit_save(Request $request){
        $camera_cat_edit= Category::where('id',$request->id)->first();
        $camera_cat_edit->category_name = $request->category_name;
        $camera_cat_edit->description = $request->description;
        $save_change = $camera_cat_edit->save();

        if($save_change){
            return redirect(route('camera.category'))->with('actionSM','The Category Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete Camera Category
    public function delete_camera_category($categoryID){
        $one_category=Category::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End Camera =======================


// Start laptop =========================
    // View laptop Category
    public function laptop_category(){
        $categoris=Category::where('product_id','laptop')->get();
        return view('laptop_dashboard.category_laptop',['categoris'=>$categoris]);
    }

    // add laptop Category
    public function laptop_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $laptop_cat=New Category;
        $laptop_cat->category_name = $request->category_name;
        $laptop_cat->created_by = $request->created_by;
        $laptop_cat->product_id = $request->product_id;
        $laptop_cat->description = $request->description;
        $save = $laptop_cat->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

     // view laptop brand edit page
    public function laptop_category_edit($categoryID){
        $categoris=Category::where('product_id','laptop')->get();
        $laptop_cat_edit= Category::where('id',$categoryID)->first();
        return view('laptop_dashboard.edit_category_laptop',['categoris'=>$categoris],['laptop_cat_edit'=>$laptop_cat_edit]);   
    }

    // save laptop bradn edted page
    public function laptop_category_edit_save(Request $request){
        $laptop_cat_edit= Category::where('id',$request->id)->first();
        $laptop_cat_edit->category_name = $request->category_name;
        $laptop_cat_edit->description = $request->description;
        $save_change = $laptop_cat_edit->save();

        if($save_change){
            return redirect(route('laptop.category'))->with('actionSM','The Category Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete laptop Category
    public function delete_laptop_category($categoryID){
        $one_category=Category::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End laptop ==========================


// Start smartwatch =========================
    // View smartwatch Category
    public function smartwatch_category(){
        $categoris=Category::where('product_id','smartwatch')->get();
        return view('smartwatch_dashboard.category_smartwatch',['categoris'=>$categoris]);
    }

    // add smartwatch Category
    public function smartwatch_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $smartwatch_cat=New Category;
        $smartwatch_cat->category_name = $request->category_name;
        $smartwatch_cat->created_by = $request->created_by;
        $smartwatch_cat->product_id = $request->product_id;
        $smartwatch_cat->description = $request->description;
        $save = $smartwatch_cat->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

     // view smartwatch brand edit page
    public function smartwatch_category_edit($categoryID){
        $categoris=Category::where('product_id','smartwatch')->get();
        $smartwatch_cat_edit= Category::where('id',$categoryID)->first();
        return view('smartwatch_dashboard.edit_category_smartwatch',['categoris'=>$categoris],['smartwatch_cat_edit'=>$smartwatch_cat_edit]);   
    }

    // save smartwatch bradn edted page
    public function smartwatch_category_edit_save(Request $request){
        $smartwatch_cat_edit= Category::where('id',$request->id)->first();
        $smartwatch_cat_edit->category_name = $request->category_name;
        $smartwatch_cat_edit->description = $request->description;
        $save_change = $smartwatch_cat_edit->save();

        if($save_change){
            return redirect(route('smartwatch.category'))->with('actionSM','The Category Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete smartwatch Category
    public function delete_smartwatch_category($categoryID){
        $one_category=Category::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End smartwatch ==========================

// Start tablet =========================
    // View tablet Category
    public function tablet_category(){
        $categoris=Category::where('product_id','tablet')->get();
        return view('tablet_dashboard.category_tablet',['categoris'=>$categoris]);
    }

    // add tablet Category
    public function tablet_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $tablet_cat=New Category;
        $tablet_cat->category_name = $request->category_name;
        $tablet_cat->created_by = $request->created_by;
        $tablet_cat->product_id = $request->product_id;
        $tablet_cat->description = $request->description;
        $save = $tablet_cat->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

     // view tablet brand edit page
    public function tablet_category_edit($categoryID){
        $categoris=Category::where('product_id','tablet')->get();
        $tablet_cat_edit= Category::where('id',$categoryID)->first();
        return view('tablet_dashboard.edit_category_tablet',['categoris'=>$categoris],['tablet_cat_edit'=>$tablet_cat_edit]);   
    }

    // save tablet bradn edted page
    public function tablet_category_edit_save(Request $request){
        $tablet_cat_edit= Category::where('id',$request->id)->first();
        $tablet_cat_edit->category_name = $request->category_name;
        $tablet_cat_edit->description = $request->description;
        $save_change = $tablet_cat_edit->save();

        if($save_change){
            return redirect(route('tablet.category'))->with('actionSM','The Category Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }

    // delete tablet Category
    public function delete_tablet_category($categoryID){
        $one_category=Category::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End tablet ==========================


}
