<?php

namespace App\Http\Controllers;
use App\Models\Mobiratingname;
use Illuminate\Http\Request;

class MobiRatingController extends Controller
{
// Start mobile =============================
    // View mobile ratings
    public function mobile_rating(){
        $ratings=Mobiratingname::latest()->get();
        return view('mobile_dashboard.rating_mobile',['ratings'=>$ratings]);
    }

    // add mobile rating
    public function mobile_rating_save(Request $request){
        $request->validate([
            'rating_name'=>'required'
        ]);
        $mobile_rating=New Mobiratingname;
        $mobile_rating->rating_name = $request->rating_name;
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
        $ratings=Mobiratingname::latest()->get();
        $mobile_rating_edit= Mobiratingname::where('id',$ratingID)->first();
        return view('mobile_dashboard.edit_rating_mobile',['ratings'=>$ratings],['mobile_rating_edit'=>$mobile_rating_edit]);   
    }

    // save mobile bradn edted page
    public function mobile_rating_edit_save(Request $request){
        $mobile_rating_edit= Mobiratingname::where('id',$request->id)->first();
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
        $one_rating=Mobiratingname::where('id',$id)->first();
        $rating_delete=$one_rating->delete();
        if($rating_delete){
            return back()->with('actionSM','The rating deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }

 // End mobile =============================
}
