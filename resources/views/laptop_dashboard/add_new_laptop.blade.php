@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - New Laptop')
@section('content')
<div class="bg-secondary text-center text-white pb-1 mb-2">
    <h2>Add New Laptop</h2>
</div>
<form method="POST" action="">
	@csrf
	<div class="row">
	<!-- Left side of main content -->
		<div class="col-md-9 border-right">
			<div class="px-2">
				<div class="form-group">
					<label for="title">Product Title :</label>
					<input class="form-control" type="text" name="title" id="title">
				</div>
				<div class="form-group">
					<label for="camera_description">Product Description :</label>
					<textarea class="form-control" id="html_editor" name="description" id="description" rows="8"></textarea>
				</div>
			</div>
			<div class="data_option my-2 pb-1 border-bottom bg-light">
				<h6 class="ml-3">Laptop Product Data : </h6>
				<span class="px-3 py-1 active_option" onclick="general();" id="general_option">General</span>
				<span class="px-3 py-1" onclick="option1();" id="option1">option</span>
				<span class="px-3 py-1" onclick="option2();" id="option2">option</span>
				<span class="px-3 py-1" onclick="option3();" id="option3">option</span>
				<span class="px-3 py-1" onclick="option4();" id="option4">option</span>
			</div>

			<div>
				<div id="general_display" style="">
				  <div> 
				  Name gggg: <input type="text"/>
				  </div>
				</div>
				<div id="d1" style="display:none;">
				  <div> 
				  Name:11 <input type="text"/>
				  </div>
				</div>

				<div id="d2" style="display:none;">
				  <div> 
				  Name:222 <input type="text"/>
				  </div>
				</div>

				<div id="d3" style="display:none;">
				  <div> 
				  Name33: <input type="text"/>
				  </div>
				</div>
				<div id="d4" style="display:none;">
				  <div> 
				  Name44: <input type="text"/>
				  </div>
				</div>

			</div>
			
		</div>


	<!-- Right side of main content -->
		<div class="col-md-3 bg-light">
			<div class="px-2">
				<div class="my-3">
					<div class="bg-secondary text-white" style="cursor: pointer;" onclick="show_brand();">
						<p class="px-2 py-1">Brand <span class="fa fa-chevron-down" style="float: right;"></span> </p>
					</div>
					<div id="branddiv" style="display: none;" class="bg-white">
						@foreach($brands as $brand)
						<input type="checkbox" id="vehicle3" name="vehicle3" value="{{$brand->brand_name}}">
						<label for="vehicle3">{{$brand->brand_name}}</label><br>
						@endforeach
					</div>
				</div>

				<div class="my-3">
					<div class="bg-secondary text-white" style="cursor: pointer;" onclick="show_category();">
						<p class="px-2 py-1">Category <span class="fa fa-chevron-down" style="float: right;"></span> </p>
					</div>
					<div id="catdiv" style="display: none;" class="bg-white">
						@foreach($categories as $category)
						{{$category->category_name}}<br>
						@endforeach
					</div>
				</div>
			</div>

		</div>
	</div>
</form>


<script type="text/javascript">
	function show_category() {
	  var x = document.getElementById("catdiv");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}

	function show_brand() {
	  var x = document.getElementById("branddiv");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}
</script>
@endsection