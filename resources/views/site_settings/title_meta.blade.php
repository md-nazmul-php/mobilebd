@extends('layouts.admin_dashboard')
<!-- this section for setting title according to pages -->
@section('title','Title & Meta')
@section('content')
<div class="bg-secondary text-center text-white pb-1">
    <h2>Site Title, Meta Description and Key-Words</h2>
</div>
  <div class="pb-4 row">
    <div class="bg-white p-3 mb-2 col-12 col-md-8 m-auto">
      <div class="p-3">
        <form action="{{route('title_meta.save')}}" method="POST">
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
          <div class="form-group mb-4">
            <label for="meta_title">Site Title :</label>
            <small class="text-warning">(Min 10 and Max 60 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('title'){{$message}} @enderror</span>            
            <input class="form-control" type="text" name="title" id="meta_title" required="required" value="{{$titles->title}}" maxlength="" onkeyup="title_char_check();"/>
            <p class="text-success" id="title_warning">You write <span id="title_char">0</span> characters out of 60</p>
          </div>
          <div class="form-group">
            <label for="meta">Meta Description :</label>
            <small class="text-warning">(Min 60 and Max 160 Characters)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('meta'){{$message}} @enderror</span>            
            <textarea onkeyup="meta_char_check();" class="form-control" id="meta" required="required" name="meta" rows="4" >{{$titles->meta}}</textarea>
            <p class="text-success" id="meta_warning">You write <span id="meta_char">0</span> characters out of 160</p>
          </div>
          <div class="form-group my-4">
            <label for="key_words">Key-Words :</label>
            <small class="text-warning">(Such as = keywor one, keyword two, keyword 3)</small>&nbsp;&nbsp;&nbsp;<span class="text-danger">@error ('key_words'){{$message}} @enderror</span>            
            <textarea class="form-control" id="key_words" required="required" name="key_words" rows="4" >{{$titles->key_word}}</textarea>
            <p class="text-success" id="keywords_warning">You use <span id="use_keywords">0</span> KeyWords</p>
          </div>
          <div>
            <button class="btn btn-warning font-weight-bold px-3" type="submit">Save</button>
          </div>
        </form>
      </div>
      
    </div>
</div>


<script type="text/javascript">
	
</script>

@endsection