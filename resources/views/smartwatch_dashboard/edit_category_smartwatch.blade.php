@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Smartwatch - Edit Category')
@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1" href="{{route('smartwatch.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('smartwatch.brand')}}">Brand</a>
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('smartwatch.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('smartwatch.rating')}}">Rating</a>
	
</div>
<!-- setting page's main content here -->
<div class="">
	<div class="col-md-12 ml-auto">
		<div class="text-center">
			<h2 class="text-success">Edit Smartwatch Category</h2>
		</div>
		<div class="mt-4 mb-3 px-2">
			<div class="my-2">
				<a class="btn btn-success btn-sm py-0" href="{{route('smartwatch.category')}}">Add New Category</a>
			</div>
			<form method="POST" action="{{route('edit_smartwatch_category.save')}}">
				@csrf
				<div class="form-group">
					<input type="text" name="created_by" value="{{session('user_name')}}" style="display: none;">
					<input type="text" name="product_id" value="smartwatch" style="display: none;">
					<input type="text" name="id" value="{{$smartwatch_cat_edit->id}}" hidden="hidden">
				    <label for="category_name">Edit Category Name :</label>
				    <span class="text-danger">@error ('category_name'){{$message}} @enderror</span>
				    <input type="text" class="form-control" name="category_name" id="category_name" value="{{$smartwatch_cat_edit->category_name}}">
				</div>
				<div class="form-group">
					<label for="brand_name">Edit Description :</label>
				    <span class="text-danger">@error ('description'){{$message}} @enderror</span>
				    <textarea class="form-control" id="html_editor" name="description" rows="4">{{$smartwatch_cat_edit->description}}</textarea>
				</div>
				<div class="mt-5">
					<button class="btn btn-warning font-weight-bold py-0" type="submit" name="add_category" id="add_category">Save Category</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection