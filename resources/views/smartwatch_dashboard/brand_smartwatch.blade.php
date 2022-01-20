@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Smartwatch - Brands')

@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1" href="{{route('smartwatch.all')}}">Products</a>
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('smartwatch.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('smartwatch.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('smartwatch.rating')}}">Rating</a>
	
</div>
<!-- setting page's main content here -->
<div class="row">
	<div class="col-md-4 border-right">
		<div class="text-center">
			<h2 class="text-success">Add new Smartwatch Brand</h2>
		</div>
		@if(Session::get('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif
          @if(Session::get('fail'))
          <div class="alert alert-danger">
            {{Session::get('fail')}}
          </div>
          @endif
		<div class="mt-5 mb-3 px-2">
			<form method="POST" action="{{route('smartwatch_brand.save')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<input type="text" name="created_by" value="{{session('user_name')}}" style="display: none;">
					<input type="text" name="product_id" value="smartwatch" style="display: none;">
				    <label for="brand_name">Brand Name :</label>
				    <span class="text-danger">@error ('brand_name'){{$message}} @enderror</span>
				    <input type="text" class="form-control" name="brand_name" id="brand_name">
				</div>
				<div class="form-group">
					<label for="brand_name">Description :</label>
				    <span class="text-danger">@error ('description'){{$message}} @enderror</span>
				    <textarea class="form-control" id="html_editor" name="description" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="brand_img">Brand image :</label>
					<input class="border-0" type="file" name="brand_img" id="brand_img">
	            	<input type="text" name="imgName" value="" hidden="hidden">
				</div>
				<div>
					<img class="img" id="brand_img_priveiw" width="190" height="80" src="{{asset('admin_dashboard/images')}}/no_image.jpg">
				</div>
		            
		      
				<div class="mt-5">
					<button class="btn btn-warning font-weight-bold py-0" type="submit" name="add_brand" id="add_brand">Create Brand</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-8">
		<div class="text-center text-primary">
			<h2 class="pb-2">Smartwatch Brands (Total : {{$brands->count()}})</h2>
		</div>
		@if(Session::get('actionSM'))
          <div class="alert alert-success">
            {{Session::get('actionSM')}}
          </div>
          @endif
		<div class="px-2">
			<table id="dataTable" class="table">
				<thead>
					<tr class="text-center">
						<th>SL</th>
						<th>Brand Name</th>
						<th>Brand Image</th>
						<th>Description</th>
						<th>Created By, Date</th>
						<th>Count</th>
					</tr>
				</thead>
				<tbody>
					@foreach($brands as $brand)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td class="p-0 m-0">
							<div class="my-2" style="position: relative; min-height: 80px; max-height: 150px;">
							<div class="" style="position:absolute; top: 0; left: 0;">{{$brand->brand_name}}</div>
							<!-- Delete Data in POST Method -->
							<div class="d-flex p-0" style="font-size: 10px;position:absolute; bottom: 0; left: 0;">
								<!-- View Data in new tab (fron site) -->
								<form action="#" method="post">
									@csrf
									<button style="font-size: 12px;" type="submit" class="btn btn-outline-primary btn-sm px-1 py-0 border-0 m-0">View</button>
								</form>
								<!-- Edit Data in POST Method -->
								<form action="{{ route('edit_smartwatch_brand.page', ['brandID' => $brand->id]) }}" method="post">
									@csrf
									<button style="font-size: 12px;" type="submit" class="btn btn-outline-success btn-sm px-1 py-0 border-0 m-0">Edit</button>
								</form>
								<!-- Delete Data in POST Method -->
								@if( session('admin_type')=="SADM"||session('admin_type')=="ADM")
								<form action="{{ route('delete_brand.smartwatch', ['brandID' => $brand->id]) }}" method="post">
									@csrf
								    <button style="font-size: 12px;" type="submit" class="btn btn-outline-danger btn-sm px-1 py-0 border-0 m-0">Delete</button>
								    <input type="hidden" name="_token" value="{{ Session::token() }}">
								</form>
								@endif
							</div></div>
						</td>
						<td>
							@if($brand->brand_img=='')
					          <img class="img" width="100" height="50" src="{{asset('admin_dashboard/images')}}/no_image.jpg">    
					          @else
					          <img class="img" width="100" height="50" src="{{asset('admin_dashboard/brand_img')}}/{{$brand->brand_img}}">
					        @endif
						</td>
						<td>
							{!! $brand->description !!}
						</td>
						<td class="text-center">
							<div class="mb-2 pb-1 border-bottom">
								{{$brand->created_by}}
							</div>
							<div>
								{{date("d M Y", strtotime($brand->created_at))}}
							</div>
						</td>
						<td class="text-center">
							posts
							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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