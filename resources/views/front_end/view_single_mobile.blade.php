@extends('layouts.front_end')
<!-- this section for setting title according to pages -->
@section('title','Home')
@section('content')

<div class="my_container">
    <div class="mx-2">
    <!-- start View Single Product -->

    <div class="bg-white my_container mt-3">
        <div class="row border-bottom py-1 mb-2 mb-md-3">
            <div class="col-md-7 col-8">
                <h3>{{$mobilepost->title}}</h3>
            </div>
            <div class="text-end col-md-5 col-4">
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
                    <img id="featured" class="h-75 w-100 img-fluid rounded" src="{{asset('admin_dashboard/mobile')}}/{{$mobilepost->post_img}}" >
                </div>
                <div id="slider-wrapper">
                <div id="slider">
                    <!-- left arrow -->
                    <i class="fal fa-chevron-left display-6 mt-4 mt-md-3 arrow"></i>
                    @foreach($images as $image)
                    <img class="thumbnail" src="{{asset('admin_dashboard/mobile')}}/{{$image->product_img}}" onmouseover="imageView(this)">
                    @endforeach

                    
                </div>
                    <!-- right arrow -->
                    <i class="fal fa-chevron-right display-6 mt-2 arrow ms-1"></i>
                </div>
            </div>
            <div class="col-md-8">
                <!-- for desktop view -->
                <div class="d-none d-md-block">
                    <div class="row border-bottom pb-3">
                        <div class="col-md-4">
                            <span>Market Status: <span class="fw-bold">{{$mobilepost->market_status}}</span></span>
                            <span class="float-md-end">|</span>
                        </div>
                        <div class="col-md-4">
                            <span>Launch Date: <span class="fw-bold">{{date("d M Y", strtotime($mobilepost->released))}}</span></span>
                            <span class="float-md-end">|</span>
                        </div>
                        <div class="col-md-4">
                            <span><a class="text-decoration-none" target="_blank" href="{{$mobilepost->official_website}}">Official Website</a></span>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom py-1 pt-3">
                    <div class="col-md-7">
                        <div class="mb-2">
                            <span class="text-secondary">Price Updated On <span class="fw-bold">{{date("d M Y", strtotime($mobilepost->price_updated_on))}}</span></span>
                        </div>
                        <div class="mb-1">
                            <span class="fw-bold">Best Price: TK. {{$mobilepost->official_price}}</span>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- for desktop view -->
                        <div class="d-none d-md-block">
                            <span>Variant</span>
                        </div>
                        <div class="my-2 my-md-0">
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
                            <span class="fab fa-android text-success h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                Operating System
                            </div>
                            <div>
                                {{$mobilepost->os}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-mobile-android-alt h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                Display
                            </div>
                            <div>
                                {{$mobilepost->display}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-camera h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                Rear Camera
                            </div>
                            <div>
                                {{$mobilepost->main_camera}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fas fa-camera-retro h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                Front Camera
                            </div>
                            <div>
                                {{$mobilepost->front_camera}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fa fa-sd-card h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                ROM
                            </div>
                            <div>
                                {{$mobilepost->storage}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fa fa-memory h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                RAM
                            </div>
                            <div>
                                {{$mobilepost->ram}}
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light my-1 p-2">
                        <div class="col-2 border-end border-3 border-white">
                            <span class="fa fa-battery-full h4 mt-2"></span>
                        </div>
                        <div class="col-10">
                            <div class="fw-bold">
                                Battery
                            </div>
                            <div>
                                {{$mobilepost->battery_capacity}}
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- for desktop view -->
                <div class="d-none d-md-block">
                    <div class="fw-bold pt-3">
                        <span style="font-size: 24px;">Key Specifications</span>
                    </div>
                    <div class="col-6 col-md-4 py-2">
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
                    @if($mobilepost->g_fingerprint_check=='Yes')
                    <span class="far fa-fingerprint mx-2"></span>
                    @endif
                    @if($mobilepost->g_usb_check=='Yes')
                    <span class="fab fa-usb mx-2"></span>
                    @endif
                    @if($mobilepost->g_5g_check=='Yes')
                    <img class="mx-2" src="{{asset('admin_dashboard/mobile/5g-svg.png')}}" width="20" height="15"/>
                    @endif
                    @if($mobilepost->g_waterproof_check=='Yes')
                    <span class="fas fa-tint mx-2"></span>
                    @endif
                    @if($mobilepost->g_wireless_check=='Yes')
                    <span class="fas fa-wifi mx-2"></span>
                    @endif
                    @if($mobilepost->g_volte_check=='Yes')
                    <img class="mx-2" src="{{asset('admin_dashboard/mobile/volte.png')}}" width="25" height="15"/>
                    @endif                    
                </div>
                <!-- for desktop view -->
                <div class="row py-1 border-top border-3 d-none d-md-block">
                    @if($mobilepost->g_fingerprint_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <span class="far fa-fingerprint"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_fingerprint}}
                    </div>
                    @endif
                    @if($mobilepost->g_usb_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <span class="fab fa-usb"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_usb}}
                    </div>
                    @endif
                    @if($mobilepost->g_5g_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <img src="{{asset('admin_dashboard/mobile/5g-svg.png')}}" width="20" height="15"/>
                        &nbsp;&nbsp;{{$mobilepost->g_5g}}
                    </div>
                    @endif
                    @if($mobilepost->g_waterproof_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <span class="fas fa-tint"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_waterproof}}
                    </div>
                    @endif
                    @if($mobilepost->g_wireless_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <span class="fas fa-wifi"></span>
                        &nbsp;&nbsp;{{$mobilepost->g_wireless}}
                    </div>
                    @endif
                    @if($mobilepost->g_volte_check=='Yes')
                    <div class="float-end col-md-4 py-2">
                        <img class="mx-2" src="{{asset('admin_dashboard/mobile/volte.png')}}" width="25" height="15"/>
                        &nbsp;&nbsp;{{$mobilepost->g_volte}}
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


    <div class="row">
        <!-- main body -->
        <div class="col-md-8 col-lg-9">
            <!-- Description -->
            <div class="bg-white py-2 px-3 my-2">
                <div class="border-bottom">
                    <h4>Product Title - description</h4>
                </div>
                <div style="text-align: justify;">
                    <p>{!! $mobilepost->description !!}</p>
                </div>
            </div>
            <!-- Review Section -->
            <div class="bg-white py-1 px-3 my-2">
                <div class="border-bottom">
                    <h4>Reviews</h4>
                </div>
                <div class="row pt-1">
                    @foreach($ratings as $rating)
                    <div class="col-md-4 bg-light bg-gradient border border-2 border-white">
                        <div class="border-bottom border-white font-14 fw-bold">
                            <span>{{$rating->rating_name}}</span>&nbsp;
                            <span>{{$rating->rating_value}}</span>
                            <input  id="{{$rating->id}}.{{$rating->rating_value}}" type="number" value="{{$rating->rating_value}}" hidden="hidden">
                        </div>
                        <div>
                            <span class="stars-outer">
                                <span id="{{$rating->id}}.{{$rating->rating_name}}" class="stars-inner"></span>
                            </span>
                        </div>
                    </div>
                    <script>
                        var rating_value = document.getElementById('{{$rating->id}}.{{$rating->rating_value}}').value;
                        // Total Stars
                        var starsTotal = 10;
                        // Get percentage
                        var rating_range = (rating_value / starsTotal) * 100;
                        // Round to nearest 10
                        var starPercentageRounded = `${(rating_range / 10) * 10}%`;
                        // Set width of stars-inner to percentage
                        document.getElementById('{{$rating->id}}.{{$rating->rating_name}}').style.width = starPercentageRounded;
                    </script>
                    @endforeach
                                       
                </div>
            </div>
            <!-- Good and Bad section -->
            <div class="row">
                <div class="col-md-6" style="max-height: 300px;">
                    <div class="bg-white m-2" style="border: 1px white; border-radius: 15px;">
                        <div class="d-flex justify-content-between border-bottom p-2">
                            <span class="text-success fw-bold ms-3">Good</span>
                            <span class="fal fa-thumbs-up pe-2"></span>
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
                            <span class="text-danger fw-bold ms-3">Bad</span>
                            <span class="fal fa-thumbs-down pe-2"></span>
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
        <!-- Specifications -->
            <div class="bg-white my-2">
                <h4 class="py-1 px-3">Specifications</h4>
            <!-- General Specification -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">General</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Device Type
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->device_type_spc}} 
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Brand
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->brand_spc}} 
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Model
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->model_spc}} 
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Released
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{date("d M Y", strtotime($mobilespecone->released_spc))}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Colours
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->g_colours_spc}} 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Display  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Display</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Display Type
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->display_type_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Screen Size
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->screen_size_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Aspect Ratio
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->aspect_ratio_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Bezel-Less Display
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecone->bezel_less_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Brightness
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->brightness_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Refresh Rate
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->refresh_rate_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Display Colors
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->display_colors_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Pixel Density
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->pixel_density_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Touch Screen
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecone->touch_screen_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Display Protection
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->display_protection_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Multitouch
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->multitouch_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Performance  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Performance</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Operating System
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->operating_system_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Chipset
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->chipset_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                CPU
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->cpu_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Architecture
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->architecture_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Fabrication
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->fabrication_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                No of Cores
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->no_of_cores_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Graphics
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->graphics_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Design  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Design</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Height
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->height_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Width
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->width_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Thickness
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->thickness_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Weight
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->weight_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Colours
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->colours_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Waterproof
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecone->waterproof_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Ruggedness
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->ruggedness_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Build
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecone->build_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Rear Camera  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Rear Camera</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Camera Setup
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_camera_setup_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Image Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_image_resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Video Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_video_resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Sensor
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_sensor_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Settings
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_settings_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Shooting Modes
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_shooting_modes_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Autofocus
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->rear_autofocus_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Flash
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->rear_flash_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                OIS
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Features
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rear_features_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Selfie Camera  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Selfie Camera</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Camera Setup
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->selfie_camera_setup_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Autofocus
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->selfie_autofocus_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->selfie_resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Image Resolution
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->selfie_image_resolution_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Video Recording
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->selfie_video_recording_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Flash
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->selfie_flash_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Features
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->selfie_features_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Storage  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Storage</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Type (RAM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->ram_type_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Size (RAM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->ram_size_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Available Space (RAM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->ram_available_space_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Type (ROM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rom_type_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Size (ROM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rom_size_spc}}
                            </div>
                        </div>

                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Available Space (ROM)
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->rom_available_space_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Card Slot
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->rom_card_slot_spc}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Battery  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Battery</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Battery Type
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->battery_type_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Capacity
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->capacity_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Wireless Charging
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->wireless_charging_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Charging
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->charging_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Quick Charging
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->quick_charging_spc}}</label>
                                </div>
                            </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Placement
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->placement_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Talk Time
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->talk_time_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Music Play
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespectwo->music_play_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                USB Type-C
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespectwo->usb_type_c_spc}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- WLAN  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">WLAN</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Wi-Fi Features
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->wlan_wifi_features_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Wi-Fi Calling
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->wlan_wifi_calling_spc}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Bluetooth
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->wlan_bluetooth_spc}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                GPS
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->wlan_gps_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Infrared
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->wlan_infrared_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Wi-Fi Hotspot
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->wlan_wifi_hotspot_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                NFC
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->wlan_nfc_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                USB Connectivity
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->wlan_usb_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Network Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Network</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Technology
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->network_technology_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Network Support
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->network_network_support_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Speed
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->network_speed_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                SIM
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->network_sim_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                VoLTE
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->network_volte_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                SIM Size
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->network_sim_size_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Multimedia Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Multimedia</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                FM Radio
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->fm_radio_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Loudspeaker
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->loudspeaker_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Audio Player
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->audio_player_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Audio Jack
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->audio_jack_spc}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Alert Types
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->alert_types_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Ring Tones
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->ring_tones_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Stereo Speakers
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                                <div class="d-inline">
                                    <label for="bezel">{{$mobilespecthree->stereo_speakers_spc}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sensors & Features Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">Sensors & Features</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Fingerprint Sensor
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                <div class="d-inline">
                                    <!-- if condition -->
                                    <input id="bezel" type="checkbox" checked/>
                                </div>
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Fingerprint Sensor Position
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->fingerprint_sensor_position_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Fingerprint Sensor Type
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->fingerprint_sensor_type_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Other Sensors
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->other_sensors_spc}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More  Specificaton -->
                <div class="bg_spec">
                    <h5 class="pt-1 px-3">More</h5>
                    <div class="bg-white px-2 font-14">
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Manufactured
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->manufactured_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Assembled
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->assembled_spc}}
                            </div>
                        </div>
                        <div class="row px-1">
                            <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                                Others Features
                            </div>
                            <div class="col-8 col-md-9 bg-white border-top py-1">
                                {{$mobilespecthree->others_features_spc}}
                            </div>
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
                    <div class="col-md-7 col-lg-8 pe-md-0">
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

        <!-- start Discussion -->
            <div class="my-2 px-3 bg_discussion pb-2">
                <form>
                    <h4 class="py-1 px-3">Discussion</h4>
                    <div class="row border-top border-bottom pt-2">
                        <div class="col-md-9">
                            <textarea class="form-control" rows="1" placeholder="Add a new comment"></textarea>
                        </div>
                        <div class="col-md-3 text-end pt-1">
                            <input type="text" name="" class="btn btn-primary btn-sm px-3" value="Comment">
                        </div>
                    </div>
                    <div class="row mt-2 border-bottom pb-2">
                        <div class="col-2 col-md-1 pe-0 me-0">
                            <img class="img img-rounded rounded-circle" width="100%" height="40" src="product2.png">
                        </div>
                        <div class="col-10 col-md-10">
                            <div>
                                <h6>Lorem</h6>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="border-bottom pb-2">
                                <div class="mb-2">
                                    <span id="reply_btn" class="btn btn-outline-primary btn-sm py-0 px-2" style="font-size:12px;" onclick="show_reply_field();">Reply</span>
                                </div>
                            <!-- comment's reply field -->
                                <div id="reply_field" style="display:none;">
                                    <form method="POST" action="">
                                        <div>
                                            <input type="text" name="user_name" hidden="hidden" value="">
                                            <input type="text" name="post_id" hidden="hidden" value="">
                                            <textarea class="form-control" rows="1" placeholder="Write a new reply"></textarea>
                                        </div>
                                        <div class="mb-1">
                                            <button class="btn btn-primary btn-sm py-0 px-2">Post The Reply</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <!-- Comment's Reply -->
                            <div class="row mt-2 pb-2">
                                <div class="col-2 col-md-1 pe-0 me-0">
                                    <img class="img img-rounded rounded-circle" width="100%" height="35" src="product2.png">
                                </div>
                                <div class="col-10 col-md-10">
                                    <div>
                                        <h6>John</h6>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment's Reply -->
                        </div>
                    </div>
                </form>
            </div>
        <!-- end discussion -->
            
            
        </div>

    <!-- Right sidebar beside description -->
        <div class="col-md-4 col-lg-3 my-2 ps-md-0">
            <!-- all Brand -->
            <div class="bg-white py-2 px-1" style="max-height: 300px;">
                <div class="d-flex justify-content-between border-bottom py-1 px-1">
                    <span class="fw-bold">Mobile Brands</span>
                    <span class="font-12">
                        <a href="#">See All Brands</a>
                    </span>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4">
                        <span>Kolam</span>
                    </div>
                    <div class="col-6 col-md-4">
                        <span>Kolam</span>
                    </div>
                    <div class="col-6 col-md-4">
                        <span>Kolam</span>
                    </div>
                </div>
            </div>
            <!-- // all brand -->

            <!-- all Mobile -->
            <div class="bg-white py-2 px-1 my-3">
                <div class="d-flex justify-content-between border-bottom py-1 px-1">
                    <span class="fw-bold">All Mobiles</span>
                    <span class="font-12">
                        <a href="#">See All Mobiles</a>
                    </span>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // all Mobile -->

            <!-- all Brand -->
            <div class="bg-white py-2 px-1 my-3" style="max-height: 300px;">
                <div class="border-bottom py-1 px-1">
                    <span class="fw-bold">Latest News</span>
                </div>
                <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                    <div class="col-4 px-0">
                        <img class="w-100" src="flower.jpg" height="50">
                    </div>
                    <div class="col-8 pe-0 h6">
                        <span>Samsang Galaxy s10 nice effect</span>
                    </div>
                </div>
                <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                    <div class="col-4 px-0">
                        <img class="w-100" src="flower.jpg" height="50">
                    </div>
                    <div class="col-8 pe-0 h6">
                        <span>Samsang Galaxy s10 nice effect</span>
                    </div>
                </div>
                <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                    <div class="col-4 px-0">
                        <img class="w-100" src="flower.jpg" height="50">
                    </div>
                    <div class="col-8 pe-0 h6">
                        <span>Samsang Galaxy s10 nice effect</span>
                    </div>
                </div>
                <div class="text-end">
                    <span class="font-12">
                        <a href="#">See All News</a>
                    </span>
                </div>
            </div>
            <!-- // all brand -->


             <!-- Top Rated Mobile -->
            <div class="bg-white py-2 p-1 my-3">
                <div class="d-flex justify-content-between border-bottom py-1 px-1">
                    <span class="fw-bold">Top Rated Mobiles</span>
                    <span class="font-12">
                        <a href="#">See All Mobiles</a>
                    </span>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                        <div class="pb-1">
                            <img src="product5.png" height="45" width="40">
                        </div>
                        <div>
                            <span>Samsung</span>
                        </div>
                        <div>
                            <span>Mi 10 5g pro</span>
                        </div>
                        <div class="text-primary">
                            <span>Coming soon</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Top Rated Mobile -->

        </div>
    <!-- end Right sidebar beside description -->
    </div>
     <!-- End View Single Product -->

    </div>
</div>
 <!-- End View Home -->

 @endsection
