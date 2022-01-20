<?php

namespace App\Http\Controllers;
use App\Models\Mobicatname;
use Illuminate\Http\Request;

class MobiCatController extends Controller
{
// Start mobile =========================
    // View mobile Category
    public function mobile_category(){
        $categories=Mobicatname::latest()->get();
        return view('mobile_dashboard.category_mobile',['categories'=>$categories]);
    }

    // add mobile Category
    public function mobile_category_save(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        $mobile_cat=New Mobicatname;
        $mobile_cat->category_name = $request->category_name;
        $mobile_cat->created_by = $request->created_by;
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
        $categoris=Mobicatname::latest()->get();
        $mobile_cat_edit= Mobicatname::where('id',$categoryID)->first();
        return view('mobile_dashboard.edit_category_mobile',['categoris'=>$categoris],['mobile_cat_edit'=>$mobile_cat_edit]);   
    }

    // save mobile bradn edted page
    public function mobile_category_edit_save(Request $request){
        $mobile_cat_edit= Mobicatname::where('id',$request->id)->first();
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
        $one_category=Mobicatname::where('id',$categoryID)->first();
        $cat_delete=$one_category->delete();
        if($cat_delete){
            return back()->with('deleteMS','The Category deleted successfully');
        }else{
            return back()->with('deleteMS','Have problem to delete');
        }
    }

  // End mobile ==========================
}
