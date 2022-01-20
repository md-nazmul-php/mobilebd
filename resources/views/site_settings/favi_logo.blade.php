@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Favicon & Logo')
@section('content')
<div class="bg-secondary text-center text-white pb-1">
    <h2>Website's Favicon</h2>
</div>
<div class="pb-4 row">
    <div class="bg-white p-3 mb-2 col-12 col-md-10 m-auto">
      <div class="p-3">
        <form action="{{route('favi_logo.save')}}" method="POST" enctype="multipart/form-data">
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
          @csrf

          <div class="row mt-4">
            <div class="col-md-6">
              <div class="text-center">
                <h6>Favicon</h6>
              </div>
              <div class="form-group">            
                <div class="my-3 text-center">
                    <img class="border" id="favicon_preview" src="{{asset('admin_dashboard/favicon')}}/{{$favicons->favicon}}" alt="Favicon image" width="200px" height="200px">
                </div>
                <div class="text-center">
                  <p class="text-warning">(The file size will be 512 x 512 px)</p>
                </div>
                <div class="text-center">
                  <input class="border-0" type="file" name="favicon_img" id="favicon_img">
                  <input type="text" name="faviImgName" value="{{$favicons->favicon}}" hidden="hidden">
                </div>            
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <h6>Logo</h6>
              </div>
              <div class="form-group">            
                <div class="my-3 text-center">
                    <img class="border" id="logo_preview" src="{{asset('admin_dashboard/logo')}}/{{$favicons->logo}}" alt="Logo image" width="200px" height="200px">
                </div>
                <div class="text-center">
                  <p class="text-warning">(The file size will be 512 x 512 px)</p>
                </div>
                <div class="text-center">
                  <input class="border-0" type="file" name="logo_img" id="logo_img">
                  <input type="text" name="logoImgName" value="{{$favicons->logo}}" hidden="hidden">
                </div>            
              </div>
            </div>
          </div>

          <div class="mt-4 text-center">
            <button class="btn btn-warning font-weight-bold px-3" type="submit">Save Change</button>
          </div>
        </form>
      </div>
      
  </div>
</div>

<!-- To preview Upload image -->
  <script type="text/javascript">
    // image preview for favicon
      favicon_img.onchange = evt => {
          const [file] = favicon_img.files
          if (file) {
              favicon_preview.src = URL.createObjectURL(file);
           }
          }
      // image preview for logo
          logo_img.onchange = evt => {
          const [file] = logo_img.files
          if (file) {
              logo_preview.src = URL.createObjectURL(file);
           }
          }
  </script>

@endsection