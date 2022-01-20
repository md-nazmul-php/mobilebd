@extends('layouts.admin_dashboard')
@section('content')
<div class="text-center bg-secondary pb-1">
    <h2 class=" text-white">Add New Admin</h2>
  </div>
  <div class="py-5 row">
    <div class="p-3 mb-2 col-12 col-md-8 m-auto">
      <div class="p-3">
        <form action="{{route('admin.save')}}" method="POST">
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
          <div class="row">
            <div class="form-group col-md-6">
              <label for="user_name">Username :</label>
              <span class="text-danger">@error ('user_name'){{$message}} @enderror</span>
              <input class="form-control" type="text" name="user_name" id="user_name" required="required" value="{{old('user_name')}}" />
            </div>
            <div class="form-group col-md-6">
              <label for="admin_type">Admin Type :</label>
              <span class="text-danger">@error ('admin_type'){{$message}} @enderror</span>
              <select class="form-control px-4" name="admin_type" id="admin_type" required="required">
                <option value="{{old('admin_type')}}">Select</option>
                <option value="SADM">Super Admin</option>
                <option value="ADM">Admin</option>
                <option value="EDITOR">Editor</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Admin Name :</label>
            <span class="text-danger">@error ('name'){{$message}} @enderror</span>
            <input class="form-control" type="text" name="name" id="name" required="required" value="{{old('name')}}" />
          </div>
          <div class="form-group">
            <label for="email">Email :<small class="text-warning">(Enter Valid & Active Email)</small></label>
            <span class="text-danger">@error ('email'){{$message}} @enderror</span>
            <input class="form-control" type="email" name="email" id="email" required="required" value="{{old('email')}}" />
          </div>
          <div class="form-group">
            <label for="password">Password :<small class="text-warning">(Use Uppercase, lowercase, number, Symble as Password)</small></label>
            <span class="text-danger">@error ('password'){{$message}} @enderror</span>
            <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}" required="required" oninput="matchPass()" />
          </div>
          <div class="form-group">
            <label for="re-type-pass">Re-Type Password</label>
            <input class="form-control" type="password" name="re-type-pass" id="re-type-pass" required="required" oninput="matchPass()" />
          </div>
          <small class="text-danger">Without matching password this button does not active</small>
          <div>
            <button class="btn btn-warning font-weight-bold" type="submit" name="reg-button" id="reg-button" disabled="disabled">Add this Admin</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
@endsection