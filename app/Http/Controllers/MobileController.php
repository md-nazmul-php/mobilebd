<?php

namespace App\Http\Controllers;
use App\Models\Mobibrandname;
use App\Models\Mobicatname;
use App\Models\Mobiratingname;

use App\Models\Mobilepost;
use App\Models\Mobilespecone;
use App\Models\Mobilespectwo;
use App\Models\Mobilespecthree;
use App\Models\Mobilecategory;
use App\Models\Mobilevariant;
use App\Models\Mobileimage;
use App\Models\Mobilevideo;
use App\Models\Mobilerating;
use App\Models\Mobileoffer;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function all_mobile(){
        $allposts=Mobilepost::latest()->get();        
    	return view('mobile_dashboard.all_mobile',['allposts'=>$allposts]);
    }

    // show 'add new mobile post' page
    public function add_mobile(){
    	$brands=Mobibrandname::get();
    	$categories=Mobicatname::get();
    	$ratings=Mobiratingname::get();
    	return view('mobile_dashboard.add_new_mobile',['categories'=>$categories],['brands'=>$brands])->with(['ratings'=>$ratings]);
    }

//  add new post in Mobile Product ----------
    public function add_mobile_post(Request $request){
    // for adding product info/details
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'brand_name'=>'required',
            'category_name'=>'required'
        ]);
        $mobi_post=New Mobilepost;
        $mobi_post->added_by = $request->added_by;
        $mobi_post->title = $request->title;
        $mobi_post->description = $request->description;
        $mobi_post->brand_name = $request->brand_name;
            
            if($categories=$request->input('category_name')){
                $category_name=array();
                foreach($categories as $category){
                    $category_name[]=$category;
                }
                $category_names=implode(", ",$category_name);
            }
        $mobi_post->category_name = $category_names;
        $mobi_post->meta_title = $request->meta_title;
        $mobi_post->meta_description = $request->meta_description;
        $mobi_post->key_words = $request->key_words;
        $mobi_post->market_status = $request->market_status;
        $mobi_post->released = $request->released;
        $mobi_post->official_price = $request->official_price;
        $mobi_post->price_updated_on = $request->price_updated_on;
        $mobi_post->official_website = $request->official_website;
        $mobi_post->g_5g_check = $request->g_5g_check;
        $mobi_post->g_5g = $request->g_5g;
        $mobi_post->g_volte_check = $request->g_volte_check;
        $mobi_post->g_volte = $request->g_volte;
        $mobi_post->g_fingerprint_check = $request->g_fingerprint_check;
        $mobi_post->g_fingerprint = $request->g_fingerprint;
        $mobi_post->g_usb_check = $request->g_usb_check;
        $mobi_post->g_usb = $request->g_usb;
        $mobi_post->g_wireless_check = $request->g_wireless_check;
        $mobi_post->g_wireless = $request->g_wireless;
        $mobi_post->g_waterproof_check = $request->g_waterproof_check;
        $mobi_post->g_waterproof = $request->g_waterproof;
        $mobi_post->os = $request->os;
        $mobi_post->display = $request->display;
        $mobi_post->main_camera = $request->main_camera;
        $mobi_post->front_camera = $request->front_camera;
        $mobi_post->ram = $request->ram;
        $mobi_post->storage = $request->storage;
        $mobi_post->battery_capacity = $request->battery_capacity;
        $mobi_post->average_rating = $request->average_rating;
        $mobi_post->product_type = $request->product_type;
        $mobi_post->post_type = $request->post_type;
        if($request->file('product_img')){
            for ($i = 0; $i < 1; $i++) {
                $img_name = time().'-'.$request->file('product_img')[$i]->getClientOriginalName();
            }
        }
        $mobi_post->post_img = $img_name;
        $save_post = $mobi_post->save();

    // for adding product Specification One - 1
        if($save_post){
            $mobi_spec1=New Mobilespecone;
            $mobi_spec1->post_id=$mobi_post->id;
            $mobi_spec1->device_type_spc=$request->device_type_spc;
            $mobi_spec1->brand_spc=$request->brand_spc;
            $mobi_spec1->model_spc=$request->model_spc;
            $mobi_spec1->released_spc=$request->released_spc;
            $mobi_spec1->g_colours_spc=$request->g_colours_spc;
            $mobi_spec1->display_type_spc=$request->display_type_spc;
            $mobi_spec1->screen_size_spc=$request->screen_size_spc;
            $mobi_spec1->aspect_ratio_spc=$request->aspect_ratio_spc;
            $mobi_spec1->bezel_less_spc_check=$request->bezel_less_spc_check;
            $mobi_spec1->bezel_less_spc=$request->bezel_less_spc;
            $mobi_spec1->brightness_spc=$request->brightness_spc;
            $mobi_spec1->resolution_spc=$request->resolution_spc;
            $mobi_spec1->refresh_rate_spc=$request->refresh_rate_spc;
            $mobi_spec1->display_colors_spc=$request->display_colors_spc;
            $mobi_spec1->pixel_density_spc=$request->pixel_density_spc;
            $mobi_spec1->touch_screen_spc_check=$request->touch_screen_spc_check;
            $mobi_spec1->touch_screen_spc=$request->touch_screen_spc;
            $mobi_spec1->display_protection_spc=$request->display_protection_spc;
            $mobi_spec1->multitouch_spc=$request->multitouch_spc;
            $mobi_spec1->operating_system_spc=$request->operating_system_spc;
            $mobi_spec1->chipset_spc=$request->chipset_spc;
            $mobi_spec1->cpu_spc=$request->cpu_spc;
            $mobi_spec1->architecture_spc=$request->architecture_spc;
            $mobi_spec1->fabrication_spc=$request->fabrication_spc;
            $mobi_spec1->no_of_cores_spc=$request->no_of_cores_spc;
            $mobi_spec1->graphics_spc=$request->graphics_spc;
            $mobi_spec1->height_spc=$request->height_spc;
            $mobi_spec1->width_spc=$request->width_spc;
            $mobi_spec1->thickness_spc=$request->thickness_spc;
            $mobi_spec1->weight_spc=$request->weight_spc;
            $mobi_spec1->colours_spc=$request->colours_spc;
            $mobi_spec1->waterproof_spc_check=$request->waterproof_spc_check;
            $mobi_spec1->waterproof_spc=$request->waterproof_spc;
            $mobi_spec1->ruggedness_spc=$request->ruggedness_spc;
            $mobi_spec1->build_spc=$request->build_spc;
            $save_spec1=$mobi_spec1->save();
        }

    // for adding product Specification Two - 2
        if($save_spec1){
            $mobi_spec2=New Mobilespectwo;
            $mobi_spec2->post_id=$mobi_post->id;
            $mobi_spec2->rear_camera_setup_spc=$request->rear_camera_setup_spc;
            $mobi_spec2->rear_image_resolution_spc=$request->rear_image_resolution_spc;
            $mobi_spec2->rear_resolution_spc=$request->rear_resolution_spc;
            $mobi_spec2->rear_sensor_spc=$request->rear_sensor_spc;
            $mobi_spec2->rear_settings_spc=$request->rear_settings_spc;
            $mobi_spec2->rear_shooting_modes_spc=$request->rear_shooting_modes_spc;
            $mobi_spec2->rear_autofocus_spc_check=$request->rear_autofocus_spc_check;
            $mobi_spec2->rear_autofocus_spc=$request->rear_autofocus_spc;
            $mobi_spec2->rear_flash_spc_check=$request->rear_flash_spc_check;
            $mobi_spec2->rear_flash_spc=$request->rear_flash_spc;
            $mobi_spec2->rear_ois_spc=$request->rear_ois_spc;
            $mobi_spec2->rear_features_spc=$request->rear_features_spc;
            $mobi_spec2->rear_video_resolution_spc=$request->rear_video_resolution_spc;
            $mobi_spec2->selfie_camera_setup_spc=$request->selfie_camera_setup_spc;
            $mobi_spec2->selfie_autofocus_spc_check=$request->selfie_autofocus_spc_check;
            $mobi_spec2->selfie_autofocus_spc=$request->selfie_autofocus_spc;
            $mobi_spec2->selfie_resolution_spc=$request->selfie_resolution_spc;
            $mobi_spec2->selfie_video_recording_spc=$request->selfie_video_recording_spc;
            $mobi_spec2->selfie_features_spc=$request->selfie_features_spc;
            $mobi_spec2->selfie_image_resolution_spc=$request->selfie_image_resolution_spc;
            $mobi_spec2->selfie_flash_spc_check=$request->selfie_flash_spc_check;
            $mobi_spec2->selfie_flash_spc=$request->selfie_flash_spc;
            $mobi_spec2->ram_type_spc=$request->ram_type_spc;
            $mobi_spec2->ram_size_spc=$request->ram_size_spc;
            $mobi_spec2->ram_available_space_spc=$request->ram_available_space_spc;
            $mobi_spec2->rom_type_spc=$request->rom_type_spc;
            $mobi_spec2->rom_size_spc=$request->rom_size_spc;
            $mobi_spec2->rom_available_space_spc=$request->rom_available_space_spc;
            $mobi_spec2->rom_card_slot_spc_check=$request->rom_card_slot_spc_check;
            $mobi_spec2->rom_card_slot_spc=$request->rom_card_slot_spc;
            $mobi_spec2->battery_type_spc=$request->battery_type_spc;
            $mobi_spec2->capacity_spc=$request->capacity_spc;
            $mobi_spec2->wireless_charging_spc_check=$request->wireless_charging_spc_check;
            $mobi_spec2->wireless_charging_spc=$request->wireless_charging_spc;
            $mobi_spec2->charging_spc=$request->charging_spc;
            $mobi_spec2->quick_charging_spc_check=$request->quick_charging_spc_check;
            $mobi_spec2->quick_charging_spc=$request->quick_charging_spc;
            $mobi_spec2->placement_spc=$request->placement_spc;
            $mobi_spec2->talk_time_spc=$request->talk_time_spc;
            $mobi_spec2->music_play_spc=$request->music_play_spc;
            $mobi_spec2->usb_type_c_spc_check=$request->usb_type_c_spc_check;
            $mobi_spec2->usb_type_c_spc=$request->usb_type_c_spc;
            $save_spec2=$mobi_spec2->save();
        }

    // for adding product Specification Three - 3
        if($save_spec2){
            $mobi_spec3=New Mobilespecthree;
            $mobi_spec3->post_id=$mobi_post->id;
            $mobi_spec3->wlan_wifi_features_spc=$request->wlan_wifi_features_spc;
            $mobi_spec3->wlan_wifi_calling_spc_check=$request->wlan_wifi_calling_spc_check;
            $mobi_spec3->wlan_wifi_calling_spc=$request->wlan_wifi_calling_spc;
            $mobi_spec3->wlan_bluetooth_spc_check=$request->wlan_bluetooth_spc_check;
            $mobi_spec3->wlan_bluetooth_spc=$request->wlan_bluetooth_spc;
            $mobi_spec3->wlan_gps_spc_check=$request->wlan_gps_spc_check;
            $mobi_spec3->wlan_gps_spc=$request->wlan_gps_spc;
            $mobi_spec3->wlan_infrared_spc=$request->wlan_infrared_spc;
            $mobi_spec3->wlan_Wifi_hotspot_spc=$request->wlan_Wifi_hotspot_spc;
            $mobi_spec3->wlan_nfc_spc=$request->wlan_nfc_spc;
            $mobi_spec3->wlan_usb_spc=$request->wlan_usb_spc;
            $mobi_spec3->network_technology_spc=$request->network_technology_spc;
            $mobi_spec3->network_network_support_spc=$request->network_network_support_spc;
            $mobi_spec3->network_speed_spc=$request->network_speed_spc;
            $mobi_spec3->network_sim_spc=$request->network_sim_spc;
            $mobi_spec3->network_volte_spc_check=$request->network_volte_spc_check;
            $mobi_spec3->network_volte_spc=$request->network_volte_spc;
            $mobi_spec3->network_sim_size_spc=$request->network_sim_size_spc;
            $mobi_spec3->fm_radio_spc_check=$request->fm_radio_spc_check;
            $mobi_spec3->fm_radio_spc=$request->fm_radio_spc;
            $mobi_spec3->loudspeaker_spc_check=$request->loudspeaker_spc_check;
            $mobi_spec3->loudspeaker_spc=$request->loudspeaker_spc;
            $mobi_spec3->audio_player_spc_check=$request->audio_player_spc_check;
            $mobi_spec3->audio_player_spc=$request->audio_player_spc;
            $mobi_spec3->audio_jack_spc_check=$request->audio_jack_spc_check;
            $mobi_spec3->audio_jack_spc=$request->audio_jack_spc;
            $mobi_spec3->alert_types_spc=$request->alert_types_spc;
            $mobi_spec3->ring_tones_spc=$request->ring_tones_spc;
            $mobi_spec3->stereo_speakers_spc=$request->stereo_speakers_spc;
            $mobi_spec3->fingerprint_sensor_spc=$request->fingerprint_sensor_spc;
            $mobi_spec3->fingerprint_sensor_position_spc=$request->fingerprint_sensor_position_spc;
            $mobi_spec3->fingerprint_sensor_type_spc=$request->fingerprint_sensor_type_spc;
            $mobi_spec3->other_sensors_spc=$request->other_sensors_spc;
            $mobi_spec3->manufactured_spc=$request->manufactured_spc;
            $mobi_spec3->assembled_spc=$request->assembled_spc;
            $mobi_spec3->others_features_spc=$request->others_features_spc;
            $save_spec3=$mobi_spec3->save();
        }

    // for adding product Category
    if($request->input('category_name')){
        for ($i = 0; $i < count($request->input('category_name')); $i++) {
            $mobi_category = new Mobilecategory;
            $mobi_category->post_id = $mobi_post->id;
            $mobi_category->category_name = $request->input('category_name')[$i];
            $cat_id=Mobicatname::where('category_name', $request->input('category_name')[$i])->first();
            $mobi_category->category_id = $cat_id->id;
            $mobi_category->save();
        }
    }
    // for adding product Variant
    if($request->input('variant_name')){
        for ($i = 0; $i < count($request->input('variant_name')); $i++) {
            $mobi_variant = new Mobilevariant;
            $mobi_variant->post_id = $mobi_post->id;
            $mobi_variant->variant_name = $request->input('variant_name')[$i];
            $mobi_variant->variant_url = $request->input('variant_url')[$i];
            $mobi_variant->save();
        }
    }
    // for adding product Images
    if($files=$request->file('product_img')){
        foreach($files as $file){
            $name=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('admin_dashboard/mobile'),$name);

            $product_img=new Mobileimage;
            $product_img->post_id=$mobi_post->id;
            $product_img->product_img=$name;
            $product_img->save();

        }
    } 
    // for adding product video URL
    if($videos=$request->video_url){
        foreach($videos as $video){
            $mobi_video=new Mobilevideo;
            $mobi_video->post_id=$mobi_post->id;
            $mobi_video->video_url=$video;
            $mobi_video->save();
        }
    }
    // for adding product Ratings
    if($request->input('rating_name')){
        for($i = 0; $i < count($request->input('rating_name')); $i++){
            $mobi_rating=new Mobilerating;
            $mobi_rating->post_id=$mobi_post->id;
            $mobi_rating->rating_name=$request->input('rating_name')[$i];
            $rating_id=Mobiratingname::where('rating_name', $request->input('rating_name')[$i])->first();
            $mobi_rating->rating_id=$rating_id->id;
            $mobi_rating->rating_value=$request->input('rating_value')[$i];
            $mobi_rating->save();
        }
    }
    // for adding product Offers
    if($request->input('offer_store')){
        for($i = 0; $i < count($request->input('offer_store')); $i++){
            $mobi_offer=new Mobileoffer;
            $mobi_offer->post_id=$mobi_post->id;
            $mobi_offer->offer_store=$request->input('offer_store')[$i];
            $mobi_offer->offer_title=$request->input('offer_title')[$i];
            $mobi_offer->offer_price=$request->input('offer_price')[$i];
            $mobi_offer->offter_url=$request->input('offter_url')[$i];
            $mobi_offer->save();
        }
    }
        if($save_spec3){
            return back()->with('success','Saved successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }

//  End add new post in Mobile Product -----------
// view signle post like visitor
    public function view_single_post($postID){
        $mobilepost=Mobilepost::where('id', $postID)->first();
        $mobilespecone=Mobilespecone::where('post_id', $postID)->first();
        $mobilespectwo=Mobilespectwo::where('post_id', $postID)->first();
        $mobilespecthree=Mobilespecthree::where('post_id', $postID)->first();
        $variants=Mobilevariant::where('post_id', $postID)->get();
        $images=Mobileimage::where('post_id', $postID)->get();
        $videos=Mobilevideo::where('post_id', $postID)->get();
        $ratings=Mobilerating::where('post_id', $postID)->get();
        $offers=Mobileoffer::where('post_id', $postID)->get();

        $brands=Mobibrandname::get();
        $categories=Mobicatname::get();
        $post_cat=Mobilecategory::where('post_id', $postID)->join('mobicatnames', 'mobicatnames.id', '=', 'mobilecategories.category_id')->pluck('mobilecategories.category_id')->toArray();

        return view('mobile_dashboard.view_mobile_post',['brands'=>$brands],['categories'=>$categories])->with(['mobilepost'=>$mobilepost])->with(['mobilespecone'=>$mobilespecone])->with(['mobilespectwo'=>$mobilespectwo])->with(['mobilespecthree'=>$mobilespecthree])->with(['variants'=>$variants])->with(['images'=>$images])->with(['videos'=>$videos])->with(['ratings'=>$ratings])->with(['offers'=>$offers])->with(['post_cat'=>$post_cat]);
    }

// End view single post like visitor
// View post editing page (single post)------------
    public function edit_mobile_post_view($postID){
        $mobilepost=Mobilepost::where('id', $postID)->first();
        $mobilespecone=Mobilespecone::where('post_id', $postID)->first();
        $mobilespectwo=Mobilespectwo::where('post_id', $postID)->first();
        $mobilespecthree=Mobilespecthree::where('post_id', $postID)->first();
        $variants=Mobilevariant::where('post_id', $postID)->get();
        $images=Mobileimage::where('post_id', $postID)->get();
        $videos=Mobilevideo::where('post_id', $postID)->get();
        $ratings=Mobilerating::where('post_id', $postID)->get();
        $offers=Mobileoffer::where('post_id', $postID)->get();

        $brands=Mobibrandname::get();
        $categories=Mobicatname::get();
        $post_cat=Mobilecategory::where('post_id', $postID)->join('mobicatnames', 'mobicatnames.id', '=', 'mobilecategories.category_id')->pluck('mobilecategories.category_id')->toArray();

        return view('mobile_dashboard.edit_mobile_post',['brands'=>$brands],['categories'=>$categories])->with(['mobilepost'=>$mobilepost])->with(['mobilespecone'=>$mobilespecone])->with(['mobilespectwo'=>$mobilespectwo])->with(['mobilespecthree'=>$mobilespecthree])->with(['variants'=>$variants])->with(['images'=>$images])->with(['videos'=>$videos])->with(['ratings'=>$ratings])->with(['offers'=>$offers])->with(['post_cat'=>$post_cat]);
    }

// End view post Editing page
// Save Edited post
    public function edit_mobile_post_save(Request $request){
    // for adding product info/details
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'brand_name'=>'required',
            'category_name'=>'required'
        ]);
        $postID= $request->post_id;
        $mobi_post=Mobilepost::where('id', $postID)->first();
        $mobi_post->title = $request->title;
        $mobi_post->description = $request->description;
        $mobi_post->brand_name = $request->brand_name;
            
            if($categories=$request->input('category_name')){
                $category_name=array();
                foreach($categories as $category){
                    $category_name[]=$category;
                }
                $category_names=implode(", ",$category_name);
            }
        $mobi_post->category_name = $category_names;
        $mobi_post->meta_title = $request->meta_title;
        $mobi_post->meta_description = $request->meta_description;
        $mobi_post->key_words = $request->key_words;
        $mobi_post->market_status = $request->market_status;
        $mobi_post->released = $request->released;
        $mobi_post->official_price = $request->official_price;
        $mobi_post->price_updated_on = $request->price_updated_on;
        $mobi_post->official_website = $request->official_website;
        $mobi_post->g_5g_check = $request->g_5g_check;
        $mobi_post->g_5g = $request->g_5g;
        $mobi_post->g_volte_check = $request->g_volte_check;
        $mobi_post->g_volte = $request->g_volte;
        $mobi_post->g_fingerprint_check = $request->g_fingerprint_check;
        $mobi_post->g_fingerprint = $request->g_fingerprint;
        $mobi_post->g_usb_check = $request->g_usb_check;
        $mobi_post->g_usb = $request->g_usb;
        $mobi_post->g_wireless_check = $request->g_wireless_check;
        $mobi_post->g_wireless = $request->g_wireless;
        $mobi_post->g_waterproof_check = $request->g_waterproof_check;
        $mobi_post->g_waterproof = $request->g_waterproof;
        $mobi_post->os = $request->os;
        $mobi_post->display = $request->display;
        $mobi_post->main_camera = $request->main_camera;
        $mobi_post->front_camera = $request->front_camera;
        $mobi_post->ram = $request->ram;
        $mobi_post->storage = $request->storage;
        $mobi_post->battery_capacity = $request->battery_capacity;
        $mobi_post->average_rating = $request->average_rating;
        $mobi_post->product_type = $request->product_type;
        $mobi_post->post_type = $request->post_type;
        if($request->file('product_img')){
            for ($i = 0; $i < 1; $i++) {
                $img_name = time().'-'.$request->file('product_img')[$i]->getClientOriginalName();
            }
        }else{
            $img_name=$request->image_name;
        }
        $mobi_post->post_img = $img_name;
        $save = $mobi_post->save();

    // for adding product Specification One - 1
        $mobi_spec1=Mobilespecone::where('post_id', $postID)->first();
        $mobi_spec1->device_type_spc=$request->device_type_spc;
        $mobi_spec1->brand_spc=$request->brand_spc;
        $mobi_spec1->model_spc=$request->model_spc;
        $mobi_spec1->released_spc=$request->released_spc;
        $mobi_spec1->g_colours_spc=$request->g_colours_spc;
        $mobi_spec1->display_type_spc=$request->display_type_spc;
        $mobi_spec1->screen_size_spc=$request->screen_size_spc;
        $mobi_spec1->aspect_ratio_spc=$request->aspect_ratio_spc;
        $mobi_spec1->bezel_less_spc_check=$request->bezel_less_spc_check;
        $mobi_spec1->bezel_less_spc=$request->bezel_less_spc;
        $mobi_spec1->brightness_spc=$request->brightness_spc;
        $mobi_spec1->resolution_spc=$request->resolution_spc;
        $mobi_spec1->refresh_rate_spc=$request->refresh_rate_spc;
        $mobi_spec1->display_colors_spc=$request->display_colors_spc;
        $mobi_spec1->pixel_density_spc=$request->pixel_density_spc;
        $mobi_spec1->touch_screen_spc_check=$request->touch_screen_spc_check;
        $mobi_spec1->touch_screen_spc=$request->touch_screen_spc;
        $mobi_spec1->display_protection_spc=$request->display_protection_spc;
        $mobi_spec1->multitouch_spc=$request->multitouch_spc;
        $mobi_spec1->operating_system_spc=$request->operating_system_spc;
        $mobi_spec1->chipset_spc=$request->chipset_spc;
        $mobi_spec1->cpu_spc=$request->cpu_spc;
        $mobi_spec1->architecture_spc=$request->architecture_spc;
        $mobi_spec1->fabrication_spc=$request->fabrication_spc;
        $mobi_spec1->no_of_cores_spc=$request->no_of_cores_spc;
        $mobi_spec1->graphics_spc=$request->graphics_spc;
        $mobi_spec1->height_spc=$request->height_spc;
        $mobi_spec1->width_spc=$request->width_spc;
        $mobi_spec1->thickness_spc=$request->thickness_spc;
        $mobi_spec1->weight_spc=$request->weight_spc;
        $mobi_spec1->colours_spc=$request->colours_spc;
        $mobi_spec1->waterproof_spc_check=$request->waterproof_spc_check;
        $mobi_spec1->waterproof_spc=$request->waterproof_spc;
        $mobi_spec1->ruggedness_spc=$request->ruggedness_spc;
        $mobi_spec1->build_spc=$request->build_spc;
        $mobi_spec1->save();

    // for adding product Specification Two - 2
        $mobi_spec2=Mobilespectwo::where('post_id', $postID)->first();
        $mobi_spec2->rear_camera_setup_spc=$request->rear_camera_setup_spc;
        $mobi_spec2->rear_image_resolution_spc=$request->rear_image_resolution_spc;
        $mobi_spec2->rear_resolution_spc=$request->rear_resolution_spc;
        $mobi_spec2->rear_sensor_spc=$request->rear_sensor_spc;
        $mobi_spec2->rear_settings_spc=$request->rear_settings_spc;
        $mobi_spec2->rear_shooting_modes_spc=$request->rear_shooting_modes_spc;
        $mobi_spec2->rear_autofocus_spc_check=$request->rear_autofocus_spc_check;
        $mobi_spec2->rear_autofocus_spc=$request->rear_autofocus_spc;
        $mobi_spec2->rear_flash_spc_check=$request->rear_flash_spc_check;
        $mobi_spec2->rear_flash_spc=$request->rear_flash_spc;
        $mobi_spec2->rear_ois_spc=$request->rear_ois_spc;
        $mobi_spec2->rear_features_spc=$request->rear_features_spc;
        $mobi_spec2->rear_video_resolution_spc=$request->rear_video_resolution_spc;
        $mobi_spec2->selfie_camera_setup_spc=$request->selfie_camera_setup_spc;
        $mobi_spec2->selfie_autofocus_spc_check=$request->selfie_autofocus_spc_check;
        $mobi_spec2->selfie_autofocus_spc=$request->selfie_autofocus_spc;
        $mobi_spec2->selfie_resolution_spc=$request->selfie_resolution_spc;
        $mobi_spec2->selfie_video_recording_spc=$request->selfie_video_recording_spc;
        $mobi_spec2->selfie_features_spc=$request->selfie_features_spc;
        $mobi_spec2->selfie_image_resolution_spc=$request->selfie_image_resolution_spc;
        $mobi_spec2->selfie_flash_spc_check=$request->selfie_flash_spc_check;
        $mobi_spec2->selfie_flash_spc=$request->selfie_flash_spc;
        $mobi_spec2->ram_type_spc=$request->ram_type_spc;
        $mobi_spec2->ram_size_spc=$request->ram_size_spc;
        $mobi_spec2->ram_available_space_spc=$request->ram_available_space_spc;
        $mobi_spec2->rom_type_spc=$request->rom_type_spc;
        $mobi_spec2->rom_size_spc=$request->rom_size_spc;
        $mobi_spec2->rom_available_space_spc=$request->rom_available_space_spc;
        $mobi_spec2->rom_card_slot_spc_check=$request->rom_card_slot_spc_check;
        $mobi_spec2->rom_card_slot_spc=$request->rom_card_slot_spc;
        $mobi_spec2->battery_type_spc=$request->battery_type_spc;
        $mobi_spec2->capacity_spc=$request->capacity_spc;
        $mobi_spec2->wireless_charging_spc_check=$request->wireless_charging_spc_check;
        $mobi_spec2->wireless_charging_spc=$request->wireless_charging_spc;
        $mobi_spec2->charging_spc=$request->charging_spc;
        $mobi_spec2->quick_charging_spc_check=$request->quick_charging_spc_check;
        $mobi_spec2->quick_charging_spc=$request->quick_charging_spc;
        $mobi_spec2->placement_spc=$request->placement_spc;
        $mobi_spec2->talk_time_spc=$request->talk_time_spc;
        $mobi_spec2->music_play_spc=$request->music_play_spc;
        $mobi_spec2->usb_type_c_spc_check=$request->usb_type_c_spc_check;
        $mobi_spec2->usb_type_c_spc=$request->usb_type_c_spc;
        $mobi_spec2->save();

    // for adding product Specification Three - 3
        $mobi_spec3=Mobilespecthree::where('post_id', $postID)->first();
        $mobi_spec3->wlan_wifi_features_spc=$request->wlan_wifi_features_spc;
        $mobi_spec3->wlan_wifi_calling_spc_check=$request->wlan_wifi_calling_spc_check;
        $mobi_spec3->wlan_wifi_calling_spc=$request->wlan_wifi_calling_spc;
        $mobi_spec3->wlan_bluetooth_spc_check=$request->wlan_bluetooth_spc_check;
        $mobi_spec3->wlan_bluetooth_spc=$request->wlan_bluetooth_spc;
        $mobi_spec3->wlan_gps_spc_check=$request->wlan_gps_spc_check;
        $mobi_spec3->wlan_gps_spc=$request->wlan_gps_spc;
        $mobi_spec3->wlan_infrared_spc=$request->wlan_infrared_spc;
        $mobi_spec3->wlan_Wifi_hotspot_spc=$request->wlan_Wifi_hotspot_spc;
        $mobi_spec3->wlan_nfc_spc=$request->wlan_nfc_spc;
        $mobi_spec3->wlan_usb_spc=$request->wlan_usb_spc;
        $mobi_spec3->network_technology_spc=$request->network_technology_spc;
        $mobi_spec3->network_network_support_spc=$request->network_network_support_spc;
        $mobi_spec3->network_speed_spc=$request->network_speed_spc;
        $mobi_spec3->network_sim_spc=$request->network_sim_spc;
        $mobi_spec3->network_volte_spc_check=$request->network_volte_spc_check;
        $mobi_spec3->network_volte_spc=$request->network_volte_spc;
        $mobi_spec3->network_sim_size_spc=$request->network_sim_size_spc;
        $mobi_spec3->fm_radio_spc_check=$request->fm_radio_spc_check;
        $mobi_spec3->fm_radio_spc=$request->fm_radio_spc;
        $mobi_spec3->loudspeaker_spc_check=$request->loudspeaker_spc_check;
        $mobi_spec3->loudspeaker_spc=$request->loudspeaker_spc;
        $mobi_spec3->audio_player_spc_check=$request->audio_player_spc_check;
        $mobi_spec3->audio_player_spc=$request->audio_player_spc;
        $mobi_spec3->audio_jack_spc_check=$request->audio_jack_spc_check;
        $mobi_spec3->audio_jack_spc=$request->audio_jack_spc;
        $mobi_spec3->alert_types_spc=$request->alert_types_spc;
        $mobi_spec3->ring_tones_spc=$request->ring_tones_spc;
        $mobi_spec3->stereo_speakers_spc=$request->stereo_speakers_spc;
        $mobi_spec3->fingerprint_sensor_spc=$request->fingerprint_sensor_spc;
        $mobi_spec3->fingerprint_sensor_position_spc=$request->fingerprint_sensor_position_spc;
        $mobi_spec3->fingerprint_sensor_type_spc=$request->fingerprint_sensor_type_spc;
        $mobi_spec3->other_sensors_spc=$request->other_sensors_spc;
        $mobi_spec3->manufactured_spc=$request->manufactured_spc;
        $mobi_spec3->assembled_spc=$request->assembled_spc;
        $mobi_spec3->others_features_spc=$request->others_features_spc;
        $mobi_spec3->save();

    // for adding product Category
    if($request->input('category_name')){
        Mobilecategory::where('post_id', $postID)->delete();
        for ($i = 0; $i < count($request->input('category_name')); $i++) {
            $mobi_category = new Mobilecategory;
            $mobi_category->post_id = $postID;
            $mobi_category->category_name = $request->input('category_name')[$i];
            $cat_id=Mobicatname::where('category_name', $request->input('category_name')[$i])->first();
            $mobi_category->category_id = $cat_id->id;
            $mobi_category->save();
        }
    }

    // for adding product Variant
    if($request->input('variant_name')){
        Mobilevariant::where('post_id', $postID)->delete();
        for ($i = 0; $i < count($request->input('variant_name')); $i++) {
            $mobi_variant = new Mobilevariant;
            $mobi_variant->post_id = $mobi_post->id;
            $mobi_variant->variant_name = $request->input('variant_name')[$i];
            $mobi_variant->variant_url = $request->input('variant_url')[$i];
            $mobi_variant->save();
        }
    }
    // for adding product Images
    if($files=$request->file('product_img')){
        Mobileimage::where('post_id', $postID)->delete();
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move(public_path('admin_dashboard/mobile'),$name);

            $product_img=new Mobileimage;
            $product_img->post_id=$mobi_post->id;
            $product_img->product_img=$name;
            $product_img->save();

        }
    } 
    // for adding product video URL
    if($videos=$request->video_url){
        Mobilevideo::where('post_id', $postID)->delete();
        foreach($videos as $video){
            $mobi_video=new Mobilevideo;
            $mobi_video->post_id=$mobi_post->id;
            $mobi_video->video_url=$video;
            $mobi_video->save();
        }
    }
    // for adding product Ratings
    if($request->input('rating_name')){
        Mobilerating::where('post_id', $postID)->delete();
        for($i = 0; $i < count($request->input('rating_name')); $i++){
            $mobi_rating=new Mobilerating;
            $mobi_rating->post_id=$mobi_post->id;
            $mobi_rating->rating_name=$request->input('rating_name')[$i];
            $rating_id=Mobiratingname::where('rating_name', $request->input('rating_name')[$i])->first();
            $mobi_rating->rating_id=$rating_id->id;
            $mobi_rating->rating_value=$request->input('rating_value')[$i];
            $mobi_rating->save();
        }
    }
    // for adding product Offers
    if($request->input('offer_store')){
        Mobileoffer::where('post_id', $postID)->delete();
        for($i = 0; $i < count($request->input('offer_store')); $i++){
            $mobi_offer=new Mobileoffer;
            $mobi_offer->post_id=$mobi_post->id;
            $mobi_offer->offer_store=$request->input('offer_store')[$i];
            $mobi_offer->offer_title=$request->input('offer_title')[$i];
            $mobi_offer->offer_price=$request->input('offer_price')[$i];
            $mobi_offer->offter_url=$request->input('offter_url')[$i];
            $mobi_offer->save();
        }
    }

        if($save){
            return redirect(route('mobile.all'))->with('actionSM','The Post Edited successfully');
        }else{
            return back()->with('fail','Have problem to save');
        }
    }
// end save Edited post
// delete mobile post accroding to id
    public function delete_mobile_post($postID){
        $one_post=Mobilepost::where('id',$postID)->first();
        $post_delete=$one_post->delete();
        if($post_delete){
            return back()->with('actionSM','The Post deleted successfully');
        }else{
            return back()->with('actionSM','Have problem to delete');
        }
    }



}
