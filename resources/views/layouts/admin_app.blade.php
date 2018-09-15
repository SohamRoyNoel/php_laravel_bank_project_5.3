<!DOCTYPE HTML>
<html>
<head>
    <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style1.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/lines.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/d3.v3.js') }}"></script>
    <script src="{{ asset('js/rickshaw.js') }}"></script>
</head>

<body>
<div id="wrapper">
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.html">E-Banking</a>

        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"></i><span class="badge">4</span></a>
                {{--MESSAGE ICON DROP DOWN--}}
            </li>

        </ul>
        <form class="navbar-form navbar-right">
            <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
        </form>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html"><i class="fas fa-tachometer-alt nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-user nav_icon"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="grids.html">Existing</a>
                            </li>
                            <li>
                                <a href="grids.html">New to confirm</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-history nav_icon"></i>Account History</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-share-square nav_icon"></i>Transfer<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="forms.html">To Any Bank</a>
                            </li>
                            <li>
                                <a href="validation.html">From Any Bank</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-dollar-sign nav_icon"></i>  Cash<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic_tables.html">Make Credit</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Make Debit</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-money-check nav_icon"></i>ATM<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic_tables.html">Generate Cards</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Close Cards</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Card History</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-internet-explorer nav_icon"></i>Net Banking<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic_tables.html">Confirm NetBanking</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Authenticate Net Banking</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Close NetBanking</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Other<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="media.html">Confirm KYC</a>
                            </li>
                            <li>
                                <a href="login.html">Penalty issue</a>
                            </li>
                            <li>
                                <a href="login.html">Make Draft</a>
                            </li>
                            <li>
                                <a href="login.html">Soiled Note Exchange</a>
                            </li>
                            <li>
                                <a href="login.html">Close Account</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-monero nav_icon"></i>Super Manager<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic_tables.html">Create new Admin</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">Drop an Admin</a>
                            </li>
                            <li>
                                <a href="basic_tables.html">View all Admins & Activity</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-question-circle nav_icon"></i>FAQs</a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-foursquare nav_icon"></i>Complains</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="col_3">




                {{--body here--}}
                @yield('content')







                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
