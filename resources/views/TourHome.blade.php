@extends("layout")

@section("content")
    <div id="page-wrap">
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                        <img src="images/bg/1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="center" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            Last minute deal
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">Top discount Paris Hotels</div>

                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 2">
                        <img src="images/bg/2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            Check out the top weekly destination
                        </div>

                        <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            Travel with us
                        </div>

                        <a href="#" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                        <img src="images/img/2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                            Gofar
                        </div>

                        <div href="#" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Take you to every corner of the world</div>
                    </li>

                </ul>
            </div>
        </section>
        <!-- END / HERO SECTION -->
    </div>
    <!-- SEARCH TABS -->
    <section>
        <div class="container">
            <div class="awe-search-tabs-2 tabs">
                <ul>
                    <li>
                        <a href="#awe-search-tabs-1">
                            Trips
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-2">
                            Flight
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-3">
                            Hotel
                        </a>
                    </li>
                    <li>
                        <a href="#awe-search-tabs-4">
                            Rent A Car
                        </a>
                    </li>
                </ul>
                <div class="awe-search-tabs__content tabs__content">
                    <div id="awe-search-tabs-1">
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>Guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Tour">
                            </div>
                        </form>
                    </div>
                    <div id="awe-search-tabs-2">
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Ankara, Turkey">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>Guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Flight">
                            </div>
                        </form>
                    </div>
                    <div id="awe-search-tabs-3" class="search-hotel">
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Destination: Country, city, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check in">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Check out">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>Guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Hotel">
                            </div>
                        </form>
                    </div>

                    <div id="awe-search-tabs-4" class="search-car">
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Picking up: City, airport...">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text" value="Droping off: City, airport...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Pink off">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Drop off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Find My Car">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / SEARCH TABS -->
    <div id="page-wrap">
        <!-- MASONRY -->
        <section class="masonry-section-demo">
            <div class="container">
                <div class="destination-grid-content">
                    <div class="section-title">
                        <h3>More than <a href="destinations-list.html">238 Destinations</a> is waiting</h3>
                    </div>
                    <div class="row">
                        <div class="awe-masonry">
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/1.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Florenze</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Italy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">845</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/2.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Toluca</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">USA</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">132</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/3.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Venice</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Italy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2341</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/4.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Ohio</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">USA</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/5.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Venice</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Italy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/6.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Mandives</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Mandives</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/7.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Istanbul</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Turkey</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/8.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Bali</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Thailand</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/9.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Phu Quoc</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Vietnam</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">2531</span>
                                    available hotel
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                        </div>
                    </div>
                    <div class="more-destination">
                        <a href="#">More Destinations</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / MASONRY -->
    </div>

    <div id="page-wrap">
        <section class="trip-flight-hotel-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-4">
                        <div class="trip-flight-hotel-tabs tabs">
                            <ul>
                                <li><a href="#trip-flight-hotel-tabs-1">Recent Trips</a></li>
                                <li><a href="#trip-flight-hotel-tabs-2">Recent Flights</a></li>
                                <li><a href="#trip-flight-hotel-tabs-3">Recent Hotels</a></li>
                            </ul>
                            <div class="trip-flight-hotel__content tabs__content">
                                <div id="trip-flight-hotel-tabs-1">
                                    <table class="trip-flight-hotel__table">
                                        <tbody>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/2.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/3.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/4.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/5.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/6.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/7.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="trip-flight-hotel-tabs-2">
                                    <table class="trip-flight-hotel__table">
                                        <tbody>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/2.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/3.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/4.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/5.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/6.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/7.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="trip-flight-hotel-tabs-3">
                                    <table class="trip-flight-hotel__table">
                                        <tbody>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/2.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/3.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/4.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/5.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/6.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="item-media">
                                                <div class="image-cover">
                                                    <img src="images/img/7.jpg" alt="">
                                                </div>
                                                <span class="sale">-50%</span>
                                                <div class="item-format">
                                                    <a href="#"><i class="fa fa-play"></i></a>
                                                </div>
                                            </td>
                                            <td class="item-body">
                                                <div class="item-body-inner">
                                                    <div class="item-title">
                                                        <h2><a href="#">Bocaray Island</a></h2>
                                                    </div>
                                                    <div class="item-description">
                                                        <p>3 days, 2 nights. Good time for honeymoon trips that any coulples dream</p>
                                                    </div>
                                                    <div class="item-rate">
                                                        <span>7.5 Good</span>
                                                    </div>
                                                    <div class="item-footer">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="item-price">
                                                <div class="price">
                                                    from
                                                    <span class="amount">$200</span>
                                                </div>
                                                <a href="#">Detail</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-8">
                        <div class="awe-services">
                            <h2>Why your friends like our services?</h2>
                            <ul class="awe-services__list">
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        100,000 real deals
                                        <span>No booking fees . No fake</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        100% trusted reviews
                                        <span>We verify them in person</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        24/7 global support
                                        <span>anytime and any where</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        24/7 global support
                                        <span>anytime and any where</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Manage your bookings online
                                        <span>anytime and any where</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="video-wrapper embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wJF5NXygL4k"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop