@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - Edit Mobile Post')
@section('content')
<div class="text-center text-success pb-1 mb-1">
	<h2>View Mobile Signle Post</h2>
</div>

<!-- start View Single Product -->
<div class="container">
    <div class="ontainer mt-3">
    	<div class="row border-bottom py-1 mb-2 mb-md-3">
            <div class="col-md-7 col-8">
                <h3>{{$mobilepost->title}}</h3>
            </div>
            <div class="text-right col-md-5 col-4">
                <a class="btn btn-outline-warning btn-sm my-md-2 font-12" href="#">
                    <!-- for mobile view -->
                    <span class="d-block d-md-none" style="font-size:9px;">
                        <span class="fa fa-heart"><sub><span class="fa fa-plus"></span></sub></span>
                    </span>
                    <!-- for desktop view -->
                    <span class="d-none d-md-block">
                        <span class="fa fa-heart"><sub><span class="fa fa-plus"></span></sub></span>&nbsp;Shortlist
                    </span>

                </a>
                <a class="btn btn-outline-primary btn-sm my-md-2 font-12" href="#">
                    <!-- for mobile view -->
                    <span class="d-block d-md-none" style="font-size:9px;">
                        <span class="fa fa-plus px-1"></span>
                    </span>
                    <!-- for desktop view -->
                    <span class="d-none d-md-block">
                        <span class="fa fa-plus"></span>&nbsp;Add compare
                    </span>
                    
                </a>
            </div>
        </div>
        <div class="row font-14">
            <!-- for mobile+desktop view -->
            <div class="col-md-4">
                
                <div class="border mx-2 mx-md-0">
                    <img id="featured" class="w-100 img-fluid rounded" style="max-height: 325px;" src="product3.png" >
                </div>
                <div id="slider-wrapper">
                <div id="slider">
                    <!-- left arrow -->
                    <i class="fal fa-chevron-left display-6 mt-4 mt-md-3 arrow"></i>
                    @foreach($images as $image)
                    <img class="thumbnail active" src="{{asset('admin_dashboard/mobile')}}/{{$image->product_img}}" onmouseover="imageView(this)">
                    @endforeach

                    
                </div>
                    <!-- right arrow -->
                    <i class="fal fa-chevron-right display-6 mt-2 arrow ml-1"></i>
                </div>
            </div>
            <div class="col-md-8">
                <!-- for desktop view -->
                <div class="d-none d-md-block">
                    <div class="row border-bottom pb-3">
                        <div class="col-md-4">
                            <span>Market Status: {{$mobilepost->market_status}}</span>
                            <span class="float-md-right">|</span>
                        </div>
                        <div class="col-md-4">
                            <span>Launch Date: {{date("d M Y", strtotime($mobilepost->released))}}</span>
                            <span class="float-md-right">|</span>
                        </div>
                        <div class="col-md-4">
                            <span><a class="text-decoration-none" href="{{$mobilepost->official_website}}" target="_blank">Official Website</a></span>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom py-1 pt-3">
                    <div class="col-md-7 col-7">
                        <div>
                            <span class="text-secondary">Price Updated On </span><span>{{date("d M Y", strtotime($mobilepost->price_updated_on))}}</span>
                        </div>
                        <div>
                            <span class="font-weight-bold">Best Price: TK. {{$mobilepost->official_price}}</span>
                        </div>
                    </div>
                    <div class="col-md-5 col-5">
                        <!-- for desktop view -->
                        <div class="d-none d-md-block">
                            <span>Variant</span>
                        </div>
                        <div>
                            <!-- for mobile view -->
                            <select class="py-0">
                            	@foreach($variants as $variant)
                                <option>{{$variant->variant_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- for Mobile view -->
                <div class="d-block d-md-none">
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-mobile-android-alt h4"></span>
                        </div>
                        <div class="col-10">
                            <div class="font-weight-bold">
                                heading
                            </div>
                            <div>
                                content
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-camera h4"></span>
                        </div>
                        <div class="col-10">
                            <div class="font-weight-bold">
                                heading
                            </div>
                            <div>
                                content
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-camera-retro h4"></span>
                        </div>
                        <div class="col-10">
                            <div class="font-weight-bold">
                                heading
                            </div>
                            <div>
                                content
                            </div>
                        </div>
                    </div>
                </div>
                <!-- for desktop view -->
                <div class="d-none d-md-block">
                    <div class="font-weight-bold pt-3">
                        <span style="font-size: 24px;">Key Specifications</span>
                    </div>
                    <div class="py-2">
                        <div style="font-size:18px;">
                            <span class="fab fa-android text-success"></span>&nbsp;
                            {{$mobilepost->os}}
                        </div>
                    </div>
                    <div class="row py-1 mb-md-3">
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fas fa-mobile-android-alt"></span>&nbsp;
                                Display
                            </div>
                            <div>
                                {{$mobilepost->display}}
                            </div>
                        </div>
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fa fa-camera"></span>&nbsp;
                                Rear Camera
                            </div>
                            <div>
                                {{$mobilepost->main_camera}}
                            </div>
                        </div>
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fa fa-camera-retro"></span>&nbsp;
                                Front Camera
                            </div>
                            <div>
                                {{$mobilepost->front_camera}}
                            </div>
                        </div>
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fa fa-sd-card"></span>&nbsp;
                                ROM
                            </div>
                            <div>
                                {{$mobilepost->storage}}
                            </div>
                        </div>
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fa fa-memory"></span>&nbsp;
                                RAM
                            </div>
                            <div>
                                {{$mobilepost->ram}}
                            </div>
                        </div>
                        <div class="col-6 col-md-4 py-2">
                            <div class="font-18">
                                <span class="fa fa-battery-full"></span>&nbsp;
                                Battery
                            </div>
                            <div>
                                {{$mobilepost->battery_capacity}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- for mobile view -->
                <div class="py-1 border-top border-3 text-center d-block d-md-none">
                	@if($mobilepost->g_5g_check=='Yes')
                	<img class="mx-2" src="{{asset('admin_dashboard/images')}}/5g.png" width="20" height="20"/>
                	@endif
                	@if($mobilepost->g_volte_check=='Yes')
                	<img class="mx-2" src="{{asset('admin_dashboard/images')}}/volte.png" width="20" height="15"/>
                	@endif
                	@if($mobilepost->g_fingerprint_check=='Yes')
                    <span class="far fa-fingerprint mx-2"></span>
                    @endif
                    @if($mobilepost->g_usb_check=='Yes')
                    <span class="fab fa-usb mx-2"></span>
                    @endif
                    @if($mobilepost->g_wireless_check=='Yes')
                    <span class="fas fa-wifi mx-2"></span>
                    @endif
                    @if($mobilepost->g_waterproof_check=='Yes')               
                    <span class="fas fa-tint mx-2"></span>
                    @endif
                </div>
                <!-- for desktop view -->
                <div class="row py-1 border-top border-3 d-none d-md-block">
                    @if($mobilepost->g_5g_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <img src="{{asset('admin_dashboard/images')}}/5g.png" width="20" height="20"/>
                        &nbsp;&nbsp;{{$mobilepost->g_5g}}
                    </div>
                    @endif
                    @if($mobilepost->g_volte_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <img src="{{asset('admin_dashboard/images')}}/volte.png" width="20" height="15"/>
                        &nbsp;&nbsp;{{$mobilepost->g_volte}}
                    </div>
                    @endif
                	@if($mobilepost->g_fingerprint_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <span class="far fa-fingerprint"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_fingerprint}}
                    </div>
                    @endif
                    @if($mobilepost->g_usb_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <span class="fab fa-usb"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_usb}}
                    </div>
                    @endif
                    @if($mobilepost->g_wireless_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <span class="fas fa-wifi"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_wireless}}
                    </div>
                    @endif
                    @if($mobilepost->g_waterproof_check=='Yes')
                    <div class="d-flex col-md-4 py-2">
                        <span class="fas fa-tint"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_waterproof}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white my-2 d-none d-md-block">
        <a class="m-2 px-5 btn btn-success btn-sm">Compare Prices</a>
        <a class="m-2 px-5 btn btn-success btn-sm">Specifications</a>
        <a class="m-2 px-5 btn btn-success btn-sm">Expert Reviews</a>
        <a class="m-2 px-5 btn btn-success btn-sm">User Reviews</a>
        <a class="m-2 px-5 btn btn-success btn-sm">Discussions</a>
    </div>



<!-- main body -->
<div class="">
    <!-- Description -->
    <div class="bg-white py-2 px-3 my-2">
        <div class="border-bottom">
            <h4>{{$mobilepost->title}} - description</h4>
        </div>
        <div style="text-align: justify;">
            <p>{!!$mobilepost->description!!}</p>
        </div>
    </div>
    <!-- Review Section -->
    <div class="bg-white py-1 px-3 my-2">
        <div class="border-bottom">
            <h4>Reviews</h4>
        </div>
        <div class="row pt-1">
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                <div class="border-bottom border-white">
                    <span>Battery</span>&nbsp;
                    <span>4.7</span>
                </div>
                <div>
                    <span>*****</span>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Good and Bad section -->
    <div class="row">
        <div class="col-md-6" style="max-height: 300px;">
            <div class="bg-white m-2" style="border: 1px white; border-radius: 15px;">
                <div class="d-flex justify-content-between border-bottom p-2">
                    <span class="text-success font-weight-bold ml-3">Good</span>
                    <span class="fal fa-thumbs-up pr-2"></span>
                </div>
                <div class="p-2">
                    <ul>
                        <li>jjjjjjjjj</li>
                        <li>wwwwwwww</li>
                        <li>sssssssss</li>
                        <li>rrrrrrrr</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="max-height: 300px;">
            <div class="bg-white m-2" style="border: 1px white; border-radius: 15px;">
                <div class="d-flex justify-content-between border-bottom p-2">
                    <span class="text-danger font-weight-bold ml-3">Bad</span>
                    <span class="fal fa-thumbs-down pr-2"></span>
                </div>
                <div class="p-2">
                    <ul>
                        <li>jjjjjjjjj</li>
                        <li>wwwwwwww</li>
                        <li>sssssssss</li>
                        <li>rrrrrrrr</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Good and Bad section -->
<!-- Specifications -->
    <div class="bg-white my-2">
        <h4 class="py-1 px-3">Specifications</h4>
    <!--  -->
        <div class="bg_spec">
            <h5 class="pt-1 px-3">General</h5>
            <div class="bg-white px-2 font-14">
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="bg_spec">
            <h5 class="pt-1 px-3">dddd</h5>
            <div class="bg-white px-2 font-14">
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="bg_spec">
            <h5 class="pt-1 px-3">dddd</h5>
            <div class="bg-white px-2 font-14">
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
                <div class="row px-1">
                    <div class="col-4 col-md-3 border-top bg-light font-weight-bold py-1">
                        Rear Camera
                    </div>
                    <div class="col-8 col-md-9 bg-white border-top py-1">
                         Yes, Available. release 2020, February 14 
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<!-- End Specifications -->

<!-- Compare Prices for desktop -->
    <div class="bg-white my-2">
        <h4 class="py-1 px-3 border-bottom mb-0">Compare price</h4>
        <div>
            <table class="table table-bordered table-hover text-center font-14">
                <tr class="bg_spec">
                    <th class="border-0" colspan="2">Various List</th>
                    <th class="border-0">General</th>
                    <th class="border-0">Price</th>
                    <th class="border-0">Details</th>
                </tr>
                <tr>
                    <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                    <td>Unofficial</td>
                    <td>TK 20,000</td>
                    <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10 h6-md">Shop Now</a></td>
                </tr>
                <tr>
                    <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                    <td>Unofficial</td>
                    <td>TK 20,000</td>
                    <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                </tr>
                <tr>
                    <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                    <td>Unofficial</td>
                    <td>TK 20,000</td>
                    <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                </tr>
                <tr>
                    <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                    <td>Unofficial</td>
                    <td>TK 20,000</td>
                    <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                </tr>
            </table>
        </div>
    </div>
<!-- End Compare Prices for desktop -->

<!-- start Videos -->
    <div class="bg-white my-2">
        <h4 class="py-1 px-3 border-bottom">Videos</h4>
        <div class="row">
            <div class="col-md-7 col-lg-8 pr-md-0">
                <iframe id="played_video" style="width:100%;" height="345" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 col-lg-4">
                <form>
                    <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv1" onclick="abc1();">
                        <input type="text" id="video1" hidden="hidden" value="kk https://www.youtube.com/embed/uMfxNFg1LdY">
                        <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                            <img src="kk http://img.youtube.com/vi/uMfxNFg1LdY/0.jpg" class="w-100 h-100">
                        </div>
                        <div class="col-8 col-md-9">
                            <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                        </div>
                    </div>
                    <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv2" onclick="abc2();">
                        <input type="text" id="video2" hidden="hidden" value="kk https://www.youtube.com/embed/Cx2d6amq0sY">
                        <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                            <img src="kk http://img.youtube.com/vi/Cx2d6amq0sY/0.jpg" class="w-100 h-100">
                        </div>
                        <div class="col-8 col-md-9">
                            <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                        </div>
                    </div>
                    <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv3" onclick="abc3();">
                        <input type="text" id="video3" hidden="hidden" value="kk https://www.youtube.com/embed/zozZw7t1ShE">
                        <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                            <img src="kk http://img.youtube.com/vi/zozZw7t1ShE/0.jpg" class="w-100 h-100">
                        </div>
                        <div class="col-8 col-md-9">
                            <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End videos -->
    
    
</div>


</div>
 <!-- End View Single Product -->








@endsection