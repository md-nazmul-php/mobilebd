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

class MobiViewController extends Controller
{

// view mobile home page ----------
    public function view_all_post(){
        $latestmobiles=Mobilepost::where([['product_type','latest'],['post_type','publish']])->latest()->take(6)->get();
        $popularmobiles=Mobilepost::where([['product_type','popular'],['post_type','publish']])->latest()->take(6)->get();
        $upcomingmobiles=Mobilepost::where([['product_type','upcoming'],['post_type','publish']])->latest()->take(6)->get();
        return view('index')->with(['latestmobiles'=>$latestmobiles])->with(['popularmobiles'=>$popularmobiles])->with(['upcomingmobiles'=>$upcomingmobiles]);
    }


// end mobile home page


// view signle post ---------------------
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


        return view('front_end.view_single_mobile',['brands'=>$brands],['categories'=>$categories])->with(['mobilepost'=>$mobilepost])->with(['mobilespecone'=>$mobilespecone])->with(['mobilespectwo'=>$mobilespectwo])->with(['mobilespecthree'=>$mobilespecthree])->with(['variants'=>$variants])->with(['images'=>$images])->with(['videos'=>$videos])->with(['ratings'=>$ratings])->with(['offers'=>$offers])->with(['post_cat'=>$post_cat]);
    }

// End view single post ---------------------



}
