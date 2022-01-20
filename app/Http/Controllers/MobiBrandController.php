<?php

namespace App\Http\Controllers;
use App\Models\Mobibrandname;
use Illuminate\Http\Request;

class MobiBrandController extends Controller
{
// Start Mobile =====================================
    // View Mobile Brand
    public function mobile_brand(){
        $brands=Mobibrandname::latest()->get();
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

        $mobile_brand=New Mobibrandname;
        $mobile_brand->brand_name = $request->brand_name;
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
        $brands=Mobibrandname::latest()->get();
        $mobile_brand_edit= Mobibrandname::where('id',$brandID)->first();
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

        $mobile_brand_edit= Mobibrandname::where('id',$request->id)->first();
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
        $one_barand=Mobibrandname::where('id',$brandID)->first();
        $barand_delete=$one_barand->delete();
        if($barand_delete){
            return back()->with('actionSM','The Brand deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }
}
