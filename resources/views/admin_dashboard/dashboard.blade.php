@extends('layouts.admin_dashboard')

@section('content')
<div>
    
      @if(Session::get('welcome'))
        <div class="alert alert-success">
          <h2>{{Session::get('welcome')}}</h2>
        </div>
      @endif
    
    {{session('id')}}<br>
    {{session('name')}}<br>
    {{session('admin_type')}}<br>
</div>
@endsection
