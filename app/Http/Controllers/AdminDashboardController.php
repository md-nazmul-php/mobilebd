<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{

	// go to login page
    public function login(){
    	return view('admin_dashboard.login');
    }

// login check = Authentication checing
    public function auth_check(Request $request){
    	//validation login info
    	$request->validate([
    		'email'=>'required|email',
    		'password'=>'required|min:5|max:12'
    	]);
    	//check admin info with database

    	//check email
    	$adminInfo=Admin::where('email',$request->email)->first();

    	if(!$adminInfo){
    		return back()->with('fail','Incorrect Email');
    	}else{
    		//check password
    		if(Hash::check($request->password, $adminInfo->password)){
    			$request->session()->put('LoggedAdmin',$adminInfo->id);
    			return redirect('dashboard');


    		}else{
    			return back()->with('fail','Incorrect Password');
    		}
    	}
    }
    // go to dashboard after login
    public function view_dashboard(){
    	// $data=['LoggedAdminInfo'=>Admin::where('id',session('LoggedAdmin'))->first()];
    	// return view('admin_dashboard.dashboard',$data);
    	$data=Admin::where('id',session('LoggedAdmin'))->first();
    		if($data){
				session()->put([
    				'id'=> $data->id,
    				'user_name'=> $data->user_name,
    				'admin_type'=> $data->admin_type,
    				'name'=> $data->name,
    				'profile_photo'=> $data->profile_photo
    			]);
    			return view('admin_dashboard.dashboard')->with('welcome','Welcome!');
    		}
    }

// Logout function
    public function admin_logout(){
    	if(session()->has('LoggedAdmin')){
    		session()->pull('LoggedAdmin','id','user_name','admin_type','name','profile_photo');
    		return redirect('/admin-login');
    	}
    }


// add new admin
    public function add_admin(){
    	return view('admin_dashboard.add_new_admin');
    }
// save new admin to database
    public function save_admin(Request $request){
    	// for Validation
    	$request->validate([
    		'user_name'=>'required|unique:admins',
    		'admin_type'=>'required',
    		'name'=>'required',
    		'email'=>'required|email|unique:admins',
    		'password'=>'required|min:5|max:32'
    	]);
    	// insert admin 
    	$admin= new Admin;
    	$admin->user_name = $request->user_name;
    	$admin->admin_type = $request->admin_type;
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = Hash::make($request->password);
    	$save = $admin->save();

    	if($save){
    		return back()->with('success','New admin added successfully');
    	}else{
    		return back()->with('fail','Have problem to add this admin');
    	}
    }

    // view all admins
    public function all_the_admins(){
    	$admins=Admin::latest()->get();
    	return view('admin_dashboard.all_admins',['admins'=>$admins]);
    }

    public function admin_profile(){
    	$admin_profile=Admin::where('id',session('id'))->first();
    	return view('admin_dashboard.admin_profile',['admin_profile'=>$admin_profile]);
    }
    
    // edit profile
    public function show_edit_profile(){
        $admin_profile=Admin::where('id',session('id'))->first();
        return view('admin_dashboard.edit_profile',['admin_profile'=>$admin_profile]);
    }
    
    // Save edited profile 
    public function save_edit_profile(Request $request){
        
        // for Validation
        $request->validate([
            'name'=>'required'
        ]);
 
        if ($request->file('profile_img')) {
            $image=$request->file('profile_img');
            $imgName=$image->getClientOriginalName();
            $image->move(public_path('admin_dashboard/profile_img'),$imgName);
        }else{
            $imgName=$request->imgName;
        }
        
        $admin_profile=Admin::where('id',session('id'))->first();
        $admin_profile->name=$request->name;
        $admin_profile->profile_photo=$imgName;
        $save=$admin_profile->save();

        if($save){
            session()->put('profile_photo', $admin_profile->profile_photo);
            return redirect('/dashboard/profile/admin-profile')->with('success','Profile info changed successfully');
        }else{
            return back()->with('fail','Have problem to Change');
        }
    }

    // Show change password page
    public function show_password(){
        return view('admin_dashboard.change_pass');
    }
    
    // change admin profile password
    public function change_password(Request $request){
        // for Validation
        $request->validate([
            'new_password'=>'required|min:5|max:32'
        ]);
        //check user_name and password
        //$h_pass=Hash::make($request->old_password);
        $admin_info=Admin::where('user_name',session('user_name'))->first();

        if(!Hash::check($request->old_password, $admin_info->password)){
            return back()->with('fail','Incorrect Recent Password');
        }else{
           // change admin password
            $admin_info->password = Hash::make($request->new_password);
            $changed = $admin_info->save();

            if($changed){
                return back()->with('success','Password Changed successfully');
            }else{
                return back()->with('fail','Have problem to Change Password');
            }
        }
        
    }


}
