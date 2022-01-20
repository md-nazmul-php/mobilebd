@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - New Mobile')
@section('content')
<div class="bg-secondary text-center text-white pb-1 mb-2">
	<h2>Add New Mobile</h2>
</div>
<form method="POST" action="{{route('newcamera.add')}}">
	@csrf
	<div class="row">
		<!-- Left side of main content -->
		<div class="col-md-9 border-right">
			<div class="px-2">
				<div class="form-group">
					<label for="title">Product Title :</label>
					<input class="form-control" type="text" name="title" id="title">
				</div>
			</div>
			<div class="form-group border-bottom border-top pt-1 my-1">
				<div class="pl-2 text-white font-weight-bold pt-1" id="descriptiondiv" style="cursor: pointer; background-color: #A9B5B5;" onclick="show_description();">
					<label for="description" style="cursor: pointer;">Product Description :</label><span class="fa fa-chevron-down pr-2" style="float: right;"></span>
				</div>
				<div id="productdescription">
					<textarea class="form-control" id="html_editor" name="description" id="description" rows="8"></textarea>
				</div>
			</div>
			<!-- Start SEO section -->
			<section>
				<div class="text-white font-weight-bold pl-2" style="cursor: pointer; background-color: #A9B5B5;" onclick="show_seo();">
					<p class="py-1">SEO Title & Description : <span class="fa fa-chevron-down pr-2" style="float: right;"></span></p>
				</div>
				<div id="seodiv" class="px-2" style="display: none;">
					<div class="form-group mb-4">
						<label for="meta_title">Site Title :</label>
						<small class="text-warning">(Min 10 and Max 60 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('title'){{$message}} @enderror</span>
						<input class="form-control" type="text" name="meta_title" id="meta_title" maxlength="" onkeyup="title_char_check();"/>
						<p class="text-success" id="title_warning">You write <span id="title_char">0</span> characters out of 60</p>
					</div>
					<div class="form-group">
						<label for="meta">Meta Description :</label>
						<small class="text-warning">(Min 60 and Max 160 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('meta'){{$message}} @enderror</span>
						<textarea onkeyup="meta_char_check();" class="form-control" id="meta"  name="meta_description" rows="4" ></textarea>
						<p class="text-success" id="meta_warning">You write <span id="meta_char">0</span> characters out of 160</p>
					</div>
				</div>
			</section>
			<!-- End SEO section -->
			<!-- Start Product Data Section -->
			<section class="mt-2">
				<div class="text-white font-weight-bold pl-2" style="cursor: pointer; background-color: #A9B5B5;" onclick="show_product_data();">
					<p class="py-1">Mobile Product Data : <span class="fa fa-chevron-down pr-2" style="float: right;"></span></p>
				</div>
				<div id="productdata">
					<div class="data_option mb-2 pb-1 pt-0 mt-0 border-bottom bg-light">
						<span class="px-3 py-1 active_option" onclick="general();" id="general_option">General</span>
						<span class="px-3 py-1" onclick="features();" id="features_option">Features</span>
						<span class="px-3 py-1" onclick="gallery();" id="gallery_option">Gallery</span>
						<span class="px-3 py-1" onclick="videos();" id="videos_option">Videos</span>
						<span class="px-3 py-1" onclick="rattings();" id="rattings_option">Ratings</span>
						<span class="px-3 py-1" onclick="attributes_f();" id="attributes_option">Attributes</span>
						<span class="px-3 py-1" onclick="offers();" id="offers_option">Offers</span>
					</div>
					<div>
						<!-- ======== general display ========  -->
						<div id="general_display">
							<div class="row px-2" style="font-size: 12px;">
								<div class="col-md-6">
									<div class="form-group">
										<label for="price">Price :</label>&nbsp;&nbsp;&nbsp;
										<span>$</span>
										<input class="form-control" type="text" name="price" id="price">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="price_date">Price Updated at :</label>
										<input class="form-control" type="date" name="price_date" id="price_date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="unofficial_price">Unofficial Price :</label>&nbsp;&nbsp;&nbsp;
										<span>$</span>
										<input class="form-control" type="text" name="unofficial_price" id="unofficial_price">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="variant">Variant :</label>
										<input class="form-control" type="text" name="variant" id="variant">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="expected_price">Expected Price :</label>&nbsp;&nbsp;&nbsp;
										<span>$</span>
										<input class="form-control" type="text" name="expected_price" id="expected_price">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="sku">SKU :</label>
										<input class="form-control" type="text" name="sku" id="sku">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="availability">Availability :</label>
										<select name="availability" id="availability" class="form-control">
											<option value="In Stock">In Stock</option>
											<option value="Stock Out">Stock Out</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="quantity">Quantity :</label>
										<input class="form-control" type="number" name="quantity" id="quantity" value="0">
									</div>
								</div>
							</div>
						</div>
						<!-- ======== features display ========  -->
						<div id="features_display" style="display:none;">
							<div class="row px-2" style="font-size: 12px;">
								<div class="col-md-6">
									<div class="form-group">
										<label for="released"><span class="fa fa-calendar mr-2"></span>Released :</label>
										<input class="form-control" type="date" name="released" id="released">
									</div>
									<div class="form-group">
										<label for="os"><span class="fa fa-android mr-2"></span>OS :</label>
										<input class="form-control" type="text" name="os" id="os">
									</div>
									<div class="form-group">
										<label for="display"><span class="fa fa-mobile mr-2" style="font-size: 16px;"></span>Display :</label>
										<input class="form-control" type="text" name="display" id="display">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="camera"><span class="fa fa-camera mr-2"></span>Camera :</label>
										<input class="form-control" type="text" name="camera" id="camera">
									</div>
									<div class="form-group">
										<label for="memory"><span class="fa fa-hdd-o mr-2"></span>Memory :</label>
										<input class="form-control" type="text" name="memory" id="memory">
									</div>
									<div class="form-group">
										<label for="battery"><span class="fa fa-battery-half mr-2"></span>Battery :</label>
										<input class="form-control" type="text" name="battery" id="battery">
									</div>
								</div>
							</div>
						</div>
						<!-- ======== gallery display ========  -->
						<div id="gallery_display" style="display:none;">
							<div>
								Name:ggggg aa <input type="text"/>
							</div>
						</div>
						<!-- ======== videos display ========  -->
						<div id="videos_display" style="display:none;">
							<div>
								Name vvvv: <input type="text"/>
							</div>
						</div>
						<!-- ======== rattings display ========  -->
						<div id="rattings_display" style="display:none;">
							<div id="demo">
								
							</div>
							<div>
								@foreach($ratings as $rating)
								<div class="row px-3">
									<div class="col-3 font-weight-bold border-bottom py-2">{{$rating->rating_name}}</div>
									<div class="col-7 text-center py-2">
										<input class="custom-range" style="width: 100%;" type="range" min="0.0" max="10.0" step="0.1" id="{{$rating->rating_name}}">
									</div>
									<div class="col-2 text-center font-weight-bold border-bottom py-2">
										<span id="{{$rating->rating_name}}.{{$rating->id}}" style="letter-spacing: 1px;">5</span>
										<span style="letter-spacing: 1px;">/10</span>
									</div>
								</div>
								<!-- to get dynamic id to get and show results -->
								<script type="text/javascript">
									document.getElementById("{{$rating->rating_name}}").oninput = function() {
									document.getElementById("{{$rating->rating_name}}.{{$rating->id}}").innerHTML = this.value;
								}
								</script>
								@endforeach
							</div>
						</div>
						<!-- ======== attributes display ========  -->
						<div id="attributes_display" style="display:none;">
							<div>
								Name aaaa: <input type="text"/>
							</div>
						</div>
						<!-- ======== offers display ========  -->
						<div id="offers_display" style="display:none;">
							<div>
								Name ooooo: <input type="text"/>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Product Data Section -->
		</div>
		<!-- Right side of main content -->
		<div class="col-md-3 bg-light">
			<div class="px-2">
				<div class="my-3">
					<div class="text-white" style="cursor: pointer; background-color: #A9B5B5;" onclick="show_brand();">
						<p class="px-2 py-1">Brand <span class="fa fa-chevron-down" style="float: right;"></span> </p>
					</div>
					<div class="bg-white" id="branddiv" style="display: none;">
						@foreach($brands as $brand)
						<input type="checkbox" id="{{$brand->brand_id}}" name="camera_video[]" value="{{$brand->brand_name}}">
						<label for="{{$brand->brand_id}}">{{$brand->brand_name}}</label><br>
						@endforeach
					</div>
				</div>
				<div class="my-3">
					<div class="text-white" style="cursor: pointer; background-color: #A9B5B5;" onclick="show_category();">
						<p class="px-2 py-1">Category <span class="fa fa-chevron-down" style="float: right;"></span> </p>
					</div>
					<div class="bg-white" id="catdiv" style="display: none;">
						@foreach($categories as $category)
						{{$category->category_name}}<br>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="m-5">
		<button type="submit" class="btn btn-success">Add</button>
	</div>
</form>
<script type="text/javascript">


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
</script>
@endsection