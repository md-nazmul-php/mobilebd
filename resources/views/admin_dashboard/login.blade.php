<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  
    <link href="{{asset('admin_dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_dashboard/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{asset('admin_dashboard/css/login_style.css')}}" rel="stylesheet">
    <style type="text/css">
      body{
        background-image: url('{{asset('admin_dashboard/images/login_background.jpg')}}');
      }
    </style>
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('admin.check')}}">
          @if(Session::get('fail'))
            <div class="alert alert-warning">
              {{Session::get('fail')}}
            </div>
          @endif

          @csrf
            <span class="text-warning">@error('email'){{$message}} @enderror</span>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
          </div>

            <span class="text-warning">@error('password'){{$message}} @enderror</span>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="password" value="{{old('password')}}">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- jQuery -->
    <script src="{{asset('admin_dashboard/js/jquery.min.js')}}"></script>
    <!-- Bootstrap 1 -->
    <script src="{{asset('admin_dashboard/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('admin_dashboard/js/bootstrap-progressbar.min.js')}}"></script>
</body>
</html>