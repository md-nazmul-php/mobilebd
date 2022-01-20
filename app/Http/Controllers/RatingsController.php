<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingsController extends Controller
{

// Start mobile =============================
    // View mobile ratings
    public function mobile_rating(){
        $ratings=Rating::where('product_id','mobile')->get();
        return view('mobile_dashboard.rating_mobile',['ratings'=>$ratings]);
    }

    // add mobile rating
    public function mobile_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
        $mobile_rating=New Rating;
        $mobile_rating->rating_name = $request->rating_name;
        $mobile_rating->product_id = $request->product_id;
        $mobile_rating->created_by = $request->created_by;
        $mobile_rating->description = $request->description;
        $save = $mobile_rating->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

    // view mobile brand edit page
    public function mobile_rating_edit($ratingID){
        $ratings=Rating::where('product_id','mobile')->get();
        $mobile_rating_edit= Rating::where('id',$ratingID)->first();
        return view('mobile_dashboard.edit_rating_mobile',['ratings'=>$ratings],['mobile_rating_edit'=>$mobile_rating_edit]);   
    }

    // save mobile bradn edted page
    public function mobile_rating_edit_save(Request $request){
        $mobile_rating_edit= Rating::where('id',$request->id)->first();
        $mobile_rating_edit->rating_name = $request->rating_name;
        $mobile_rating_edit->description = $request->description;
        $save_change = $mobile_rating_edit->save();

        if($save_change){
            return redirect(route('mobile.rating'))->with('actionSM','The Rating Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }


    // delete mobile rating
     public function delete_mobile_rating($id){
        $one_rating=Rating::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End mobile =============================

// Start Camera =============================
    // View Camera ratings
    public function camera_rating(){
    	$ratings=Rating::where('product_id','camera')->get();
    	return view('camera_dashboard.rating_camera',['ratings'=>$ratings]);
    }

    // add Camera rating
    public function camera_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
    	$camera_rating=New Rating;
    	$camera_rating->rating_name = $request->rating_name;
        $camera_rating->product_id = $request->product_id;
    	$camera_rating->created_by = $request->created_by;
        $camera_rating->description = $request->description;
    	$save = $camera_rating->save();

    	if($save){
    		return back()->with('success','Saved successfully');
    	}else{
    		return back()->with('fail','Have problem to save');
    	}
    }

    // view Camera brand edit page
    public function camera_rating_edit($ratingID){
        $ratings=Rating::where('product_id','camera')->get();
        $camera_rating_edit= Rating::where('id',$ratingID)->first();
        return view('camera_dashboard.edit_rating_camera',['ratings'=>$ratings],['camera_rating_edit'=>$camera_rating_edit]);   
    }

    // save Camera bradn edted page
    public function camera_rating_edit_save(Request $request){
        $camera_rating_edit= Rating::where('id',$request->id)->first();
        $camera_rating_edit->rating_name = $request->rating_name;
        $camera_rating_edit->description = $request->description;
        $save_change = $camera_rating_edit->save();

        if($save_change){
            return redirect(route('camera.rating'))->with('actionSM','The Rating Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }


    // delete Camera rating
     public function delete_camera_rating($id){
        $one_rating=Rating::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End Camera =============================


// Start laptop =============================
    // View laptop ratings
    public function laptop_rating(){
        $ratings=Rating::where('product_id','laptop')->get();
        return view('laptop_dashboard.rating_laptop',['ratings'=>$ratings]);
    }

    // add laptop rating
    public function laptop_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
        $laptop_rating=New Rating;
        $laptop_rating->rating_name = $request->rating_name;
        $laptop_rating->product_id = $request->product_id;
        $laptop_rating->created_by = $request->created_by;
        $laptop_rating->description = $request->description;
        $save = $laptop_rating->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

    // view laptop brand edit page
    public function laptop_rating_edit($ratingID){
        $ratings=Rating::where('product_id','laptop')->get();
        $laptop_rating_edit= Rating::where('id',$ratingID)->first();
        return view('laptop_dashboard.edit_rating_laptop',['ratings'=>$ratings],['laptop_rating_edit'=>$laptop_rating_edit]);   
    }

    // save laptop bradn edted page
    public function laptop_rating_edit_save(Request $request){
        $laptop_rating_edit= Rating::where('id',$request->id)->first();
        $laptop_rating_edit->rating_name = $request->rating_name;
        $laptop_rating_edit->description = $request->description;
        $save_change = $laptop_rating_edit->save();

        if($save_change){
            return redirect(route('laptop.rating'))->with('actionSM','The Rating Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }


    // delete laptop rating
     public function delete_laptop_rating($id){
        $one_rating=Rating::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End laptop =============================


// Start smartwatch =============================
    // View smartwatch ratings
    public function smartwatch_rating(){
        $ratings=Rating::where('product_id','smartwatch')->get();
        return view('smartwatch_dashboard.rating_smartwatch',['ratings'=>$ratings]);
    }

    // add smartwatch rating
    public function smartwatch_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
        $smartwatch_rating=New Rating;
        $smartwatch_rating->rating_name = $request->rating_name;
        $smartwatch_rating->product_id = $request->product_id;
        $smartwatch_rating->created_by = $request->created_by;
        $smartwatch_rating->description = $request->description;
        $save = $smartwatch_rating->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

    // view smartwatch brand edit page
    public function smartwatch_rating_edit($ratingID){
        $ratings=Rating::where('product_id','smartwatch')->get();
        $smartwatch_rating_edit= Rating::where('id',$ratingID)->first();
        return view('smartwatch_dashboard.edit_rating_smartwatch',['ratings'=>$ratings],['smartwatch_rating_edit'=>$smartwatch_rating_edit]);   
    }

    // save smartwatch bradn edted page
    public function smartwatch_rating_edit_save(Request $request){
        $smartwatch_rating_edit= Rating::where('id',$request->id)->first();
        $smartwatch_rating_edit->rating_name = $request->rating_name;
        $smartwatch_rating_edit->description = $request->description;
        $save_change = $smartwatch_rating_edit->save();

        if($save_change){
            return redirect(route('smartwatch.rating'))->with('actionSM','The Rating Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }


    // delete smartwatch rating
     public function delete_smartwatch_rating($id){
        $one_rating=Rating::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End smartwatch =============================


// Start tablet =============================
    // View tablet ratings
    public function tablet_rating(){
        $ratings=Rating::where('product_id','tablet')->get();
        return view('tablet_dashboard.rating_tablet',['ratings'=>$ratings]);
    }

    // add tablet rating
    public function tablet_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
        $tablet_rating=New Rating;
        $tablet_rating->rating_name = $request->rating_name;
        $tablet_rating->product_id = $request->product_id;
        $tablet_rating->created_by = $request->created_by;
        $tablet_rating->description = $request->description;
        $save = $tablet_rating->save();

        if($save){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

    // view tablet brand edit page
    public function tablet_rating_edit($ratingID){
        $ratings=Rating::where('product_id','tablet')->get();
        $tablet_rating_edit= Rating::where('id',$ratingID)->first();
        return view('tablet_dashboard.edit_rating_tablet',['ratings'=>$ratings],['tablet_rating_edit'=>$tablet_rating_edit]);   
    }

    // save tablet bradn edted page
    public function tablet_rating_edit_save(Request $request){
        $tablet_rating_edit= Rating::where('id',$request->id)->first();
        $tablet_rating_edit->rating_name = $request->rating_name;
        $tablet_rating_edit->description = $request->description;
        $save_change = $tablet_rating_edit->save();

        if($save_change){
            return redirect(route('tablet.rating'))->with('actionSM','The Rating Edited successfully');
        }else{
            return back()->with('actionSM','Have problem to save');
        }
    }


    // delete tablet rating
     public function delete_tablet_rating($id){
        $one_rating=Rating::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End tablet =============================


}
