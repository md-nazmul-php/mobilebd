<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin_dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('admin_dashboard/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{asset('admin_dashboard/css/custom.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/css/dataTables.bootstrap4.min.css')}}">

<!-- <script src="{{asset('admin_dashboard/js/ckeditor.js')}}"></script> -->
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<script src="{{asset('admin_dashboard/js/jquery.min.js')}}"></script>


<script type="text/javascript" src="{{asset('admin_dashboard/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_dashboard/js/dataTables.bootstrap4.min.js')}}"></script>


<style type="text/css">
/*for data option to active and hover*/
.active_option{
  color:red;
  border: 1px solid #D1D2D6;
  border-radius: 5px;
}
.data_option span:hover{
  cursor:pointer;
  color:red;
}

/*for Specifiction option under Data to active and hover*/
.active_spe_option{
  color:red;
}
.data_spe_option div:hover{
  cursor:pointer;
  color:red;
}

select {
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
  background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
  background-repeat: no-repeat;
  background-position-x: 100%;
  border: 1px solid #dfdfdf;
  border-radius: 2px;
  margin-right: 2rem;
  padding: 1rem;
  padding-right: 2rem;
}

/*For product view page*/
.font-10{
    font-size: 10px;
}
.font-12{
    font-size: 12px;
}
.font-14{
    font-size: 14px;
}
.font-16{
    font-size: 16px;
}
.font-18{
    font-size: 18px;
}
.thumbnail{
    object-fit: cover;
    max-width: 100px;
    max-height: 70px;
    cursor: pointer;
    opacity: 0.5;
    margin: 5px;
    border: 1px solid black;
}

.thumbnail:hover{
    opacity: 1;
}

.active{
    opacity: 1;
}

#slider-wrapper{
    max-width: 100%;
    display: flex;
    min-height: 70px;
    align-items: center;
}

#slider{
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    overflow-x: hidden;
}

.arrow{
    cursor: pointer;
    opacity: .2;
    transition: .3s;
}

.arrow:hover{
    opacity: 1;
}

.bg_spec{
    background-color: #EEF7F6;
}
.video_link{
    cursor: pointer;
    opacity: .7;
    transition: .3s;
}
.video_link:hover{
    opacity: 1;
    background-color: #EEF7F6;
}
.video_active{
    opacity: 1;
    background-color: #D7F8F7;
}
.video_active:hover{
    opacity: 1;
    background-color: #D7F8F7;
}

/*end product view page*/

</style>

    
    <script type="text/javascript">
     //for datatable
      $(document).ready( function () {
        $('#dataTable').DataTable();
      });

  // text editor
  window.onload=function(){
    CKEDITOR.replace( 'html_editor' );

//========= check meta titile and description characters
   var title_text = document.getElementById("meta_title").value;
   var meta_text = document.getElementById("meta").value;
   var key_words = document.getElementById("key_words").value;
   var title_num_char = title_text.length;
   var meta_num_char = meta_text.length;
   var total_keywords = key_words.split(',').length;
   document.getElementById("title_char").innerHTML = title_num_char;
   document.getElementById("meta_char").innerHTML = meta_num_char;
   document.getElementById("use_keywords").innerHTML = total_keywords;
  }

setTimeout(function(){
  if ($('#smsDiv').length > 0) {
    $('#smsDiv').slideUp("slow", function() { $('#smsDiv').remove();});
    //$('#smsDiv').remove();
  }
}, 5000)
// setTimeout(function () {
//     $('.myDiv').fadeOut('slow', function(){
//         $(this).remove();
//     });
// }, 1000);
//to check meta_title characters
  function title_char_check() {
    var title_text = document.getElementById("meta_title").value;
    var element = document.getElementById("title_warning");
    var title_num_char = title_text.length;
    if(title_num_char>'60'){
      element.classList.remove("text-success");
       element.classList.add("text-danger");
       }else{
       element.classList.remove("text-danger");
       element.classList.add("text-success");
       }    
    document.getElementById("title_char").innerHTML = title_num_char;
  }


  //to check meta description characters
  function meta_char_check() {
    var meta_text = document.getElementById("meta").value;
    var element = document.getElementById("meta_warning");
    var meta_num_char = meta_text.length;
    if(meta_num_char>'160'){
      element.classList.remove("text-success");
       element.classList.add("text-danger");
       }else{
       element.classList.remove("text-danger");
       element.classList.add("text-success");
       }    
    document.getElementById("meta_char").innerHTML = meta_num_char;
  }
//to check how many kewords are written
  function keywords_check(){
    var key_words = document.getElementById("key_words").value;
    var total_keywords ='0';
    if(!key_words ==''){
     total_keywords = key_words.split(',').length;
    }
    document.getElementById("use_keywords").innerHTML = total_keywords;
  }

//=== end end end ====== check meta titile and description characters

//for Adding new admin this js code match the password then active the submit button 
      function matchPass(){
      var pass1=$('#password').val();
      var pass2=$('#re-type-pass').val();
      if(pass1==""){
          $('#reg-button').prop('disabled', true);
      }
      else if(pass1==pass2){
          $('#reg-button').prop('disabled', false);
      }
      else{
          $('#reg-button').prop('disabled', true);
      }
    }

    // view product image slider
    function imageView(smallimg){
        var fullimg= document.getElementById('featured');
        fullimg.src=smallimg.src;
    }
