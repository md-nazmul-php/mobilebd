@extends('layouts.admin_dashboard')
@section('content')
<div class="bg-secondary text-center text-white pb-1">
    <h2>Chenge Password</h2>
</div>
  <div class="row">
    <div class="p-3 mb-2 col-12 col-md-8 m-auto">
      <h6 class="py-3 pl-3">Hey <span class="text-dark">{{session('name')}}</span> want to change password? <br> You can change</h6>
      <div class="p-3">
        <form action="{{route('password.change')}}" method="POST">
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
          <div class="form-group">
            <label for="old_password">Old Password : </label>
            <input class="form-control" type="password" name="old_password" id="old_password" required="required"/>
          </div>
          <div class="form-group">
            <label for="password">New Password :<small class="text-warning">(Use Uppercase, lowercase, number, Symble as Password)</small></label>
            <span class="text-danger">@error ('new_password'){{$message}} @enderror</span>
            <input class="form-control" type="password" name="new_password" id="password" value="{{old('password')}}" required="required" oninput="matchPass()" />
          </div>
          <div class="form-group">
            <label for="re-type-pass">Re-Type New Password :</label>
            <input class="form-control" type="password" name="re-type-pass" id="re-type-pass" required="required" oninput="matchPass()" />
          </div>
          <small class="text-danger">Without matching password this button does not active</small>
          <div>
            <button class="btn btn-warning font-weight-bold" type="submit" name="reg-button" id="reg-button" disabled="disabled">Seve Change</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
@endsection