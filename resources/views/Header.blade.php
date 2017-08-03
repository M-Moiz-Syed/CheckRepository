@section("header")
    <div id="page-wrap">

        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- END / LOGO -->
                    <!-- NAVIGATION -->
                    <div id="page-wrap">
                    <nav class="navigation awe-navigation" data-responsive="1200">
                        <ul class="menu-list">
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="{{URL::route('TourHome')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{URL::route('Destination')}}" >Destinations</a>
                                <ul class="sub-menu">
                                    <li><a href="{{URL::route('AttractionsList')}}">Attractions in Karachi</a></li>
                                    <li><a href="{{URL::route('AttractionsList')}}">Attractions in Lahore</a></li>
                                    <li><a href="{{URL::route('AttractionsList')}}">Attractions in Islamabad</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Trips</a>
                                <ul class="sub-menu">
                                    <li><a href="{{URL::route('Holiday')}}">Holidays</a></li>
                                    <li><a href="{{URL::route('Honeymoon')}}">Honeymoon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{URL::route('Hotels')}}">Hotel</a>
                                {{--<ul class="sub-menu">--}}
                                    {{--<li><a href="hotel.html">Hotel</a></li>--}}
                                    {{--<li><a href="hotel-detail.html">Hotel Detail</a></li>--}}
                                    {{--<li><a href="hotel-dark.html">Hotel (Dark)</a></li>--}}
                                    {{--<li><a href="hotel-detail-dark.html">Hotel Detail (Dark)</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            <li class="menu-item-has-children">
                                <a href="flight.html">Flight</a>
                                <ul class="sub-menu">
                                    <li><a href="flight.html">Flight</a></li>
                                    <li><a href="flight-detail.html">Flight Detail</a></li>
                                    <li><a href="flight-dark.html">Flight (Dark)</a></li>
                                    <li><a href="flight-detail-dark.html">Flight Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="train.html">Train</a>
                                <ul class="sub-menu">
                                    <li><a href="train.html">Train</a></li>
                                    <li><a href="train-detail.html">Train Detail</a></li>
                                    <li><a href="train-dark.html">Train (Dark)</a></li>
                                    <li><a href="train-detail-dark.html">Train Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="attraction.html">Attraction</a>
                                <ul class="sub-menu">
                                    <li><a href="attraction.html">Attraction</a></li>
                                    <li><a href="attraction-detail.html">Attraction Detail</a></li>
                                    <li><a href="attraction-dark.html">Attraction (Dark)</a></li>
                                    <li><a href="attraction-detail-dark.html">Attraction Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                            <li><a href="single-post-dark.html">Single Post (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="login.html">Log In</a>
                                        <ul class="sub-menu">
                                            <li><a href="login.html">Log In</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="login.html">Log In (Dark)</a></li>
                                            <li><a href="register.html">Register (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="checkout-yourcart.html">Checkout</a>
                                        <ul class="sub-menu">
                                            <li><a href="checkout-yourcart.html">Your cart</a></li>
                                            <li><a href="checkout-customer.html">Customer</a></li>
                                            <li><a href="checkout-complete.html">Complete</a></li>
                                            <li><a href="checkout-yourcart-dark.html">Your cart (Dark)</a></li>
                                            <li><a href="checkout-customer-dark.html">Customer (Dark)</a></li>
                                            <li><a href="checkout-complete-dark.html">Complete (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shortcode.html">Shortcode</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html">Contact</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Light</a></li>
                                    <li><a href="contact-dark.html">Dark</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                        </div>
                    <!-- END / NAVIGATION -->
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>

                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->
                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->
    </div>

@show