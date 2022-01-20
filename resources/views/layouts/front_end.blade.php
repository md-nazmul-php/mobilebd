<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('front_end/css/all-fontawesome.min.css')}}"/>

<link rel="stylesheet" href="{{asset('front_end/css/bootstrap.min.css')}}">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<link rel='stylesheet' href="{{asset('front_end/css/my.css')}}"/>
<link rel="stylesheet" href="{{asset('front_end/css/jQuery.UI.css')}}" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('front_end/css/price_range-slider.css')}}">

<style type="text/css">
    
</style>
<script type="text/javascript">
    // for video
    window.onload=function(){
    var videoURL=document.getElementById('video1').value;
    var videoPlayDiv=document.getElementById("played_video");
    videoPlayDiv.src=videoURL;
    document.getElementById('videoDiv1').classList.add('video_active');
}
function abc1(){
    document.getElementById('videoDiv3').classList.remove('video_active');
    document.getElementById('videoDiv2').classList.remove('video_active');

    var videoURL=document.getElementById('video1').value;
    var videoPlayDiv=document.getElementById("played_video");
    var videoAutoPlay=videoURL+"?autoplay=1";
    videoPlayDiv.src=videoAutoPlay;
    document.getElementById('videoDiv1').classList.add('video_active');
}
function abc2(){
    document.getElementById('videoDiv1').classList.remove('video_active');
    document.getElementById('videoDiv3').classList.remove('video_active');

    var videoURL=document.getElementById('video2').value;
    var videoPlayDiv=document.getElementById("played_video");
    var videoAutoPlay=videoURL+"?autoplay=1";
    videoPlayDiv.src=videoAutoPlay;
    document.getElementById('videoDiv2').classList.add('video_active');
}
function abc3(){
    document.getElementById('videoDiv1').classList.remove('video_active');
    document.getElementById('videoDiv2').classList.remove('video_active');

    var videoURL=document.getElementById('video3').value;
    var videoPlayDiv=document.getElementById("played_video");
    var videoAutoPlay=videoURL+"?autoplay=1";
    videoPlayDiv.src=videoAutoPlay;
    document.getElementById('videoDiv3').classList.add('video_active');
}
//end  video

    // let thumbnails=document.getElementsByClassName('thumbnail');
    // let activeImages=document.getElementsByClassName('active');

    // for(var i=0; i<thumbnails.length; i++){
    //     thumbnails[i].addEventListener('mouseover', function(){
    //         console.log(activeImages);
    //         if(activeImages.length > 0){
    //             activeImages[0].classList.remove('active');
    //         }

    //         this.classList.add('active');
    //         document.getElementById('featured').src=this.src;
    //     });
    // }
    // let buttonRight=document.getElementById('slideRight');
    // let buttonLeft=document.getElementById('slideLeft');

    // buttonLeft.addEventListener('click', function(){
    //     document.getElementById('slider').scrollLeft -=100;
    // });
    // buttonRight.addEventListener('click', function(){
    //     document.getElementById('slider').scrollLeft +=100;
    // });
// view product image slider
    function imageView(smallimg){
        var fullimg= document.getElementById('featured');
        fullimg.src=smallimg.src;
    }
// end product image slider

// show and hide comment's reply
    function show_reply_field() {
        var x = document.getElementById("reply_field");
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
    }
// end show and hide comment's reply


