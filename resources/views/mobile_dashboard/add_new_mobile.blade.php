@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - New Mobile')
@section('content')
<div class="text-center text-success pb-1 mb-1">
	<h2>Add New Mobile</h2>
</div>
@if(Session::get('success'))
  <div id="smsDiv" class="text-center alert alert-success py-1 px-3">
    {{Session::get('success')}}
  </div>
@endif
@if(Session::get('fail'))
  <div id="smsDiv" class="text-center alert alert-danger py-1 px-3">
    {{Session::get('fail')}}
  </div>
@endif
<form method="POST" action="{{route('mobilepost.add')}}" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<!-- Left side of main content 111-->
		<div class="col-md-9  col-lg-10 border-right">
			<div class="bg-white px-2">
				<input type="text" name="added_by" value="{{session('user_name')}}" hidden="hidden">
				<div class="form-group">
					<label for="title">Product Title :</label>
					<span class="text-danger">@error ('title'){{$message}} @enderror</span>
					<input class="form-control" type="text" name="title" id="title">
				</div>
			</div>
			<div class="form-group border-bottom border-top mt-2 bg-white px-2">
				<div class="font-weight-bold py-1" id="descriptiondiv" style="cursor: pointer;" onclick="show_description();">
					<span for="description" style="cursor: pointer;">Product Description :</span>
					<span class="text-danger">@error ('description'){{$message}} @enderror</span>
					<span class="fa fa-chevron-down" style="float: right;"></span>
				</div>
				<div id="productdescription" class="bg-white pb-2">
					<textarea class="form-control" id="html_editor" name="description" id="description" rows="8"></textarea>
				</div>
			</div>
		</div>
		<!-- Right side of main content 111-->
		<div class="col-md-3 col-lg-2 bg-light">
			<!--  Brand Right Sidebar -->
			<div class="my-2">
				<div class="bg-white font-weight-bold py-1 border-bottom px-2" style="cursor: pointer;" onclick="show_brand();">
					<span>Brand </span><span class="fa fa-chevron-down" style="float: right;"></span>
					<span class="text-danger">@error ('brand_name'){{$message}} @enderror</span>
				</div>
				<div class="bg-white border-top border-secondary" id="branddiv">
					<select style="width: 100%; padding: 5px; cursor: pointer;" name="brand_name">
						<option>Select Brand</option>
						@foreach($brands as $brand)
						<option style="text-indent: 50px;" value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
						@endforeach
					</select>
				</div>
			</div>
		<!-- / Brand Right Sidebar -->
		<!-- Category Right Sidebar -->
			<div class="my-2">
				<div class="bg-white font-weight-bold py-1 border-bottom px-2" style="cursor: pointer;" onclick="show_category();">
					<span>Category </span><span class="fa fa-chevron-down" style="float: right;"></span>
					<span class="text-danger">@error ('category_name'){{$message}} @enderror</span>
				</div>
				<div class="bg-white pt-2 border-top border-secondary text-dark" id="catdiv">
					@foreach($categories as $category)
					<input type="text" name="category_id[]" value="{{$category->id}}" hidden="hidden">
					<input class="ml-2" type="checkbox" id="{{$category->category_name}}_{{$category->id}}" name="category_name[]" value="{{$category->category_name}}">
					<label for="{{$category->category_name}}_{{$category->id}}">{{$category->category_name}}</label><br>
					@endforeach
				</div>
			</div>
		<!-- / Category Right Sidebar -->
		</div>
		<!-- /Right side of main content 111-->

		<!-- Left side of main content 222 -->
		<div class="col-md-9 col-lg-10 border-right">
			<!-- Start SEO section -->
			<div class="bg-white px-2">
				<div class="font-weight-bold py-1" style="cursor: pointer;" onclick="show_seo();">
					<span class="">SEO Title & Description : <span class="fa fa-chevron-down" style="float: right;"></span></span>
				</div>
				<div id="seodiv" style="display: none;">
					<div class="form-group mb-3 pt-2">
						<label for="meta_title">Site Title :</label>
						<small class="text-warning">(Min 10 and Max 60 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('title'){{$message}} @enderror</span>
						<input class="form-control" type="text" name="meta_title" id="meta_title" maxlength="" onkeyup="title_char_check();"/>
						<p class="text-success" id="title_warning">You write <span id="title_char">0</span> characters out of 60</p>
					</div>
					<div class="form-group mb-3">
						<label for="meta">Meta Description :</label>
						<small class="text-warning">(Min 60 and Max 160 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('meta'){{$message}} @enderror</span>
						<textarea onkeyup="meta_char_check();" class="form-control" id="meta" name="meta_description" rows="4" ></textarea>
						<p class="text-success" id="meta_warning">You write <span id="meta_char">0</span> characters out of 160</p>
					</div>
					<div class="form-group">
			            <label for="key_words">Key-Words :</label>
			            <small class="text-warning">(Such as = keywor one, keyword two, keyword 3)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('key_words'){{$message}} @enderror</span>            
			            <textarea class="form-control" onkeyup="keywords_check();" id="key_words" name="key_words" rows="4" ></textarea>
			            <p class="text-success" id="keywords_warning">You use <span id="use_keywords">0</span> KeyWords</p>
			        </div>
				</div>
			</div>
			
			<!-- End SEO section -->
			<!-- Start Product Data Section -->
			<section class="bg-white mt-3 px-2">
				<div class="font-weight-bold py-1 mb-1" style="cursor: pointer;" onclick="show_product_data();">
					<span class="py-1">Mobile Product Data : <span class="fa fa-chevron-down" style="float: right;"></span></span>
				</div>
				<div id="productdata">
					<div class="data_option mb-1 pb-1 pt-0 mt-0 bg-white border-top border-bottom">
						<span class="px-3 py-1 active_option" onclick="general();" id="general_option">General</span>
						<span class="px-3 py-1" onclick="features();" id="features_option">Features</span>
						<span class="px-3 py-1" onclick="gallery();" id="gallery_option">Gallery</span>
						<span class="px-3 py-1" onclick="videos();" id="videos_option">Videos</span>
						<span class="px-3 py-1" onclick="specifications();" id="specifications_option">Specifications</span>
						<span class="px-3 py-1" onclick="rattings();" id="rattings_option">Ratings</span>
						<span class="px-3 py-1" onclick="offers();" id="offers_option">Offers</span>
					</div>
					<div class="bg-white">
						<!-- ======== general display ========  -->
						<div id="general_display" style="font-size: 12px;min-height: 300px;">
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row pb-2">
									<div class="col-sm-6">
										<span>Market Status</span>
										<input class="border-0 bg-white shadow-sm mt-1" type="text" name="market_status" style="width: 100%;">
									</div>
									<div class="col-sm-6">
										<span>Released</span>
										<input class="border-0 bg-white shadow-sm mt-1" type="date" name="released" style="width: 100%;">
									</div>
								</div>
								<div class="row py-2">
									<div class="col-sm-6">
										<span>Official Price</span>
										<input class="border-0 bg-white shadow-sm mt-1" type="text" name="official_price" style="width: 100%;">
									</div>
									<div class="col-sm-6">
										<span>Updated Date</span>
										<input class="border-0 bg-white shadow-sm mt-1" type="date" name="price_updated_on" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										<span>Official Website</span>
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="official_website" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row pb-1 shadow-sm mx-1">
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_5g_check" value="Yes"></span>
										<span>5G Supported by device</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_5g" style="width: 100%;">
									</div>
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_volte_check" value="Yes"></span>
										<span>VoLTE</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_volte" style="width: 100%;">
									</div>
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_fingerprint_check" value="Yes"></span>
										<span>Fingerprint sensor</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_fingerprint" style="width: 100%;">
									</div>
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_usb_check" value="Yes"></span>
										<span>USB OTG Support</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_usb" style="width: 100%;">
									</div>
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_wireless_check" value="Yes"></span>
										<span>Wireless Charging</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_wireless" style="width: 100%;">
									</div>
									<div class="col-sm-6 py-1">
										<span class="mr-2"><input type="checkbox" name="g_waterproof_check" value="Yes"></span>
										<span>Waterproof, IP68</span>
										<input class="border-0 bg-white shadow-sm mb-2" type="text" name="g_waterproof" style="width: 100%;">
									</div>
								</div>
							</div>

							<div id="variant_div" class="my-2">
								
							</div>
							<div class="my-3 ml-3">
								<input type="button" class="btn btn-success btn-sm py-0" onclick="productVariant();" value="+ Add Variant"/>
							</div>
						</div>
						<!-- //======== general display ========  -->
						<!-- ======== features display ========  -->
						<div id="features_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										OS :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="os" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										Display :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="display" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										Main Camera :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="main_camera" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										Front Camera :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="front__camera" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										RAM :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="ram" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										Storage :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="storage" style="width: 100%;">
									</div>
								</div>
							</div>
							<div class="bg-light mx-1 my-2 p-2">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										</span>Battery Capacity :
									</div>
									<div class="col-sm-8 col-md-9">
										<input class="border-0 bg-white shadow-sm" type="text" name="battery_capacity" style="width: 100%;">
									</div>
								</div>
							</div>
						</div>
						<!-- // ======== features display ========  -->
						<!-- ======== gallery display ========  -->
						<div id="gallery_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div id="image_div" class="row m-1 text-center">
								
							</div>
							<div class="my-3 ml-3">
								<input type="button" class="btn btn-success btn-sm py-0" onclick="productImage();" value="+ Add Image"/>
							</div>
						</div>
						<!-- end ======== gallery display ========  -->
						<!-- ======== videos display ========  -->
						<div id="videos_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div id="vide_div">
								
							</div>
							<div class="mt-3 ml-3">
								<input type="button" class="btn btn-success btn-sm py-0" onclick="productVideo();" value="+ Add Video"/>
							</div>
						</div>
						<!-- End ======== videos display ========  -->

						<!-- Start ======== Specifications display ========  -->
						<div id="specifications_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div class="row">
								<div class="col-3 col-md-2 data_spe_option pr-0 mr-0">
									<div>
										<!-- MobileSpecOne Table -->
									<span class="pl-2 py-1 border-bottom border-white active_spe_option" onclick="general_spe();" id="general_spe_option">General</span></div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="display_spe();" id="display_spe_option">Display</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="performance_spe();" id="performance_spe_option">Performance</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="design_spe();" id="design_spe_option">Design</div>
									<!-- // MobileSpecOne Table -->
									<!-- MobileSpecTwo Table -->
									<div class="pl-2 py-1 border-bottom border-white" onclick="camera_spe();" id="camera_spe_option">Camera</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="storage_spe();" id="storage_spe_option">Storage</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="battery_spe();" id="battery_spe_option">Battery</div>
									<!-- //MobileSpecTwo Table -->
									<!-- MobileSpecThree Table -->
									<div class="pl-2 py-1 border-bottom border-white" onclick="network_spe();" id="network_spe_option">Network & Connectivity</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="multimedia_spe();" id="multimedia_spe_option">Multimedia</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="sensores_spe();" id="sensores_spe_option">Sensors & Features</div>
									<div class="pl-2 py-1 border-bottom border-white" onclick="more_spe();" id="more_spe_option">More</div>
									<!-- // MobileSpecThree Table -->
								</div>
					<!-- Specifications main content -->
								<div class="col-9 col-md-10 px-0 mx-0">
									<!-- MobileSpecOne Table -->
								<!-- Specifications  General	 -->
									<div id="general_spe_display">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Device Type
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="device_type_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Brand
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="brand_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Model
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="model_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Released
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="date" name="released_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Colours
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="g_colours_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification General  -->
								<!-- Specifications  Display	 -->
									<div id="display_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Display Type
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="display_type_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Screen Size
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="screen_size_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Aspect Ratio
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="aspect_ratio_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Bezel-less Display
													<span class="mr-2" style="float: right;"><input type="checkbox" name="bezel_less_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="bezel_less_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Brightness
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="brightness_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Resolution
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="resolution_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Refresh Rate
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="refresh_rate_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Display Colors
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="display_colors_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Pixel Density
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="pixel_density_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Touch Screen
													<span class="mr-2" style="float: right;"><input type="checkbox" name="touch_screen_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="touch_screen_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Display Protection
												</div>
												<div class="col-sm-8 col-md-9">
													<textarea class="border-0 bg-white shadow-sm" type="text" name="display_protection_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Multitouch
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="multitouch_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Display  -->
								<!-- Specifications  Performance	 -->
									<div id="performance_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Operating System
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="operating_system_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Chipset
												</div>
												<div class="col-sm-8 col-md-9">
													<textarea class="border-0 bg-white shadow-sm" type="text" name="chipset_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													CPU
												</div>
												<div class="col-sm-8 col-md-9">
													<textarea class="border-0 bg-white shadow-sm" type="text" name="cpu_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Architecture
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="architecture_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Fabrication
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="fabrication_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													No of Cores
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="no_of_cores_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Graphics
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="graphics_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Performance  -->
								<!-- Specifications Design	 -->
									<div id="design_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Height
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="height_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Width
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="width_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Thickness
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="thickness_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Weight
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="weight_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Colours
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="colours_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Waterproof
													<span class="mr-2" style="float: right;"><input type="checkbox" name="waterproof_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="waterproof_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Ruggedness
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="ruggedness_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Build
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="build_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Design -->
								<!-- // MobileSpecOne Table -->

								<!-- SpecTwo Table -->
								<!-- Specifications Camera	 -->
									<div id="camera_spe_display" style="display: none;">
										<!-- for Rear Camera -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">Rear Camera</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Camera Setup</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_camera_setup_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Image Resolution</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_image_resolution_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Resolution</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_resolution_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Sensor</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_sensor_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Settings</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_settings_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Shooting Modes</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_shooting_modes_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Autofocus</span>
													<span class="ml-5"><input type="checkbox" name="rear_autofocus_spc_check" value="Yes"></span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_autofocus_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Flash</span>
													<span class="ml-5"><input type="checkbox" name="rear_flash_spc_check" value="Yes"></span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_flash_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>OIS</span>&nbsp;&nbsp;&nbsp;&nbsp;
													<input class="shadow-sm" type="checkbox" name="rear_ois_spc" value="Yes">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Features</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_features_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Video Resolution</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="rear_video_resolution_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<!-- for selfie camera -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">Selfie Camera</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Camera Setup</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_camera_setup_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Autofocus</span>
													<span class="ml-5"><input type="checkbox" name="selfie_autofocus_spc_check" value="Yes"></span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_autofocus_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Resolution</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_resolution_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Video Recording</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_video_recording_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Features</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_features_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Image Resolution</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_image_resolution_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Flash</span>
													<span class="ml-5"><input type="checkbox" name="selfie_flash_spc_check" value="Yes"></span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="selfie_flash_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Camera -->
								<!-- Specifications Storage 	 -->
									<div id="storage_spe_display" style="display: none;">
										<!-- for RAM Storage -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">RAM</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Type</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="ram_type_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Size</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="ram_size_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Available Space</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="ram_available_space_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													
												</div>
											</div>
										</div>
										<!-- for ROM Storage -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">ROM</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Type</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rom_type_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Size</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rom_size_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Available Space</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="rom_available_space_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Card Slot</span> &nbsp;
													<span class="ml-5"><input type="checkbox" name="rom_card_slot_spc_check" value="Yes"></span>
													<input class="border-0  shadow-sm mt-1" type="text" name="rom_card_slot_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Storage -->
								<!-- Specifications Battery	 -->
									<div id="battery_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Battery Type
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="battery_type_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Capacity
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="capacity_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Wireless Charging
													<span class="mr-2" style="float: right;"><input type="checkbox" name="wireless_charging_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0  shadow-sm" type="text" name="wireless_charging_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Charging
												</div>
												<div class="col-sm-8 col-md-9">
													<textarea class="border-0 bg-white shadow-sm" type="text" name="charging_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Quick Charging
													<span class="mr-2" style="float: right;"><input type="checkbox" name="quick_charging_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="quick_charging_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Placement
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="placement_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Talk Time
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="talk_time_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Music Play
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="music_play_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													USB Type-C 
													<span class="mr-2" style="float: right;"><input type="checkbox" name="usb_type_c_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="usb_type_c_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Battery -->
								<!-- // SpecTwo Table -->
								<!-- MobileSpecThree Table -->
								<!-- Specifications Network & Connectivity	 -->
									<div id="network_spe_display" style="display: none;">
										<!-- for WOLAN in Network and Connectivity  -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">WLAN</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Wi-Fi Features</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="wlan_wifi_features_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Wi-fi Calling</span>
													<span class="ml-5"><input type="checkbox" name="wlan_wifi_calling_spc_check" value="Yes"></span>
													<input class="border-0 shadow-sm mt-1" type="text" name="wlan_wifi_calling_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Bluetooth</span>
													<span class="ml-5"><input type="checkbox" name="wlan_bluetooth_spc_check" value="Yes"></span>
													<input class="border-0 shadow-sm mt-1" type="text" name="wlan_bluetooth_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>GPS</span>
													<span class="ml-5"><input type="checkbox" name="wlan_gps_spc_check" value="Yes"></span>
													<input class="border-0 shadow-sm mt-1" type="text" name="wlan_gps_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Infrared</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="wlan_infrared_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>Wi-fi Hotspot</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="wlan_wifi_hotspot_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>NFC</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="wlan_nfc_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>USB Connectivity</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="wlan_usb_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<!-- for Network in Network and Connectivity -->
										<div class="bg-light mx-1 my-2 p-2">
											<div class="mb-2 font-weight-bold border-bottom border-white">Network</div>
											<div class="row pb-2">
												<div class="col-sm-6">
													<span>Technology</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="network_technology_spc" style="width: 100%;" rows="3"></textarea>
												</div>
												<div class="col-sm-6">
													<span>Network Support</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="network_network_support_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>Speed</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="network_speed_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>SIM</span>
													<input class="border-0 bg-white shadow-sm mt-1" type="text" name="network_sim_spc" style="width: 100%;">
												</div>
											</div>
											<div class="row py-2">
												<div class="col-sm-6">
													<span>VoLTE</span> 
													<span class="ml-5"><input type="checkbox" name="network_volte_spc_check" value="Yes"></span>
													<input class="border-0 shadow-sm mt-1" type="text" name="network_volte_spc" style="width: 100%;">
												</div>
												<div class="col-sm-6">
													<span>SIM Size</span>
													<textarea class="border-0 bg-white shadow-sm mt-1" type="text" name="network_sim_size_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Network & Connectivity  -->
								<!-- Specifications Multimedia	 -->
									<div id="multimedia_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													FM Radio
													<span class="mr-2" style="float: right;"><input type="checkbox" name="fm_radio_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="fm_radio_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Loudspeaker
													<span class="mr-2" style="float: right;"><input type="checkbox" name="loudspeaker_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="loudspeaker_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Audio Player 
													<span class="mr-2" style="float: right;"><input type="checkbox" name="audio_player_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="audio_player_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Audio Jack 
													<span class="mr-2" style="float: right;"><input type="checkbox" name="audio_jack_spc_check" value="Yes"></span>
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 shadow-sm" type="text" name="audio_jack_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Alert Types
												</div>
												<div class="col-sm-8 col-md-9">
													<textarea class="border-0 bg-white shadow-sm" type="text" name="alert_types_spc" style="width: 100%;" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Ring Tones
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="ring_tones_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Stereo Speakers
												</div>
												<div class="col-sm-8 col-md-9">
												<input class="shadow-sm" type="checkbox" name="stereo_speakers_spc" value="Yes">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification Multimedia -->
								<!-- Specifications Sensors & Features	 -->
									<div id="sensores_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Fingerprint Sensor
												</div>
												<div class="col-sm-8 col-md-9">
													<input type="checkbox" name="fingerprint_sensor_spc" value="Yes">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Fingerprint Sensor Position
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="fingerprint_sensor_position_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3 align-middle">
													Fingerprint Sensor Type
												</div>
												<div class="col-sm-8 col-md-9 align-middle">
													<input class="align-middle border-0 bg-white shadow-sm" type="text" name="fingerprint_sensor_type_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Other Sensors
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="other_sensors_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										
									</div>
								<!-- End Specification Sensors & Features -->
								<!-- Specifications More	 -->
									<div id="more_spe_display" style="display: none;">
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Manufactured
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="manufactured_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Assembled
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="assembled_spc" style="width: 100%;">
												</div>
											</div>
										</div>
										<div class="bg-light mx-1 my-2 p-2">
											<div class="row">
												<div class="col-sm-4 col-md-3">
													Others Features
												</div>
												<div class="col-sm-8 col-md-9">
													<input class="border-0 bg-white shadow-sm" type="text" name="others_features_spc" style="width: 100%;">
												</div>
											</div>
										</div>
									</div>
								<!-- End Specification More -->
								<!-- // MobileSpecThree Table -->
								</div>
								
							</div>
						</div>
						<!-- End ======== Specifications display ========  -->

						<!-- ======== rattings display ========  -->
						<div id="rattings_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div>
								<!-- get total number of data to calculate average rating -->
								<input type="number" hidden="hidden" id="loopID" value="{{$ratings->count()}}">
								
								<div class="text-center bg-light font-weight-bold">
									<p class="py-2">Average Rating: 
									<span class="bg-white p-1">
										<input class="border-0" type="text" name="average_rating" id="average_rating" style="width: 20px; height: 14px;color: black; font-weight: bold;">
										<span style="letter-spacing: 1px;color: black;">/10</span>
									</span></p>
								</div>
								@foreach($ratings as $rating)
								<div class="bg-light mx-1 my-2 px-2 pt-2">	
									<div class="row px-3">
										<div class="col-3 font-weight-bold">{{$rating->rating_name}}
											<input type="text" name="rating_id[]" value="{{$rating->id}}" hidden="hidden">
											<input type="text" name="rating_name[]" value="{{$rating->rating_name}}" hidden="hidden">
										</div>
										<div class="col-7 text-center">
											<input style="width: 100%;" type="range" name="each_rating_value" min="0.0" max="10.0" step="0.1" id="{{$rating->rating_name}}" value="2">
										</div>
										<div class="col-2 text-center">
											<span class="bg-white p-1">
												 <input class="border-0" type="text" value="2.0" id="{{$rating->rating_name}}_{{$rating->id}}" name="rating_value[]" style="width: 20px; height: 12px;color: black;">
												<span style="letter-spacing: 1px;color: black;">/10</span>
											</span>
										</div>
									</div>
								</div>
								<!-- to get dynamic id to get and show results -->
								<script type="text/javascript">
									// to calculate the rating for each rating bar
									document.getElementById("{{$rating->rating_name}}").oninput = function() {
									document.getElementById("{{$rating->rating_name}}_{{$rating->id}}").value = this.value;
									// for average rating
									var loopcount=document.getElementById("loopID").value;
									var texts = document.getElementsByName("each_rating_value");
									var sum = 0;
									for( var i = 0; i < texts.length; i ++ ) {
									    var text_value = parseFloat(texts[i].value);
									    sum = sum + text_value;
									}
									var abd=sum/loopcount;
									var average= abd.toFixed(1);
									document.getElementById("average_rating").value = average;
								};
								</script>
								@endforeach
							</div>
							<script type="text/javascript">
									// for average rating
									var loopcount=document.getElementById("loopID").value;
									var texts = document.getElementsByName("each_rating_value");
									var sum = 0;
									for( var i = 0; i < texts.length; i ++ ) {
									    var text_value = parseFloat(texts[i].value);
									    sum = sum + text_value;
									}
									var abd=sum/loopcount;
									var average= abd.toFixed(1);
									document.getElementById("average_rating").value = average;
								</script>
						</div>
						<!-- ======== offers display ========  -->
						<div id="offers_display" style="display:none;font-size: 12px;min-height: 300px;">
							<div id="offer_div" class="my-2">
							
							</div>
							<div class="my-3 ml-3">
								<input type="button" class="btn btn-success btn-sm py-0" onclick="productOffer();" value="+ Add Offer"/>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- End Product Data Section -->
		</div>
		<!-- Right side of main content 222-->
		<div class="col-md-3 col-lg-2 bg-light">
			<div class="bg-white p-1 my-3">
				<div class="font-weight-bold mb-1">
					Product Type
				</div>
				<div>
					<select class="py-0 w-100" name="product_type" required="required">
						<option>Select</option>
						<option value="latest">Latest</option>
						<option value="popular">Popular</option>
						<option value="upcoming">Upcoming</option>
					</select>
				</div>
			</div>

			<div class="bg-white p-1 my-3">
				<div class="font-weight-bold mb-1">
					Post Status
				</div>
				<div>
					<select class="py-0 w-100" name="post_type" required="required">
						<option>Select</option>
						<option value="popular">Draft</option>
						<option value="upcoming">Publish</option>
					</select>
				</div>
			</div>
			<div class="my-2">
				<button type="submit" class="btn btn-success btn-sm py-0 px-1 w-100">Publish</button>
			</div>
		</div>
		<!-- /Right side of main content 222-->
	</div>
</form>
<script type="text/javascript">
// Each TextBox Enable or Disable by CheckBox
function TextBoxEnableDisable(bEnable, textBoxID){
     document.getElementById(textBoxID).disabled = !bEnable
}

// Show and hide Description
	function show_description() {
	var x = document.getElementById("productdescription");
	if (x.style.display === "none") {
	x.style.display = "block";
	} else {
	x.style.display = "none";
	}
	}
// Show and hide Product Data
	function show_product_data() {
	var x = document.getElementById("productdata");
	if (x.style.display === "none") {
	x.style.display = "block";
	} else {
	x.style.display = "none";
	}
	}
// Show and hide category
	function show_category() {
	var x = document.getElementById("catdiv");
	if (x.style.display === "none") {
	x.style.display = "block";
	} else {
	x.style.display = "none";
	}
	}
	// Show and hide Brand
	function show_brand() {
	var x = document.getElementById("branddiv");
	if (x.style.display === "none") {
	x.style.display = "block";
	} else {
	x.style.display = "none";
	}
	}
	// Show and hide Brand
	function show_seo() {
	var x = document.getElementById("seodiv");
	if (x.style.display === "none") {
	x.style.display = "block";
	} else {
	x.style.display = "none";
	}
	}

 // this is for product data option
      function remove_all() {
        document.getElementById("general_option").classList.remove("active_option");
        document.getElementById("features_option").classList.remove("active_option");
        document.getElementById("gallery_option").classList.remove("active_option");
        document.getElementById("videos_option").classList.remove("active_option");
        document.getElementById("specifications_option").classList.remove("active_option");
        document.getElementById("rattings_option").classList.remove("active_option");
        document.getElementById("offers_option").classList.remove("active_option");

        document.getElementById('general_display').style.display = "none";
        document.getElementById('features_display').style.display = "none";
        document.getElementById('gallery_display').style.display = "none";
        document.getElementById('videos_display').style.display = "none";
        document.getElementById('specifications_display').style.display = "none";
        document.getElementById('rattings_display').style.display = "none";
        document.getElementById('offers_display').style.display = "none";
      }
      function general() {
        remove_all();
        var element = document.getElementById("general_option");
        element.classList.add("active_option");
        document.getElementById('general_display').style.display = "block";
      }
      function features() {
        remove_all();
        var element = document.getElementById("features_option");
        element.classList.add("active_option");
        document.getElementById('features_display').style.display = "block";
      }
      function gallery() {
        remove_all();
        var element = document.getElementById("gallery_option");
        element.classList.add("active_option");
        document.getElementById('gallery_display').style.display = "block";
      }
      function videos() {
        remove_all();
        var element = document.getElementById("videos_option");
        element.classList.add("active_option");
        document.getElementById('videos_display').style.display = "block";
      }
      function specifications() {
        remove_all();
        var element = document.getElementById("specifications_option");
        element.classList.add("active_option");
        document.getElementById('specifications_display').style.display = "block";
      }
      function rattings() {
        remove_all();
        var element = document.getElementById("rattings_option");
        element.classList.add("active_option");
        document.getElementById('rattings_display').style.display = "block";
      }
      function offers() {
        remove_all();
        var element = document.getElementById("offers_option");
        element.classList.add("active_option");
        document.getElementById('offers_display').style.display = "block";
      }

    // add Variant name and variant url section ==== in Gereral ===
	  function productVariant() {
		var bglight_div= document.createElement("div");
		bglight_div.className="bg-light mx-1 px-2 pb-2 text-right border-bottom border-white";
		bglight_div.innerHTML='<button class="btn text-danger p-0 m-0 font-weight-bold" onclick="removeVariantDiv(this);">&times;</button><div class="row pb-2 text-left"><div class="col-sm-6"><span>Variant Name</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="variant_name[]" style="width: 100%;"></div><div class="col-sm-6"><span>Vriant URL</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="variant_url[]" style="width: 100%;"></div></div>';
		document.getElementById('variant_div').appendChild(bglight_div);
	}
	function removeVariantDiv(div){
	  div.parentNode.remove();
	}

// End product data option

// Start Specifications option in product data option
      function remove_all_spe() {
        document.getElementById("general_spe_option").classList.remove("active_spe_option");
        document.getElementById("display_spe_option").classList.remove("active_spe_option");
        document.getElementById("performance_spe_option").classList.remove("active_spe_option");
        document.getElementById("design_spe_option").classList.remove("active_spe_option");
        document.getElementById("camera_spe_option").classList.remove("active_spe_option");
        document.getElementById("storage_spe_option").classList.remove("active_spe_option");
        document.getElementById("battery_spe_option").classList.remove("active_spe_option");
        document.getElementById("network_spe_option").classList.remove("active_spe_option");
        document.getElementById("multimedia_spe_option").classList.remove("active_spe_option");
        document.getElementById("sensores_spe_option").classList.remove("active_spe_option");
        document.getElementById("more_spe_option").classList.remove("active_spe_option");

        document.getElementById('general_spe_display').style.display = "none";
        document.getElementById('display_spe_display').style.display = "none";
        document.getElementById('performance_spe_display').style.display = "none";
        document.getElementById('design_spe_display').style.display = "none";
        document.getElementById('camera_spe_display').style.display = "none";
        document.getElementById('storage_spe_display').style.display = "none";
        document.getElementById('battery_spe_display').style.display = "none";
        document.getElementById('network_spe_display').style.display = "none";
        document.getElementById('multimedia_spe_display').style.display = "none";
        document.getElementById('sensores_spe_display').style.display = "none";
        document.getElementById('more_spe_display').style.display = "none";
      }
      function general_spe() {
        remove_all_spe();
        var element = document.getElementById("general_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('general_spe_display').style.display = "block";
      }
      function display_spe() {
        remove_all_spe();
        var element = document.getElementById("display_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('display_spe_display').style.display = "block";
      }
      function performance_spe() {
        remove_all_spe();
        var element = document.getElementById("performance_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('performance_spe_display').style.display = "block";
      }
      function design_spe() {
        remove_all_spe();
        var element = document.getElementById("design_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('design_spe_display').style.display = "block";
      }
      function camera_spe() {
        remove_all_spe();
        var element = document.getElementById("camera_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('camera_spe_display').style.display = "block";
      }
      function storage_spe() {
        remove_all_spe();
        var element = document.getElementById("storage_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('storage_spe_display').style.display = "block";
      }
      function battery_spe() {
        remove_all_spe();
        var element = document.getElementById("battery_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('battery_spe_display').style.display = "block";
      }
      function network_spe() {
        remove_all_spe();
        var element = document.getElementById("network_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('network_spe_display').style.display = "block";
      }
      function multimedia_spe() {
        remove_all_spe();
        var element = document.getElementById("multimedia_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('multimedia_spe_display').style.display = "block";
      }
      function sensores_spe() {
        remove_all_spe();
        var element = document.getElementById("sensores_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('sensores_spe_display').style.display = "block";
      }
      function more_spe() {
        remove_all_spe();
        var element = document.getElementById("more_spe_option");
        element.classList.add("active_spe_option");
        document.getElementById('more_spe_display').style.display = "block";
      }


// Product Image prview and add image section
      function previewFile(input) {
		  var preview = input.nextElementSibling;
		  var file = input.files[0];
		  var reader = new FileReader();

		  reader.onloadend = function() {
		    preview.src = reader.result;
		  }
		  if (file) {
		    reader.readAsDataURL(file);
		  } else {
		    preview.src = "";
		  }
		}
		// add Image section  ===
	  function productImage() {
		var bglight_div= document.createElement("div");
		bglight_div.className="bg-light text-right m-1";
		bglight_div.style="width: 180px; height:170px; float: left;";
		bglight_div.innerHTML='<button class="btn text-danger p-0 m-0 font-weight-bold mr-2" onclick="removeImageDiv(this);">&times;</button><div class="text-center"><input class="mb-1 ml-1" type="file" name="product_img[]" onchange="previewFile(this)"><img height="100px" width="150px"></div>';
		document.getElementById('image_div').appendChild(bglight_div);
	}
	function removeImageDiv(div){
	  div.parentNode.remove();
	}



	// add video url section =======
	  function productVideo() {
		var bglight_div= document.createElement("div");
		bglight_div.className="bg-light mx-1 my-2 p-2";
		bglight_div.innerHTML='<button class="close text-danger" onclick="removeVideoDiv(this);">&times;</button><div class="row">									<div class="col-sm-4 col-md-3"><span class="fa fa-video-camera mr-2"></span>Video URL</div><div class="col-sm-8 col-md-9"><input class="border-0 bg-white shadow-sm" type="text" name="video_url[]" style="width: 100%;"></div></div>';
		document.getElementById('vide_div').appendChild(bglight_div);
	}
	function removeVideoDiv(div){
	  div.parentNode.remove();
	}
	//-------------
// add Offer section  ===
  function productOffer() {
	var bglight_div= document.createElement("div");
	bglight_div.className="bg-light mx-1 px-2 pb-2 text-right mt-1";
	bglight_div.innerHTML='<button class="btn text-danger p-0 m-0 font-weight-bold" onclick="removeOfferDiv(this);">&times;</button><div class="row pb-2 text-left"><div class="col-sm-4"><span>Store</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="offer_store[]" style="width: 100%;"></div><div class="col-sm-8"><span>Offer Title</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="offer_title[]" style="width: 100%;"></div></div><div class="row py-2 text-left"><div class="col-sm-4"><span>Offer Price</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="offer_price[]" style="width: 100%;"></div><div class="col-sm-8"><span>Offer URL</span><input class="border-0 bg-white shadow-sm mt-1" type="text" name="offter_url[]" style="width: 100%;"></div></div>';
	document.getElementById('offer_div').appendChild(bglight_div);
}
function removeOfferDiv(div){
  div.parentNode.remove();
}
</script>
@endsection