// end product image slider
    </script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><span>Review Site</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                @if(session('profile_photo')=='')
                      <img class="img-circle profile_img" src="{{asset('admin_dashboard/images')}}/no_image.jpg">    
                    @else
                      <img class="img-circle profile_img" src="{{asset('admin_dashboard/profile_img')}}/{{session('profile_photo')}}">
                    @endif
              </div>
              <div class="profile_info">
                <h2 class="mt-2">{{session('name')}}</h2>
              </div>
            </div>


            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                    <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</span></a>
                  </li>

                   <!-- Mobile products -->
                  <li><a><i class="fa fa-mobile"></i> Mobile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('mobile.add')}}">Add Product</a></li>
                      <li><a href="{{route('mobile.all')}}">Products</a>
                        <!-- This is hidden field, used only for showing active the 'Products' page -->
                        <ul hidden="hidden">
                          <li><a href="{{route('mobile.brand')}}"></a></li>
                          <li><a href="{{route('mobile.category')}}"></a></li>
                          <li><a href="{{route('mobile.rating')}}"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  
                   <!-- Camera products -->
                  <li><a><i class="fa fa-camera"></i> Camera <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('camera.add')}}">Add Product</a></li>
                      <li><a href="{{route('camera.all')}}">Products</a>
                        <!-- This is hidden field, used only for showing active the 'Products' page -->
                        <ul hidden="hidden">
                          <li><a href="{{route('camera.brand')}}"></a></li>
                          <li><a href="{{route('camera.category')}}"></a></li>
                          <li><a href="{{route('camera.rating')}}"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Laptop products -->
                  <li><a><i class="fa fa-laptop"></i> Laptop <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('laptop.add')}}">Add Product</a></li>
                      <li><a href="{{route('laptop.all')}}">Products</a>
                      <!-- This is hidden field, used only for showing active the 'Products' page -->
                        <ul hidden="hidden">
                          <li><a href="{{route('laptop.brand')}}"></a></li>
                          <li><a href="{{route('laptop.category')}}"></a></li>
                          <li><a href="{{route('laptop.rating')}}"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Smartwatch products -->
                  <li><a><i class="fa fa-clock-o"></i>Smartwatch <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('smartwatch.add')}}">Add Products</a></li>
                      <li><a href="{{route('smartwatch.all')}}">Products</a>
                        <!-- This is hidden field, used only for showing active the 'Products' page -->
                        <ul hidden="hidden">
                          <li><a href="{{route('smartwatch.brand')}}"></a></li>
                          <li><a href="{{route('smartwatch.category')}}"></a></li>
                          <li><a href="{{route('smartwatch.rating')}}"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Tablet products -->
                  <li><a><i class="fa fa-tablet"></i> Tablet <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('tablet.add')}}">Add Products</a></li>
                      <li><a href="{{route('tablet.all')}}">Products</a>
                        <!-- This is hidden field, used only for showing active the 'Products' page -->
                        <ul hidden="hidden">
                          <li><a href="{{route('tablet.brand')}}"></a></li>
                          <li><a href="{{route('tablet.category')}}"></a></li>
                          <li><a href="{{route('tablet.rating')}}"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  
                  <!-- All Admin's Settings -->
                  <li><a><i class="fa fa-paw"></i> Admins <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('add_new_admin.page')}}">Add New Admin</a></li>
                      <li><a href="{{route('all_admins.view')}}">All Admins</a></li>
                      <li><a href="{{route('admin.profile')}}">My Profile</a></li>
                      <li><a href="{{route('edit_profile.show')}}">Edit Profile</a></li>
                      <li><a href="{{route('password.show')}}">Change Password</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cog"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('title_meta.show')}}">Title, Meta & Keywords</a></li>
                      <li><a href="{{route('favi_logo.show')}}">Favicon & Logo</a></li>
                      <li><a href="#">Others</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    @if(session('profile_photo')=='')
                      <img class="img rounded-circle" width="20" height="25" src="{{asset('admin_dashboard/images')}}/no_image.jpg">    
                    @else
                      <img class="img rounded-circle" width="20" height="25" src="{{asset('admin_dashboard/profile_img')}}/{{session('profile_photo')}}">
                    @endif
                    {{session('user_name')}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{route('admin.profile')}}"> Profile</a>
                      <a class="dropdown-item"  href="{{route('password.show')}}">Change Password</a>
                  <a class="dropdown-item" href="{{ route('admin_logout') }}"> Log Out</a>
                    <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form> -->
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!--  content area -->
        <div class="right_col text-dark">
            <div class="mx-2">
          
            @yield('content')
                
            </div>
         
        </div>
        <!-- end content area -->

        <!-- footer content -->
        <footer class="bg-light">
          <div class="pull-right">
            Product Review Admin Panel <a href=""></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  

    <!-- jQuery -->
   <!--  <script src="{{asset('admin_dashboard/js/jquery.min.js')}}"></script> -->
    <!-- Bootstrap 1 -->
    <script src="{{asset('admin_dashboard/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('admin_dashboard/js/bootstrap-progressbar.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin_dashboard/js/custom.min.js')}}"></script>
    
  </body>
</html>