</script>
</head>
<body>
    <header>
    <!-- navigation start -->
        <div class="top_bar">
            <div class="my_container">
                <span class="text">Best Mobile Site</span>
        
                <div class="right_side">
                    <a class="link" href="#">login</a>
                    <span class="devider">|</span>
                    <a class="link" href="#">Signup</a>
                </div>
            </div>
        </div>

        <nav class="top_nav">
            <div class="my_container">
                <!-- for mobile view -->
                <button class="toggle">
                    <i class="fa fa-bars"></i>
                </button>
                <div>
                    <a href="#" class="custom-logo-link" rel="home" aria-current="page">
                        <img src="{{asset('front_end/logo/mobile_logo.png')}}" class="custom-logo img-fluid site_logo" alt="Site Logo" />
                    </a>
                </div>
                <form action="#" class="search_box">
                    <input type="search" name="search_key" placeholder="What are you looking for ?">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>

                <div class="icons">
                    <a href="#" class="compare">
                        + <span class="text">Compare</span>
                        <span class="count">0</span>
                    </a>

                    <a href="#" class="notification">
                        <i class="fa fa-bell"></i>
                    </a>
                    <!-- for mobile view -->
                    <button class="search_toggle">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </nav>
        <!-- <img srcset="https://www.phonevaly.com/wp/wp-content/uploads/2021/03/cropped-mobilebd-website-Logo2.png 372w, https://www.phonevaly.com/wp/wp-content/uploads/2021/03/cropped-mobilebd-website-Logo2-300x81.png 300w" sizes="(max-width: 372px) 100vw, 372px" /> -->

        <nav class="bottom_nav">
            <div class="my_container">
                <button class="navigation_close">
                    <i class="fa fa-times"></i>
                </button>
                <a href="#">Home</a>
                <a href="#">Mobile</a>

                <!-- <div class="dropdown_container">
                    <a href="javascript:void(0)">Mobile Collections</a>
                    <div class="dropdown">
                        <a href="#">Dropdown One</a>
                        <a href="#">Dropdown Two</a>
                        <a href="#">Dropdown Three</a>
                    </div>
                </div> -->

                <a href="#">Camera</a>
                <a href="#">Laptop</a>
                <a href="#">Smartwatch</a>
                <a href="#">Tablet</a>
            </div>
        </nav>
    <!-- navigation end -->


        <!-- for mobile view -->
        <div class="search_box_container_for_mobile">
            <form action="#" class="search_box">
                <input type="search" name="search_key" placeholder="What are you looking for ?">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>

    </header>
    
<!-- start Main Body -->
    <div class="my_container">
        @yield('content')
    </div>

 <!-- End Main Body -->

 <!-- Start Footer -->
    <footer class="footer_container">
        <div class="top">
            <div class="my_container">
                <div class="text">
                    <i class="fa fa-envelope"></i>
                    Subscribe for top stories & new launches
                </div>

                <form action="#" class="subscribe">
                    <input type="email" placeholder="Your Email Address..." name="subsciption_email">
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <div class="middle">
            <div class="my_container">
                <div>
                    <h5>Recently Launched</h5>
                    <a href="#">Samsung Galaxy A20e</a>
                    <a href="#">Huawei P Smart Z</a>
                    <a href="#">Realme X</a>
                </div>
                <div>
                    <h5>Section Heading</h5>
                    <a href="#">Motorola One Vision</a>
                    <a href="#">Huawei P20 Lite</a>
                    <a href="#">Vivo S1 Pro</a>
                    <a href="#">OnePlus 7 Pro</a>
                </div>
                <div>
                    <h5>Important Links</h5>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Advertise with Us</a>
                </div>
                <div class="logo">
                    <img src="https://sourno.fun/assets/front/images/logo.png" alt="">
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="container">
                <div class="copyright">
                    @ 2021-2022 all right reserved
                </div>

                <div class="social_icon">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
        </div>
    </footer>
 <!-- End Footer -->
    <!-- <script type="text/javascript" src="{{asset('front_end/js/jquery-3.2.1.slim.min.js')}}"></script> -->

    <script src="{{asset('front_end/js/bootstrap.popper.min.js')}}"></script>

    <script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('front_end/js/my.js')}}"></script>
    <script src="{{asset('front_end/js/jQuery.UI.js')}}" type="text/javascript"></script>
    <script src="{{asset('front_end/js/price_range_script.js')}}" type="text/javascript"></script>
</body>
</body>
</html>