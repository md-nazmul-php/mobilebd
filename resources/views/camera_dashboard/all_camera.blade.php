@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Product - Camera')

@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('camera.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('camera.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('camera.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('camera.rating')}}">Rating</a>
	
</div>

<div class="mt-3">
	<a class="bg-success text-white py-1 px-2" href="{{route('camera.add')}}">Post New Product</a>
</div>
<div class="mt-1 px-2">
	<table id="dataTable" class="table table-stripled">
		<thead>
			<tr>
				<th>SL</th>
				<th>Title</th>
				<th>Brand</th>
				<th>Category</th>
				<th>Price</th>
				<th>Posted By</th>
				<th>Posted Date</th>
				<th>Photo</th>
			</tr>
		</thead>
	</table>
</div>

	

@endsection