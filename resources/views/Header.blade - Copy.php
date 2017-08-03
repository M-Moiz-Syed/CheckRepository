@section("header")
    <header>
        <div class="wrap clearfix">
            <!--logo-->
            <h1 class="logo">
                <a href="http://www.tourplanner.pk/" title="TourPlanner.PK">
                    <img src="{{ URL::asset('img/logo.png') }}" alt="Tour Planner">
                </a>
            </h1>
            <!--//logo-->
            <!--ribbon-->
            <div class="ribbon">
                <nav>
                    <ul class="profile-nav">
                        <li class="active last" style="display: block;">
                            <a href="{{ URL::route('Login') }}">
                                Login
                            </a>
                        </li>
                    </ul>
                    <ul class="lang-nav">
                        <li class="active last" style="display: block;"><a href="{{ URL::route('Register') }}" title="Register">Register</a> </li>
                    </ul>
                    <ul class="currency-nav">
                        <li class="active last" style="display: block;"><a href="{{ URL::route('Contact') }}" title="Contact us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <!--//ribbon-->
            <!--search-->
            <div class="search">
                <script type="text/javascript">

                    $(document).ready(function () {
                        $("#site_search").autocomplete('/City/CityName', { minChars: 3 });
                    });

                </script>

                <form action="http://www.tourplanner.pk/Home/MiniSearch" method="post">
                    <input type="search" placeholder="Search entire site here" name="site_search" id="site_search" class="acInput">
                    <input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search">
                </form>
            </div>
            <!--//search-->
            <!--contact-->
            <div class="contact">
                <span>24/7 Support number</span>
                <span class="number">+92 - 331 - 8483 - 626</span>
            </div>
            <!--//contact-->
        </div>

        <!--main navigation-->
        <nav class="main-nav" role="navigation" id="nav">
            <ul class="wrap">
                <li>
                    <a href="{{ URL::route('TourHome') }}" title="Home">HOME</a>
                </li>
                <li>
                    <a href="{{ URL::route('Hotels') }}" title="Pakistani Hotels">PAKISTANI  HOTELS</a>
                    <ul>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/8/hotels-in-abbottabad" title="Hotels in Abbottabad">ABBOTTABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/17/hotels-in-gilgit-and-hunza" title="Hotels in Gilgit &amp; Hunza">GILGIT &amp; HUNZA</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/3/hotels-in-islamabad" title="Hotels in Islamabad">ISLAMABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/2/hotels-in-karachi" title="Hotels in Karachi">KARACHI</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/1/hotels-in-lahore" title="Hotels in Lahore">LAHORE</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/9/hotels-in-mirpur" title="Hotels in Mirpur">MIRPUR</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/13/hotels-in-multan" title="Hotels in Multan">MULTAN</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/5/hotels-in-murree" title="Hotels in Murree">MURREE</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/6/hotels-in-muzaffarabad" title="Hotels in Muzaffarabad">MUZAFFARABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/11/hotels-in-naran-kaghan-shogran" title="Hotels in Naran Kaghan Shogran">NARAN KAGHAN SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/10/hotels-in-nathiagali" title="Hotels in Nathiagali">NATHIAGALI</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/14/hotels-in-neelum-valley-ajk" title="Hotels in Neelum Valley Ajk">NEELUM VALLEY AJK</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/20/hotels-in-northern-areas" title="Hotels in Northern Areas ">NORTHERN AREAS </a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/7/hotels-in-peshawar" title="Hotels in Peshawar">PESHAWAR</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/15/hotels-in-rawalakot" title="Hotels in Rawalakot">RAWALAKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/4/hotels-in-rawalpindi" title="Hotels in Rawalpindi">RAWALPINDI</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/18/hotels-in-sakardu" title="Hotels in Sakardu">SAKARDU</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/19/hotels-in-shogran" title="Hotels in Shogran">SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/12/hotels-in-sialkot" title="Hotels in Sialkot">SIALKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/Hotels/Index/16/hotels-in-swat" title="Hotels in Swat">SWAT</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://www.tourplanner.pk/HolidayPackage" title="Holiday Tour Packages Pakistan">HOLIDAYS</a>
                    <ul>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/8/holidays-in-abbottabad" title="Holidays in Abbottabad ">ABBOTTABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/17/holidays-in-gilgit-and-hunza" title="Holidays in Gilgit &amp; Hunza">GILGIT &amp; HUNZA</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/3/holidays-in-islamabad" title="Holidays in Islamabad">ISLAMABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/1/holidays-in-lahore" title="Holidays in Lahore">LAHORE</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/5/holidays-in-murree" title="Holidays in Murree">MURREE</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/6/holidays-in-muzaffarabad" title="Holidays in Muzaffarabad">MUZAFFARABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/14/holidays-in-neelum-valley-ajk" title="Holidays in Neelum Valley AJK">NEELUM VALLEY AJK</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/11/holidays-in-naran-kaghan-shogran" title="Holidays in Naran Kaghan Shogran">NARAN KAGHAN SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/10/holidays-in-nathiagali" title="Holidays in Nathiagali">NATHIAGALI</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/15/holidays-in-rawalakot" title="Holidays in Rawalakot">RAWALAKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/16/holidays-in-swat" title="Holidays in SWAT">SWAT</a></li>
                        <li><a href="http://www.tourplanner.pk/HolidayPackage/Index/18/holidays-in-skardu" title="Holidays in Sakardu">SAKARDU</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://www.tourplanner.pk/honeymoon" title="Honeymoon Packages">HONEYMOON</a>
                    <ul>
                        <li><a href="http://www.tourplanner.pk/honeymoon/abbottabad" title="Honeymoon Packages in Abbottabad ">ABBOTTABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/neelum-valley-ajk" title="Honeymoon Packages in Neelum Valley AJK">NEELUM VALLEY AJK</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/naran-kaghan-shogran" title="Honeymoon Packages in Naran Kaghan Shogran ">NARAN KAGHAN SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/murree" title="Honeymoon Packages in Murree">MURREE</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/nathiagali" title="Honeymoon Packages in Nathiagali ">NATHIAGALI</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/muzaffarabad" title="Honeymoon Packages in Muzaffarabad">MUZAFFARABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/rawalakot" title="Honeymoon Packages in Rawalakot ">RAWALAKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/swat" title="Honeymoon Packages in Swat">SWAT</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/gilgit-and-hunza" title="Honeymoon Packages in Gilgit &amp; Hunza ">GILGIT &amp; HUNZA</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/sakardu" title="Honeymoon Packages in Sakardu">SAKARDU</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/lahore" title="Honeymoon Packages in Lahore ">LAHORE</a></li>
                        <li><a href="http://www.tourplanner.pk/honeymoon/islamabad" title="Honeymoon Packages in Islamabad">ISLAMABAD</a></li>
                    </ul>
                </li>
                <li style="background-color: #41AFAA; padding-left: 15px;">
                    <a href="http://www.tourplanner.pk/make-my-trip" title="Make My Trip">MAKE MY TRIP</a>

                </li>
                <li style="padding-left: 12px;">
                    <a href="http://www.tourplanner.pk/Car" title="Car Rental">CAR RENTAL</a>
                </li>
                <li>
                    <a href="http://international.tourplanner.pk/templates/410318/index" title="International Hotels">INTERNATIONAL  HOTELS</a>
                </li>
                <li>
                    <a href="http://www.tourplanner.pk/Flights" title="Flight Information">FLIGHT INFORMATION</a>
                    <ul>
                        <li><a href="http://www.tourplanner.pk/Flights/Islamabad" title="Islamabad Flights Information">ISLAMABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/Flights/Lahore" title="Lahore Flights Information">LAHORE</a></li>
                        <li><a href="http://www.tourplanner.pk/Flights/Karachi" title="Karachi Flights Information">KARACHI</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://www.tourplanner.pk/TravelGuide" title="Travel Guide">TRAVEL GUIDE</a>
                    <ul>


                        <li><a href="http://www.tourplanner.pk/TravelGuide/abbottabad" title="Abbottabad city details">ABBOTTABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/gilgit-and-hunza" title="Gilgit &amp; Hunza city details">GILGIT &amp; HUNZA</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/islamabad" title="Islamabad city details">ISLAMABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/karachi" title="Karachi city details">KARACHI</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/lahore" title="Lahore city details">LAHORE</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/mirpur" title="Mirpur city details">MIRPUR</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/multan" title="Multan city details">MULTAN</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/murree" title="Murree city details">MURREE</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/muzaffarabad" title="Muzaffarabad city details">MUZAFFARABAD</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/naran-kaghan-shogran" title="Naran Kaghan Shogran city details">NARAN KAGHAN SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/nathiagali" title="Nathiagali city details">NATHIAGALI</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/neelum-valley-ajk" title="Neelum Valley Ajk city details">NEELUM VALLEY AJK</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/northern-areas" title="Northern Areas  city details">NORTHERN AREAS </a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/peshawar" title="Peshawar city details">PESHAWAR</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/rawalakot" title="Rawalakot city details">RAWALAKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/rawalpindi" title="Rawalpindi city details">RAWALPINDI</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/sakardu" title="Sakardu city details">SAKARDU</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/shogran" title="Shogran city details">SHOGRAN</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/sialkot" title="Sialkot city details">SIALKOT</a></li>
                        <li><a href="http://www.tourplanner.pk/TravelGuide/swat" title="Swat city details">SWAT</a></li>


                    </ul>
                </li>

            </ul>
            <div class="selector" id="uniform-mobile"><span>Navigation</span><select id="mobile" style="opacity: 0;"><option selected="selected">Navigation</option><option value="http://www.tourplanner.pk/">HOME</option><option value="http://www.tourplanner.pk/Hotels">PAKISTANI  HOTELS</option><option value="http://www.tourplanner.pk/Hotels/Index/8/hotels-in-abbottabad">- ABBOTTABAD</option><option value="http://www.tourplanner.pk/Hotels/Index/17/hotels-in-gilgit-and-hunza">- GILGIT &amp; HUNZA</option><option value="http://www.tourplanner.pk/Hotels/Index/3/hotels-in-islamabad">- ISLAMABAD</option><option value="http://www.tourplanner.pk/Hotels/Index/2/hotels-in-karachi">- KARACHI</option><option value="http://www.tourplanner.pk/Hotels/Index/1/hotels-in-lahore">- LAHORE</option><option value="http://www.tourplanner.pk/Hotels/Index/9/hotels-in-mirpur">- MIRPUR</option><option value="http://www.tourplanner.pk/Hotels/Index/13/hotels-in-multan">- MULTAN</option><option value="http://www.tourplanner.pk/Hotels/Index/5/hotels-in-murree">- MURREE</option><option value="http://www.tourplanner.pk/Hotels/Index/6/hotels-in-muzaffarabad">- MUZAFFARABAD</option><option value="http://www.tourplanner.pk/Hotels/Index/11/hotels-in-naran-kaghan-shogran">- NARAN KAGHAN SHOGRAN</option><option value="http://www.tourplanner.pk/Hotels/Index/10/hotels-in-nathiagali">- NATHIAGALI</option><option value="http://www.tourplanner.pk/Hotels/Index/14/hotels-in-neelum-valley-ajk">- NEELUM VALLEY AJK</option><option value="http://www.tourplanner.pk/Hotels/Index/20/hotels-in-northern-areas">- NORTHERN AREAS </option><option value="http://www.tourplanner.pk/Hotels/Index/7/hotels-in-peshawar">- PESHAWAR</option><option value="http://www.tourplanner.pk/Hotels/Index/15/hotels-in-rawalakot">- RAWALAKOT</option><option value="http://www.tourplanner.pk/Hotels/Index/4/hotels-in-rawalpindi">- RAWALPINDI</option><option value="http://www.tourplanner.pk/Hotels/Index/18/hotels-in-sakardu">- SAKARDU</option><option value="http://www.tourplanner.pk/Hotels/Index/19/hotels-in-shogran">- SHOGRAN</option><option value="http://www.tourplanner.pk/Hotels/Index/12/hotels-in-sialkot">- SIALKOT</option><option value="http://www.tourplanner.pk/Hotels/Index/16/hotels-in-swat">- SWAT</option><option value="http://www.tourplanner.pk/HolidayPackage">HOLIDAYS</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/8/holidays-in-abbottabad">- ABBOTTABAD</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/17/holidays-in-gilgit-and-hunza">- GILGIT &amp; HUNZA</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/3/holidays-in-islamabad">- ISLAMABAD</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/1/holidays-in-lahore">- LAHORE</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/5/holidays-in-murree">- MURREE</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/6/holidays-in-muzaffarabad">- MUZAFFARABAD</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/14/holidays-in-neelum-valley-ajk">- NEELUM VALLEY AJK</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/11/holidays-in-naran-kaghan-shogran">- NARAN KAGHAN SHOGRAN</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/10/holidays-in-nathiagali">- NATHIAGALI</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/15/holidays-in-rawalakot">- RAWALAKOT</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/16/holidays-in-swat">- SWAT</option><option value="http://www.tourplanner.pk/HolidayPackage/Index/18/holidays-in-skardu">- SAKARDU</option><option value="http://www.tourplanner.pk/honeymoon">HONEYMOON</option><option value="http://www.tourplanner.pk/honeymoon/abbottabad">- ABBOTTABAD</option><option value="http://www.tourplanner.pk/honeymoon/neelum-valley-ajk">- NEELUM VALLEY AJK</option><option value="http://www.tourplanner.pk/honeymoon/naran-kaghan-shogran">- NARAN KAGHAN SHOGRAN</option><option value="http://www.tourplanner.pk/honeymoon/murree">- MURREE</option><option value="http://www.tourplanner.pk/honeymoon/nathiagali">- NATHIAGALI</option><option value="http://www.tourplanner.pk/honeymoon/muzaffarabad">- MUZAFFARABAD</option><option value="http://www.tourplanner.pk/honeymoon/rawalakot">- RAWALAKOT</option><option value="http://www.tourplanner.pk/honeymoon/swat">- SWAT</option><option value="http://www.tourplanner.pk/honeymoon/gilgit-and-hunza">- GILGIT &amp; HUNZA</option><option value="http://www.tourplanner.pk/honeymoon/sakardu">- SAKARDU</option><option value="http://www.tourplanner.pk/honeymoon/lahore">- LAHORE</option><option value="http://www.tourplanner.pk/honeymoon/islamabad">- ISLAMABAD</option><option value="http://www.tourplanner.pk/make-my-trip">MAKE MY TRIP</option><option value="http://www.tourplanner.pk/Car">CAR RENTAL</option><option value="http://international.tourplanner.pk/templates/410318/index">INTERNATIONAL  HOTELS</option><option value="http://www.tourplanner.pk/Flights">FLIGHT INFORMATION</option><option value="http://www.tourplanner.pk/Flights/Islamabad">- ISLAMABAD</option><option value="http://www.tourplanner.pk/Flights/Lahore">- LAHORE</option><option value="http://www.tourplanner.pk/Flights/Karachi">- KARACHI</option><option value="http://www.tourplanner.pk/TravelGuide">TRAVEL GUIDE</option><option value="http://www.tourplanner.pk/TravelGuide/abbottabad">- ABBOTTABAD</option><option value="http://www.tourplanner.pk/TravelGuide/gilgit-and-hunza">- GILGIT &amp; HUNZA</option><option value="http://www.tourplanner.pk/TravelGuide/islamabad">- ISLAMABAD</option><option value="http://www.tourplanner.pk/TravelGuide/karachi">- KARACHI</option><option value="http://www.tourplanner.pk/TravelGuide/lahore">- LAHORE</option><option value="http://www.tourplanner.pk/TravelGuide/mirpur">- MIRPUR</option><option value="http://www.tourplanner.pk/TravelGuide/multan">- MULTAN</option><option value="http://www.tourplanner.pk/TravelGuide/murree">- MURREE</option><option value="http://www.tourplanner.pk/TravelGuide/muzaffarabad">- MUZAFFARABAD</option><option value="http://www.tourplanner.pk/TravelGuide/naran-kaghan-shogran">- NARAN KAGHAN SHOGRAN</option><option value="http://www.tourplanner.pk/TravelGuide/nathiagali">- NATHIAGALI</option><option value="http://www.tourplanner.pk/TravelGuide/neelum-valley-ajk">- NEELUM VALLEY AJK</option><option value="http://www.tourplanner.pk/TravelGuide/northern-areas">- NORTHERN AREAS </option><option value="http://www.tourplanner.pk/TravelGuide/peshawar">- PESHAWAR</option><option value="http://www.tourplanner.pk/TravelGuide/rawalakot">- RAWALAKOT</option><option value="http://www.tourplanner.pk/TravelGuide/rawalpindi">- RAWALPINDI</option><option value="http://www.tourplanner.pk/TravelGuide/sakardu">- SAKARDU</option><option value="http://www.tourplanner.pk/TravelGuide/shogran">- SHOGRAN</option><option value="http://www.tourplanner.pk/TravelGuide/sialkot">- SIALKOT</option><option value="http://www.tourplanner.pk/TravelGuide/swat">- SWAT</option></select></div></nav>
        <!--//main navigation-->
    </header>
@show