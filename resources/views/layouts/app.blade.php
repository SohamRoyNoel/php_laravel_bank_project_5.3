<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Banking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="E-Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    {{--<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">--}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    {{--<link href="css/style.css" type="text/css" rel="stylesheet" media="all">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{--<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons -->--}}
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- //Custom Theme files -->

    <!-- js -->
    {{--<script src="js/jquery-2.2.3.min.js"></script>--}}
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<!-- header -->
<div class="headerw3-agile">
    <div class="header-w3mdl"><!-- header-two -->
        <div class="container">
            <div class="agileits-logo navbar-left">
                {{--<h1><a href="index.html"><img src="images/e.png" alt="logo"/>Banking</a></h1>--}}
                <h1><a href="index.html"><img src="{{ asset('images/e.png')}}" alt="logo"/>Banking</a></h1>
            </div>
            <div class="agileits-hdright nav navbar-nav">
                <div class="header-w3top"><!-- header-top -->
                    <ul class="w3l-nav-top">
                        @if(session()->has('email'))
                            <li><i class="fas fa-user"></i><span> {{ session('name')}} </span></li>
                            <li><a href="mailto:example@mail.com"><i class="fas fa-envelope"></i><span>  {{session('email')}}</span></a></li>
                            <li><a href="{{route('logins.create')}}"> <i class="fas fa-sign-out-alt"></i></a><span> Logout </span></li>
                        @else
                            <li><i class="fa fa-phone"></i><span> +91 8571 85 9685 </span></li>
                            <li><a href="mailto:example@mail.com"><i class="fas fa-envelope"></i><span>  mail@example.com</span></a></li>
                        @endif
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="agile_social_banner">
                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_vimeo"><i class="fab fa-wikipedia-w" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //header -->
<!-- banner -->

    <div class="header-nav"><!-- header-three -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu
                </button>
            </div>
            <!-- top-nav -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html" class="scroll">About</a></li>
                    <li><a href="services.html" class="scroll">Services</a></li>
                    <li><a href="gallery.html" class="scroll">Branches</a></li>
                    @if(!session()->has('email'))
                        <li><a href="{{route('logins.index')}}" class="scroll">Login/Register</a></li>
                        <li><a href="{{url('public/new')}}" class="scroll">Open Account</a></li>
                    @endif
                    <li><a href="contact.html" class="scroll">Contact Us</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </nav>
    </div>
    <!-- banner-text -->
    <!-- banner -->
    @yield('banner')


<!-- about -->
@yield('content')
<br>
<div class="agile-footer w3ls-section">
    <div class="container">
        <div class="col-md-12 list-footer">
            <ul class="footer-nav">
                <center>
                <li><a  href="index.html">Home</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a  href="services.html">Services</a></li>
                <li><a href="gallery.html">Branches</a></li>
                <li><a href="gallery.html">Login/Register</a></li>
                <li><a href="gallery.html">Open Account</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                </center>
            </ul>
            <center><p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et ctetur adipiscing elit. Cras rutrum iaculis</p></center>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<div class="w3_agile-copyright text-center">
    <p>© 2018 E-Banking. All rights reserved | Design by <a href="">Soham Roy</a></p>
</div>
<!--//footer-->

<!-- banner Slider starts Here -->
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>

<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 3
        $("#slider3").responsiveSlides({
            auto:true,
            pager:false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
{{--<script src="js/SmoothScroll.min.js"></script>--}}
<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>

<!-- smooth-scrolling-of-move-up -->
{{--<script type="text/javascript" src="js/move-top.js"></script>--}}
<script src="{{ asset('js/move-top.js') }}"></script>

{{--<script type="text/javascript" src="js/easing.js"></script>--}}
<script src="{{ asset('js/easing.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="js/bootstrap.js"></script>--}}
<script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>