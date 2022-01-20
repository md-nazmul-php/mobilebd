@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Tablet - Edit Brands')

@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1" href="{{route('tablet.all')}}">Products</a>
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('tablet.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('tablet.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('tablet.rating')}}">Rating</a>
	
</div>
<!-- setting page's main content here -->
<div class="">
	<div class="col-md-12 ml-auto">
		<div class="text-center">
			<h2 class="text-success">Edit Tablet Brand</h2>
		</div>
		<div class="mt-5 mb-3 px-2">
			<div class="my-2">
				<a class="btn btn-success btn-sm py-0" href="{{route('tablet.brand')}}">Add New Brand</a>
			</div>
			<form method="POST" action="{{route('edit_tablet_brand.save')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<input type="text" name="created_by" value="{{session('user_name')}}" style="display: none;">
					<input type="text" name="product_id" value="tablet" style="display: none;">
					<input type="text" name="id" value="{{$tablet_brand_edit->id}}" hidden="hidden">
				    <label for="brand_name">Edit Brand Name :</label>
				    <span class="text-danger">@error ('brand_name'){{$message}} @enderror</span>
				    <input type="text" class="form-control" name="brand_name" id="brand_name" value="{{$tablet_brand_edit->brand_name}}">
				</div>
				<div class="form-group">
					<label for="brand_name">Edit Description :</label>
				    <span class="text-danger">@error ('description'){{$message}} @enderror</span>
				    <textarea class="form-control" id="html_editor" name="description" rows="4">{{$tablet_brand_edit->description}}</textarea>
					
				</div>
				<div class="form-group">
					<label for="brand_img">Change Brand image :</label>
					<input class="border-0" type="file" name="brand_img" id="brand_img">
	            	<input type="text" name="imgName" value="{{$tablet_brand_edit->brand_img}}" hidden="hidden">
				</div>
				<div>
					@if($tablet_brand_edit->brand_img=='')
			          <img class="img" id="brand_img_priveiw" width="190" height="80" src="{{asset('admin_dashboard/images')}}/no_image.jpg">    
			          @else
			          <img class="img" id="brand_img_priveiw" width="190" height="80" src="{{asset('admin_dashboard/brand_img')}}/{{$tablet_brand_edit->brand_img}}">
			        @endif
				</div>
		            
		      
				<div class="mt-5">
					<button class="btn btn-warning font-weight-bold py-0" type="submit" name="add_brand" id="add_brand">Save Brand</button>
				</div>
			</form>
		</div>
	</div>
</div>



<!-- To preview Upload image -->
  <script type="text/javascript">
    brand_img.onchange = evt => {
        const [file] = brand_img.files
        if (file) {
            brand_img_priveiw.src = URL.createObjectURL(file);
         }
        }
  </script>
@endsection