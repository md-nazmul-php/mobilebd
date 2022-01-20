@extends('layouts.admin_dashboard')

@section('content')
<div class="p-5 py-4">
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
	 <div>
      <h6>Last Edited on : {{ date("d M Y", strtotime($admin_profile->created_at)) }}</h6>
    </div>
		<div class="text-center">
			@if($admin_profile->profile_photo=='')
				<img class="img rounded-circle" width="190" height="200" src="{{asset('admin_dashboard/images')}}/no_image.jpg">		
				@else
				<img class="img rounded-circle" width="190" height="200" src="{{asset('admin_dashboard/profile_img')}}/{{$admin_profile->profile_photo}}">
				@endif
			<div class="mt-4">
				<h4 class="font-weight-bold">{{$admin_profile->name}}</h4>
			</div>
		</div>
		<div class="p-5 py-4">
			<table class="table table-striped table-borderless font-weight-bold text-left">
				<tr>
					<td>User ID </td>
					<td>{{$admin_profile->id}}</td>
				</tr>
				<tr>
					<td>Admin Type </td>
					<td>{{$admin_profile->admin_type}}</td>
				</tr>
				<tr>
					<td>Username </td>
					<td>{{$admin_profile->user_name}}</td>
				</tr>
				<tr>
					<td>Email </td>
					<td>{{$admin_profile->email}}</td>
				</tr>
				<tr>
					<td>Added Date </td>
					<td>{{ date("d M Y", strtotime($admin_profile->created_at)) }}</td>
				</tr>
			</table>
		</div>
	<div class="text-right pr-4">
		<a class="btn btn-success" href="{{route('edit_profile.show')}}">Edit Profile Details</a>
	</div>
</div>
@endsection
