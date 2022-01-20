@extends('layouts.front_end')
<!-- this section for setting title according to pages -->
@section('title','Home')
@section('content')

<div class="my_container">
    <div class="mx-2">
        <div class="row my-2">
            <div class="col-md-9 my-1 ps-md-0">
                <div class="bg-white p-3">
                    <div class="bg-light">
                        <div class="text-center">
                            <h2>LETS FIND A MOBILE</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-lg-8">
                            <!-- price range slider -->
                                <div class="mt-4 mx-md-2">
                                    <div class="price-range-block">
                                        <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                    </div>
                                    <div class="p-3 text-center">
                                    <div class="fw-bold text-center text-warning" style="font-size:18px;">
                                        <div class="float-start ms-0 me-0 p-0" style="margin-top: 10px;">
                                            BDT
                                        </div>
                                        <div class="float-start ms-0 me-0 p-0" style="width:100px;">
                                            <input type="number" min=0 max="99999" oninput="validity.valid||(value='20000');" id="min_price" class="m-0 border-0 text-warning fw-bold bg-light" readonly="readonly" />
                                        </div>
                                        <div class="float-start ms-0 me-0 p-0" style="margin-top: 10px;">
                                           to BDT
                                        </div>
                                        <div class="float-start ms-0 me-0 p-0" style="width:100px;">
                                            <input type="number" min=0 max="100000" oninput="validity.valid||(value='80000');" id="max_price" class="m-0 border-0 text-warning fw-bold bg-light" readonly="readonly" />
                                        </div>

                                        <div>
                                            <div id="min_p"></div> <div id="max_p"></div>
                                        </div>

                                        
                                      <!-- <input type="number" min=0 max="99999" oninput="validity.valid||(value='20000');" id="min_price" class="price-range-field" />
                                      <input type="number" min=0 max="100000" oninput="validity.valid||(value='80000');" id="max_price" class="price-range-field" /> -->
                                    </div>
                                </div></div>
                            <!--// price range slider -->
                            </div>

                            <div class="col-md-5 col-lg-4 text-center">
                                <div>
                                    <select class="bg-dark select-icon text-white py-1">
                                        <option>Select Mobile Brands</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="bg-dark select-icon text-white py-1">
                                        <option>Select Mobile Brands</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="bg-dark select-icon text-white py-1">
                                        <option>Select Mobile Brands</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm px-5" type="submit"><span class="px-3">FIND MOBILE PHONES</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1 p-md-0">
                <div class="bg-white p-3" style="height:100%;">
                    <div class="row">
                        <div class="col-6 border-end border-2">
                            <div class="fw-bold border-bottom">
                                <span>By Brand</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                        </div>

                        <div class="col-6 border-start border-2">
                            <div class="fw-bold border-bottom">
                                <span>By Features</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                            <div class="border-bottom">
                                <span>Xiaomi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Mobiles -->
        <div class="row bg-white px-0 my-2 pt-1">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>Latest Mobiles</h5>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-sm px-2 py-0 font-12" href="#">View All</a>
                </div>
            </div>
            <div class="row text-center border p-0 m-0">
                @foreach($latestmobiles as $latestmobile)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 px-0 product_div">
                    <form method="POST">
                        <input type="text" name="post_id" hidden="hidden">
                        <div class="border border-3 h-100 position-relative">
                            <a class="text-decoration-none text-dark" href="{{ route('single_post.view',  ['postID' => $latestmobile->id, 'title' => str_replace(' ', '-', $latestmobile->title)] )}}">
                                <div>
                                    <img class="w-100" src="{{asset('admin_dashboard/mobile')}}/{{$latestmobile->post_img}}">
                                </div>
                                <div class="fw-bold p-1">
                                    <span>{{$latestmobile->title}}</span>
                                </div>
                                <div class="fw-bold pt-1 font-14">
                                    <span>BDT {{$latestmobile->official_price}}</span>
                                    <br><br><br>
                                </div>
                            </a>
                            <div class="border-top position-absolute bottom-0 w-100 text-center py-1 comapre_btn">
                                <span>+ compare</span>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Latest Mobiles -->

        <!-- Latest News & Reviews -->
        <div class="row bg-white px-0 my-4 pt-1">
            <div class="d-flex justify-content-between border-bottom">
                <div>
                    <h5>Latest News & Reviews</h5>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-sm px-2 py-0 font-12" href="#">Read More <i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 product_div">
                    <div class="p-2">
                        <div class="p-2">
                            <img class="w-100" src="{{asset('images/blog.png')}}">
                        </div>
                        <div class="fw-bold p-1 text-start">
                            <a class="text-decoration-none" href="#">Ptoduct Title dkjfh dkljfh dkfh dkfh dlkfh dlfh dfjh</a>
                        </div>
                        <div class="mt-2 font-14 text-start">
                            <span>by</span> <span class="fw-bold">App team</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 product_div">
                    <div class="p-2">
                        <div class="p-2">
                            <img class="w-100" src="{{asset('images/blog.png')}}">
                        </div>
                        <div class="fw-bold p-1 text-start">
                            <a class="text-decoration-none" href="#">Ptoduct Title dkjfh dkljfh dkfh dkfh dlkfh dlfh dfjh</a>
                        </div>
                        <div class="mt-2 font-14 text-start">
                            <span>by</span> <span class="fw-bold">App team</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 product_div">
                    <div class="p-2">
                        <div class="p-2">
                            <img class="w-100" src="{{asset('images/blog.png')}}">
                        </div>
                        <div class="fw-bold p-1 text-start">
                            <a class="text-decoration-none" href="#">Ptoduct Title dkjfh dkljfh dkfh dkfh dlkfh dlfh dfjh</a>
                        </div>
                        <div class="mt-2 font-14 text-start">
                            <span>by</span> <span class="fw-bold">App team</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 product_div">
                    <div class="p-2">
                        <div class="p-2">
                            <img class="w-100" src="{{asset('images/blog.png')}}">
                        </div>
                        <div class="fw-bold p-1 text-start">
                            <a class="text-decoration-none" href="#">Ptoduct Title dkjfh dkljfh dkfh dkfh dlkfh dlfh dfjh</a>
                        </div>
                        <div class="mt-2 font-14 text-start">
                            <span>by</span> <span class="fw-bold">App team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news & reviews -->

        <!-- Most Popular Mobiles -->
        <div class="row bg-white px-0 my-2 pt-1">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>Most Popular Mobiles</h5>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-sm px-2 py-0 font-12" href="#">View All</a>
                </div>
            </div>
            <div class="row text-center border p-0 m-0">
                @foreach($popularmobiles as $popularmobile)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 px-0 product_div">
                    <div class="border border-3 h-100 position-relative">
                        <a class="text-decoration-none text-dark" href="">
                            <div>
                                <img class="w-100" src="{{asset('admin_dashboard/mobile')}}/{{$popularmobile->post_img}}">
                            </div>
                            <div class="fw-bold p-1">
                                <span>{{$popularmobile->title}}fsg fsg fg sfg rttyhgdhdg</span>
                            </div>
                            <div class="fw-bold pt-1 font-14">
                                <span>BDT {{$popularmobile->official_price}}</span>
                                <br><br><br>
                            </div>
                        </a>
                        <div class="border-top position-absolute bottom-0 w-100 text-center py-1 comapre_btn">
                            <span>+ compare</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Most Popular Mobiles -->

        <!-- Upcoming Mobiles -->
        <div class="row bg-white px-0 my-4 pt-1">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>Upcoming Mobiles</h5>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-sm px-2 py-0 font-12" href="#">View All</a>
                </div>
            </div>
            <div class="row text-center border p-0 m-0">
                @foreach($upcomingmobiles as $upcomingmobile)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 px-0 product_div">
                    <div class="border border-3 h-100 position-relative">
                        <a class="text-decoration-none text-dark" href="">
                            <div>
                                <img class="w-100" src="{{asset('admin_dashboard/mobile')}}/{{$upcomingmobile->post_img}}">
                            </div>
                            <div class="fw-bold p-1">
                                <span>{{$upcomingmobile->title}}fsg fsg fg sfg rttyhgdhdg</span>
                            </div>
                            <div class="fw-bold pt-1 font-14">
                                <span>BDT {{$upcomingmobile->official_price}}</span>
                                <br><br><br>
                            </div>
                        </a>
                        <div class="border-top position-absolute bottom-0 w-100 text-center py-1 comapre_btn">
                            <span>+ compare</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Upcoming Mobiles -->


        <!-- Mobile Brdands -->
        <div class="row bg-white px-0 my-4 pt-1">
            <div>
                <h5>Mobile Brands</h5>
            </div>
            <div class="row text-center border p-0 m-0">
                <div class="col-6 col-md-3">
                    <div class="row">
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="row">
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="row">
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="row">
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                        <div class="col-md-6 border border-2 product_div my-1 my-md-0">
                            <div class="p-1">
                                <img class="w-100" src="{{asset('images/huawei.jpg')}}">
                            </div>
                            <div class="mt-2 py-2 fw-bold">
                                <span>Samsung</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center py-1">
                <a class="text-decoration-none" href="#">View All Mobile Brands</a>
            </div>
        </div>
        <!-- End Mobile Brands -->

        <!-- Mobile Compares -->
        <div class="row bg-white px-0 my-4 pt-1">
            <div>
                <h5>Mobile Compares</h5>
            </div>
            <div class="row text-center border p-0 m-0">
                <div class="col-6 col-md-3 border border-2 product_div my-1 my-md-0">
                    <div class="p-1">
                        <img class="w-100" src="{{asset('images/1632643314-product2.png')}}">
                    </div>
                    <div class="mt-2 py-2 fw-bold">
                        <span>Samsung</span>
                    </div>
                </div>

                <div class="col-6 col-md-3 border border-2 product_div my-1 my-md-0">
                    <div class="p-1">
                        <img class="w-100" src="{{asset('images/1632627840-product3.png')}}">
                    </div>
                    <div class="mt-2 py-2 fw-bold">
                        <span>Samsung</span>
                    </div>
                </div>

                <div class="col-6 col-md-3 border border-2 product_div my-1 my-md-0">
                    <div class="p-1">
                        <img class="w-100" src="{{asset('images/1632643220-product2.png')}}">
                    </div>
                    <div class="mt-2 py-2 fw-bold">
                        <span>Samsung</span>
                    </div>
                </div>

                <div class="col-6 col-md-3 border border-2 product_div my-1 my-md-0">
                    <div class="p-1">
                        <img class="w-100" src="{{asset('images/1632627840-product1.png')}}">
                    </div>
                    <div class="mt-2 py-2 fw-bold">
                        <span>Samsung</span>
                    </div>
                </div>
            </div>
            <div class="text-center py-1">
                <a class="text-decoration-none" href="#">View All Mobile Compares</a>
            </div>
        </div>
        <!-- End Mobile Compares -->
    </div>
</div>
 <!-- End View Home -->

 @endsection
