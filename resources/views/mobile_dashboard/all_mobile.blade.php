@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - Mobile')

@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('mobile.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('mobile.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('mobile.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('mobile.rating')}}">Rating</a>
	
</div>

<div class="mt-3 mb-2">
	<a class="btn btn-outline-success btn-sm py-0 px-2" href="{{route('mobile.add')}}">Post New Product</a>
</div>
@if(Session::get('actionSM'))
  <div id="smsDiv" class="text-center alert alert-success py-1 px-3">
    {{Session::get('actionSM')}}
  </div>
@endif
<div class="mt-1 px-2">
	<table id="dataTable" class="table table-stripled">
		<thead>
			<tr class="text-center">
				<th>SL</th>
				<th>Title</th>
				<th>Brand</th>
				<th>Category</th>
				<th>Price</th>
				<th>Product Type</th>
				<th>Posted By & Date</th>
				<th>Status</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			@foreach($allposts as $allpost)
			<tr class="text-center">
				<td>{{$loop->iteration}}</td>
				<td class="p-0 m-0">
					<div class="my-2" style="position: relative; min-height: 60px; max-height: 150px;">
						<div class="" style="position:absolute; top: 0; left: 0;">
							{{$allpost->title}}
						</div>
						<div class="d-flex p-0" style="font-size: 10px;position:absolute; bottom: 0; left: 0;">
							<!-- View Data in new tab (fron site) -->
							<form action="{{route('view_mobile_post.page', ['postID' => $allpost->id])}}" method="post">
								@csrf
								<button style="font-size: 12px;" type="submit" class="btn btn-outline-primary btn-sm px-1 py-0 border-0 m-0">View</button>
							</form>
							<!-- Edit Data in POST Method -->
							<form action="{{route('view_edit_mobile_post.page', ['postID' => $allpost->id])}}" method="post">
								@csrf
								<button style="font-size: 12px;" type="submit" class="btn btn-outline-success btn-sm px-1 py-0 border-0 m-0">Edit</button>
							</form>
							<!-- Delete Data in POST Method -->
							@if( session('admin_type')=="SADM"||session('admin_type')=="ADM")
							<form action="{{ route('delete_post.mobile', ['postID' => $allpost->id]) }}" method="post">
								@csrf
							    <button style="font-size: 12px;" type="submit" class="btn btn-outline-danger btn-sm px-1 py-0 border-0 m-0">Delete</button>
							    <input type="hidden" name="_token" value="{{ Session::token() }}">
							</form>
							@endif
						</div>
					</div>
				</td>
				<td>{{$allpost->brand_name}}</td>
				<td>{{$allpost->category_name}}</td>
				<td>{{$allpost->price}}</td>
				<td>{{$allpost->product_type}}</td>
				<td>
					<div class="mb-2 pb-1 border-bottom">
						{{$allpost->added_by}}
					</div>
					<div>
						{{date("d M Y", strtotime($allpost->created_at))}}
					</div>
				</td>
				<td>{{$allpost->post_type}}</td>
				<td>
					<img class="img" width="50" height="50" src="{{asset('admin_dashboard/mobile')}}/{{$allpost->post_img}}">
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>

	

@endsection