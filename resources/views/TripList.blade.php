@extends("layout")
@section("content")

    <section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
            <!-- BREADCRUMB -->
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span>Trips</span></li>
                </ul>
            </div>
            <!-- BREADCRUMB -->
            <div class="find">
                <h2 class="text-center">Find Your Trip</h2>
                <form>
                    <div class="form-group">
                        <div class="form-elements">
                            <label>Location</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Check in</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Check out</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Budget</label>
                            <div class="form-item">
                                <select class="awe-select">
                                    <option>All types</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <input type="submit" value="Find My Trip">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END / HEADING PAGE -->


<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <select class="awe-select">
                        <option>Best Match</option>
                        <option>Best Rate</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/1.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">All Around Town Tour by City Sights</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/2.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">Spectacular City Views</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/3.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">Romantic New York</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/4.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">NYC Family Fun Pass - Winter</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/5.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">NYC Land &amp; Sea</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                        <!-- ITEM -->
                        <div class="trip-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="images/trip/1.jpg" alt="">
                                </div>
                                <div class="trip-icon">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="#">Spectacular City Views</a>
                                    </h2>
                                </div>
                                <div class="item-list">
                                    <ul>
                                        <li>4 Attractions</li>
                                        <li>2 days, 1 night</li>
                                    </ul>
                                </div>
                                <div class="item-footer">
                                    <div class="item-rate">
                                        <span>7.5 Good</span>
                                    </div>
                                    <div class="item-icon">
                                        <i class="awe-icon awe-icon-gym"></i>
                                        <i class="awe-icon awe-icon-car"></i>
                                        <i class="awe-icon awe-icon-food"></i>
                                        <i class="awe-icon awe-icon-level"></i>
                                        <i class="awe-icon awe-icon-wifi"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    Adult ticket
                                    <ins>
                                        <span class="amount">$200</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$200</span>
                                    </del>

                                </div>
                                <a href="#" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                    </div>


                    <!-- PAGINATION -->
                    <div class="page__pagination">
                        <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                    </div>
                    <!-- END / PAGINATION -->
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="page-sidebar">
                    <div class="sidebar-title">
                        <h2>Trip</h2>
                        <div class="clear-filter">
                            <a href="#">Clear all</a>
                        </div>
                    </div>
                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Trip Type</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Amusement park
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Natural sight-seeing
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Pool &amp; Waterpark
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Museum
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Religious and Cultural place
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Shoping mall &amp; Market
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Others
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_price_filter">
                        <h3>Price Level</h3>
                        <div class="price-slider-wrapper">
                            <div class="price-slider"></div>
                            <div class="price_slider_amount">
                                <div class="price_label">
                                    <span class="from"></span> - <span class="to"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Star Rating</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                            </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                Unrated
                                            </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Distance</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Airport
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Shopping District
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Attractions
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Traffic station
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Service Include</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Room service
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Laundry
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Meal at room
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Wifi &amp; internet
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Parking lot
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    TV and appliances
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Pool
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Gym and Spa
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_product_tag_cloud">
                        <h3>Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Hotel</a>
                            <a href="#">Motel</a>
                            <a href="#">Hostel</a>
                            <a href="#">Homestay</a>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                </div>
            </div>
        </div>
    </div>
</section>

@stop