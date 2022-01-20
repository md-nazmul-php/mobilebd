@extends('layouts.admin_dashboard')

@section('content')
<div>
	<div class="text-center bg-secondary pb-1">
		<h2 class=" text-white">Total Admins : {{$admins->count()}}</h2>
	</div>
	<div class="mt-3">
		<a class="btn btn-success py-0" href="{{route('add_new_admin.page')}}">Add new admin</a>
	</div>
	
	<table id="dataTable" class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>User Type</th>
				<th>Name</th>
				<th>User Name</th>
				<th>Added Date</th>
				<th>Picture</th>
			</tr>
		</thead>
		<tbody>
			@foreach($admins as $admin)
			<tr>
				<td>{{ $admin->id }}</td>
				<td>{{ $admin->admin_type }}</td>
				<td>
					{{ $admin->name }}
					<div class="pt-2">
						<a class="text-primary" href="">View</a> &nbsp;&nbsp;
						@if( session('admin_type')=="SADM")
						<a class="text-danger" href="">Delete</a>
						@endif
					</div>
				</td>
				<td>{{ $admin->user_name }}</td>
				<td>{{ date("d M Y", strtotime($admin->created_at)) }}</td>
				<td>
					@if($admin->profile_photo=='')
					<img width="50" height="45" src="{{asset('admin_dashboard/images')}}/no_image.jpg">		
					@else
					<img width="50" height="45" src="{{asset('admin_dashboard/profile_img')}}/{{$admin->profile_photo}}">
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    
</div>
@endsection
