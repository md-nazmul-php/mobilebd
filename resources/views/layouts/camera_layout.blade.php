@extends('layouts.admin_dashboard')
@section('content')
<div class="mb-2 pb-1 border-bottom">
	<a class="px-3 py-1 bg-secondary text-white" href="{{route('camera.all')}}">Products</a>
	<a class="px-3 py-1" href="{{route('camera.brand')}}">Brand</a>
	<a class="px-3 py-1" href="{{route('camera.category')}}">Category</a>
	<a class="px-3 py-1" href="{{route('camera.rating')}}">Rating</a>
	
</div>
<!-- Camera main content here -->
<div>
	@yield('camera_content')
</div>

@endsection