@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Camera - Rating')
@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1" href="{{route('camera.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('camera.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('camera.category')}}">Category</a>
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('camera.rating')}}">Rating</a>
	
</div>
<!-- setting page's main content here -->
<div class="row">
	<div class="col-md-4 border-right">
		<div class="text-center">
			<h2 class="text-success">Add new Camera Rating</h2>
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
			<form method="POST" action="{{route('camera_rating.save')}}">
				@csrf
				<div class="form-group">
					<input type="text" name="created_by" value="{{session('user_name')}}" style="display: none;">
					<input type="text" name="product_id" value="camera" style="display: none;">
				    <label for="rating_name">Rating Name :</label>
				    <span class="text-danger">@error ('rating_name'){{$message}} @enderror</span>
				    <input type="text" class="form-control" name="rating_name" id="rating_name">
				    <input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
				<div class="form-group">
					<label for="brand_name">Description :</label>
				    <span class="text-danger">@error ('description'){{$message}} @enderror</span>
				    <textarea class="form-control" id="html_editor" name="description" rows="4"></textarea>
				</div>
				<div class="mt-5">
					<button class="btn btn-warning font-weight-bold py-0" type="submit" name="add_rating" id="add_rating">Create Rating</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-8">
		<div class="text-center text-primary">
			<h2>Camera Ratings (Total: {{$ratings->count()}})</h2>
		</div>
		@if(Session::get('actionSM'))
          <div class="alert alert-success">
            {{Session::get('actionSM')}}
          </div>
          @endif
		<div class="mt-3 px-2">
			<table id="dataTable" class="table">
				<thead>
					<tr class="text-center">
						<th>SL</th>
						<th>Rating Name</th>
						<th>Description </th>
						<th>Created By, Date</th>
						<th>Count</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ratings as $rating)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td class="p-0 m-0">
							<div class="my-2" style="position: relative; min-height: 60px; max-height: 150px;">
							<div class="" style="position:absolute; top: 0; left: 0;">{{$rating->rating_name}}</div>
							<!-- Delete Data in POST Method -->
							<div class="d-flex p-0" style="font-size: 10px;position:absolute; bottom: 0; left: 0;">
								<!-- View Data in new tab (fron site) -->
								<form action="#" method="post">
									@csrf
									<button style="font-size: 12px;" type="submit" class="btn btn-outline-primary btn-sm px-1 py-0 border-0 m-0">View</button>
								</form>
								<!-- Edit Data in POST Method -->
								<form action="{{ route('edit_camera_rating.page', ['ratingID' => $rating->id]) }}" method="post">
									@csrf
									<button style="font-size: 12px;" type="submit" class="btn btn-outline-success btn-sm px-1 py-0 border-0 m-0">Edit</button>
								</form>
								<!-- Delete Data in POST Method -->
								@if( session('admin_type')=="SADM"||session('admin_type')=="ADM")
								<form action="{{ route('delete_rating.camera', ['ratingID' => $rating->id]) }}" method="post">
									@csrf
								    <button style="font-size: 12px;" type="submit" class="btn btn-outline-danger btn-sm px-1 py-0 border-0 m-0">Delete</button>
								    <input type="hidden" name="_token" value="{{ Session::token() }}">
								</form>
								@endif
							</div></div>
						</td>
						<td>{!!$rating->description!!}</td>
						<td class="text-center">
							<div class="mb-2 pb-1 border-bottom">
								{{$rating->created_by}}
							</div>
							<div>
								{{date("d M Y", strtotime($rating->created_at))}}
							</div>
						</td>
						<td class="px-0 mx-0 text-center">
							post
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection