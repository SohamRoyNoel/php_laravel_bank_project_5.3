@extends('layouts.app')

@section('content')

    <div class="home-about w3ls-section">
        <div class="container">
            <!-- about top-->
            <div class="w3ls-about agile-section">
                <div class="w3-agileits-about-grids">
                    <div class="col-md-6 col-sm-6 col-xs-6 agileits-title">
                        <h3>what makes <img src="{{ asset('images/logo.png')}}" alt="logo"/>Unique?</h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6  agile-about-bottom-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget faucibus est.Suspendisse auctor urna blandit ultricies maximus.
                            Sed accumsan auctor lacus ac mattis. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend, nisl turpis suscipit augue, eget tincidunt velit nunc ut lectus.Morbi rutrum ut risus sed hendrerit. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend.</p>
                        <p class="w3ls-about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget faucibus est.Suspendisse auctor urna blandit ultricies maximus.
                            Sed accumsan auctor lacus ac mattis. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend, nisl turpis suscipit augue, eget tincidunt velit nunc ut lectus.Morbi rutrum ut risus sed hendrerit.</p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //about top-->



            @if(session()->has('email'))
                <div class="w3ls-section services">
                    <div class="container">
                        <div class="services-left">
                            <h4 class="title">Banking Features</h4>
                            <h5>any time,anywhere.</h5>
                            <p class="data">You can use the listed features to have a more grip on your account, credit card, net banking also.</p>

                        </div>
                        <div class="services-right">
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-plus-square" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Transaction</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-credit-card" aria-hidden="true"></span>

                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Credit & Debit Card</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-globe-africa" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Online Banking</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="far fa-share-square" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>transfer money</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-file-invoice-dollar" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>pay bills</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-wallet" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Loans</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Shop Online</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="services-grid">
                                <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                                    <span class="fas fa-sync" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                                    <a href=""><h5>Currency Exchange</h5></a>
                                    <p>Itaque earum rerum hic a sapiente delectus</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            @endif






            <!-- about bottom-->
            <div class="about-bottom">
                <div class="col-md-6 about-w3right">

                </div>
                <div class="col-md-6 about-w3left">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h5 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body panel_text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h5 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body panel_text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h5 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Sed tincidunt lorem sed
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body panel_text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h5 class="panel-title asd">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint cliche
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour" aria-expanded="true">
                                <div class="panel-body panel_text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about-bottom -->
        <!-- about-bottom-grid -->
        <div class="wthree-about-bot-grid-sec">
            <div class="agileits-about-pos">
                <h2>secure banking</h2>
            </div>
            <div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg1 abg1">
                <h4>Safe,secure and convenient banking</h4>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
            </div>
            <div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg2 abg4">
                <h4>it’s your money. manage it your way.</h4>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
            </div>
            <div class="col-md-6  col-sm-6 w3ls-abg w3ls-abg1 abg2">
                <h4>Pay people. Pay bills.Transfer money.</h4>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
            </div>
            <div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg2 abg3">
                <h4>Mobile Privacy and Security</h4>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
            </div>

            <div class="clearfix"> </div>
        </div>
        <!-- //about-bottom-grid-->
    </div>
    <!-- //about -->
    <!--services-->
    <div class="w3ls-section services">
        <div class="container">
            <div class="services-left">
                <h4 class="title">online banking</h4>
                <h5>any time,anywhere.</h5>
                <p class="data">Enim nim pariatur cliche reprehen chardson ad sqderit ad sveprehed sectetur adipiscing elit iatur clic.</p>
                <div class="more">
                    <a href="#" data-toggle="modal" data-target="#myModal"> Read More</a>
                </div>
            </div>
            <div class="services-right">
                <div class="services-grid">
                    <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                        <h5>safe & secure</h5>
                        <p>Itaque earum rerum hic a sapiente delectus</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid">
                    <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                        <span class="fa fa-clock-o" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                        <h5>save time</h5>
                        <p>Itaque earum rerum hic a sapiente delectus</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid">
                    <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                        <span class="far fa-share-square" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                        <h5>transfer money</h5>
                        <p>Itaque earum rerum hic a sapiente delectus</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid">
                    <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                        <span class="fas fa-credit-card" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                        <h5>pay bills</h5>
                        <p>Itaque earum rerum hic a sapiente delectus</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="services-grid">
                    <div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
                        <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
                        <h5>Shop Online</h5>
                        <p>Itaque earum rerum hic a sapiente delectus</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//services-->

    @stop

@section('banner')
<div class="banner">
    <div class="container">
        <div class="banner-text agileits-w3layouts">
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Welcome To E-Banking</h6>
                            <h3>Safe,secure and convenient banking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in consectetur adipiscing elit, Nullam in neque  neque malesua.</p>
                            <div class="agileits-banner-bot">
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>01</h5>
                                    <h4>convenient</h4>
                                    <p>Consectetur adipiscing elit, Nullam in neque malesuadaLorem</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>02</h5>
                                    <h4>secure</h4>

                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>03</h5>
                                    <h4>reliable</h4>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Welcome To E-Banking</h6>
                            <h3>Safe,secure and convenient banking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in consectetur adipiscing elit, Nullam in neque  neque malesua.</p>
                            <div class="agileits-banner-bot">
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>01</h5>
                                    <h4>convenient</h4>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>02</h5>
                                    <h4>secure</h4>
                                    <p>Consectetur adipiscing elit, Nullam in neque malesuadaLorem </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>03</h5>
                                    <h4>reliable</h4>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Welcome To E-Banking</h6>
                            <h3>Safe,secure and convenient banking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in consectetur adipiscing elit, Nullam in neque  neque malesua.</p>
                            <div class="agileits-banner-bot">
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>01</h5>
                                    <h4>convenient</h4>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>02</h5>
                                    <h4>secure</h4>

                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
                                    <h5>03</h5>
                                    <h4>reliable</h4>
                                    <p>Consectetur adipiscing elit, Nullam in neque malesuadaLorem</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    @stop