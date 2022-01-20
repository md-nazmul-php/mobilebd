<?php

namespace App\Http\Controllers;
use App\Models\Title;
use App\Models\Favicon;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
	// for title & meta page
    public function title_meta(){
    	$titles=Title::where('id','1')->first();
    	return view('site_settings.title_meta',['titles'=>$titles]);
    }

    // save Site title and meta description to database
    public function save_title_meta(Request $request){
    	// for Validation
    	$request->validate([
    		'title'=>'required|min:10|max:60',
    		'meta'=>'required|min:60|max:160',
            'key_words'=>'required|max:250'
    	]);
    	// Update Site title and meta description
    	$title=Title::where('id','1')->first();
    	$title->title = $request->title;
    	$title->meta = $request->meta;
        $title->key_words = $request->key_words;
    	$save = $title->save();

    	if($save){
    		return back()->with('success','Saved successfully');
    	}else{
    		return back()->with('fail','Have problem to save');
    	}
    }
    // end title & meta page

    // start Favicon page
    public function show_favi_logo(){
    	$favicons=Favicon::where('id','1')->first();
    	return view('site_settings.favi_logo',['favicons'=>$favicons]);
    }

    // save the favicon to database
    public function save_favi_logo(Request $request){
        // img send to favicon directoy
        if ($request->file('favicon_img')) {
            $fa_image=$request->file('favicon_img');
            $faviImgName=$fa_image->getClientOriginalName();
            $fa_image->move(public_path('admin_dashboard/favicon'),$faviImgName);
        }else{
            $faviImgName=$request->faviImgName;
        }
        // img send to logo directoy
        if ($request->file('logo_img')) {
            $lo_image=$request->file('logo_img');
            $logoImgName=$lo_image->getClientOriginalName();
            $lo_image->move(public_path('admin_dashboard/logo'),$logoImgName);
        }else{
            $logoImgName=$request->logoImgName;
        }
        
        $data_img=Favicon::where('id','1')->first();
        $data_img->favicon=$faviImgName;
        $data_img->logo=$logoImgName;
        $save=$data_img->save();

        if($save){
    		return back()->with('success','Saved successfully');
    	}else{
    		return back()->with('fail','Have problem to save');
    	}
    }

    // end Favicon page
}
