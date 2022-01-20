@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Smartwatch - Edit Rating')
@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1" href="{{route('smartwatch.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('smartwatch.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('smartwatch.category')}}">Category</a>
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('smartwatch.rating')}}">Rating</a>
	
</div>
<!-- setting page's main content here -->
<div class="">
	<div class="col-md-12 ml-auto">
		<div class="text-center">
			<h2 class="text-success">Edit Smartwatch Rating</h2>
		</div>
		<div class="mt-5 mb-3 px-2">
			<div class="my-2">
				<a class="btn btn-success btn-sm py-0" href="{{route('smartwatch.rating')}}">Add New Rating</a>
			</div>
			<form method="POST" action="{{route('edit_smartwatch_rating.save')}}">
				@csrf
				<div class="form-group">
					<input type="text" name="created_by" value="{{session('user_name')}}" style="display: none;">
					<input type="text" name="product_id" value="smartwatch" style="display: none;">
					<input type="text" name="id" value="{{$smartwatch_rating_edit->id}}" hidden="hidden">
				    <label for="rating_name">Edit Rating Name :</label>
				    <span class="text-danger">@error ('rating_name'){{$message}} @enderror</span>
				    <input type="text" class="form-control" name="rating_name" id="rating_name" value="{{$smartwatch_rating_edit->rating_name}}">
				    <input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
				<div class="form-group">
					<label for="brand_name">Edit Description :</label>
				    <span class="text-danger">@error ('description'){{$message}} @enderror</span>
				    <textarea class="form-control" id="html_editor" name="description" rows="4">{{$smartwatch_rating_edit->description}}</textarea>
				</div>
				<div class="mt-5">
					<button class="btn btn-warning font-weight-bold py-0" type="submit" name="add_rating" id="add_rating">Save Rating</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection