@extends('layouts.admin_dashboard')
@section('content')
<div class="bg-secondary text-center text-white pb-1">
    <h2>Edit Profile</h2>
</div>
<div class="row">
  <div class="p-3 mb-2 col-12 col-md-8 m-auto">
    @if(Session::get('fail'))
    <div class="alert alert-danger">
      {{Session::get('fail')}}
    </div>
    @endif
    <div>
      <h6>Last Edited on : {{ date("d M Y", strtotime($admin_profile->created_at)) }}</h6>
    </div>
    <div class="p-3">
      <form action="{{route('edit_profile.save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="text-center my-5">
          @if($admin_profile->profile_photo=='')
          <img class="img rounded-circle" id="profile_img_priveiw" width="190" height="200" src="{{asset('admin_dashboard/images')}}/no_image.jpg">    
          @else
          <img class="img rounded-circle" id="profile_img_priveiw" width="190" height="200" src="{{asset('admin_dashboard/profile_img')}}/{{$admin_profile->profile_photo}}">
          @endif
          <div class="my-3">
            <input class="border-0" type="file" name="profile_img" id="profile_img">
            <input type="text" name="imgName" value="{{$admin_profile->profile_photo}}" hidden="hidden">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="user_name">Username :</label>
            <input class="form-control" type="text" id="user_name" value="{{$admin_profile->user_name}}" disabled="disabled" />
          </div>
          <div class="form-group col-md-6">
           <label for="admin_type">Admin Type :</label>
            <input class="form-control" type="text" id="admin_type" value="{{$admin_profile->admin_type}}" disabled="disabled" />
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input class="form-control" type="email" id="email" value="{{$admin_profile->email}}" disabled="disabled" />
        </div>
        <div class="form-group">
          <label for="name">Admin Name :</label>
          <input class="form-control" type="text" name="name" id="name" value="{{$admin_profile->name}}" />
        </div>
        <div class="mt-5">
          <button class="btn btn-warning font-weight-bold" type="submit">Save Change</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- To preview Upload image -->
  <script type="text/javascript">
    profile_img.onchange = evt => {
        const [file] = profile_img.files
        if (file) {
            profile_img_priveiw.src = URL.createObjectURL(file);
         }
        }
  </script>
@endsection