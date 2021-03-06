@extends("layout")
@section("content")

    <section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="product-title">
                        <h2>American Museum of Natural History + Space Show</h2>
                    </div>
                    <div class="rating-trip-reviews">
                        <div class="item good">
                            <span class="count">7.5</span>
                            <h6>Average rating</h6>
                            <p>Good</p>
                        </div>
                        <div class="item">
                            <h6>Reviews</h6>
                            <p>3 reviews</p>
                        </div>
                    </div>
                    <div class="product-descriptions">
                        <p>It's one of the world’s greatest Museums dedicated to discovering and distributing knowledge about human cultures, the natural world and the universe.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="product-detail__gallery">
                    <div class="product-slider-wrapper">
                        <div class="product-slider">
                            <div class="item">
                                <img src="images/img/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/8.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/img/9.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-slider-thumb-row">
                            <div class="product-slider-thumb">
                                <div class="item">
                                    <img src="images/img/demo-thumb-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-5.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-6.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-7.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-8.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/img/demo-thumb-9.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-map">
                        <div data-latlong="21.036697, 105.834871"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="product-tabs tabs">
                    <ul>
                        <li>
                            <a href="#tabs-1">Good to know</a>
                        </li>
                        <li>
                            <a href="#tabs-2">Price</a>
                        </li>
                        <li>
                            <a href="#tabs-3">Review &amp; rating</a>
                        </li>
                    </ul>
                    <div class="product-tabs__content">
                        <div id="tabs-1">
                            <table class="good-to-know-table">
                                <tbody>
                                <tr>
                                    <th>
                                        <p>Address</p>
                                    </th>
                                    <td>
                                        <p>Central Park West at 79th St. NY 10024 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Opening Times</p>
                                    </th>
                                    <td>
                                        <p>10:00am - 5:45pm daily</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Child Age</p>
                                    </th>
                                    <td>
                                        <p>2 - 12</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>T&C's</p>
                                    </th>
                                    <td>
                                        <p>Tickets must be redeemed within 6 months of purchase.</p>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div id="tabs-2">
                            <table class="facilities-freebies-table">
                                <tbody>
                                <tr>
                                    <th>
                                        <p>Adults</p>
                                    </th>
                                    <td>
                                        <p>US$27.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Children</p>
                                    </th>
                                    <td>
                                        <p>US$16.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Family</p>
                                    </th>
                                    <td>
                                        <p>US$1.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Concession</p>
                                    </th>
                                    <td>
                                        <p>US$0.00</p>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div id="tabs-3">
                            <div id="reviews">
                                <div class="rating-info">
                                    <div class="average-rating-review good">
                                        <span class="count">7.5</span>
                                        <em>Average rating</em>
                                        <span>Good</span>
                                    </div>
                                    <ul class="rating-review">
                                        <li>
                                            <em>Facility</em>
                                            <span>7.5</span>
                                        </li>
                                        <li>
                                            <em>Human</em>
                                            <span>9.0</span>
                                        </li>
                                        <li>
                                            <em>Service</em>
                                            <span>9.5</span>
                                        </li>
                                        <li>
                                            <em>Interesting</em>
                                            <span>8.7</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="write-review">Write a review</a>
                                </div>
                                <div id="add_review">
                                    <h3 class="comment-reply-title">Add a review</h3>
                                    <form>
                                        <div class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input id="author" type="text">
                                        </div>
                                        <div class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input id="email" type="text">
                                        </div>
                                        <div class="comment-form-rating">
                                            <h4>Your Rating</h4>
                                            <div class="comment-form-rating__content">
                                                <div class="item facility">
                                                    <label>Facility</label>
                                                    <select class="awe-select">
                                                        <option>5.0</option>
                                                        <option>6.5</option>
                                                        <option>7.5</option>
                                                        <option>8.5</option>
                                                        <option>9.0</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                                <div class="item human">
                                                    <label>Human</label>
                                                    <select class="awe-select">
                                                        <option>5.0</option>
                                                        <option>6.5</option>
                                                        <option>7.5</option>
                                                        <option>8.5</option>
                                                        <option>9.0</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                                <div class="item service">
                                                    <label>Service</label>
                                                    <select class="awe-select">
                                                        <option>5.0</option>
                                                        <option>6.5</option>
                                                        <option>7.5</option>
                                                        <option>8.5</option>
                                                        <option>9.0</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                                <div class="item interesting">
                                                    <label>Interesting</label>
                                                    <select class="awe-select">
                                                        <option>5.0</option>
                                                        <option>6.5</option>
                                                        <option>7.5</option>
                                                        <option>8.5</option>
                                                        <option>9.0</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-form-comment">
                                            <label for="comment">Your Review</label>
                                            <textarea id="comment"></textarea>
                                        </div>
                                        <div class="form-submit">
                                            <input type="submit" class="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                                <div id="comments">
                                    <ol class="commentlist">
                                        <li>
                                            <div class="comment-box">
                                                <div class="avatar">
                                                    <img src="images/img/demo-thumb.jpg" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <p class="meta">
                                                        <strong>Nguyen Gallahendahry</strong>
                                                        <span class="time">December 10, 2012</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Takes me back to my youth. I love the design of this soda machine. A bit pricy though..!</p>
                                                    </div>

                                                    <div class="rating-info">
                                                        <div class="average-rating-review good">
                                                            <span class="count">7.5</span>
                                                            <em>Average rating</em>
                                                            <span>Good</span>
                                                        </div>
                                                        <ul class="rating-review">
                                                            <li>
                                                                <em>Facility</em>
                                                                <span>7.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Human</em>
                                                                <span>9.0</span>
                                                            </li>
                                                            <li>
                                                                <em>Service</em>
                                                                <span>9.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Interesting</em>
                                                                <span>8.7</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-box">
                                                <div class="avatar">
                                                    <img src="images/img/demo-thumb.jpg" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <p class="meta">
                                                        <strong>James Bond not 007</strong>
                                                        <span class="time">December 10, 2012</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Takes me back to my youth. I love the design of this soda machine. A bit pricy though..!</p>
                                                    </div>

                                                    <div class="rating-info">
                                                        <div class="average-rating-review good">
                                                            <span class="count">7.5</span>
                                                            <em>Average rating</em>
                                                            <span>Good</span>
                                                        </div>
                                                        <ul class="rating-review">
                                                            <li>
                                                                <em>Facility</em>
                                                                <span>7.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Human</em>
                                                                <span>9.0</span>
                                                            </li>
                                                            <li>
                                                                <em>Service</em>
                                                                <span>9.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Interesting</em>
                                                                <span>8.7</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-box">
                                                <div class="avatar">
                                                    <img src="images/img/demo-thumb.jpg" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <p class="meta">
                                                        <strong>Bratt not Pitt</strong>
                                                        <span class="time">December 10, 2012</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Takes me back to my youth. I love the design of this soda machine. A bit pricy though..!</p>
                                                    </div>

                                                    <div class="rating-info">
                                                        <div class="average-rating-review fine">
                                                            <span class="count">5.0</span>
                                                            <em>Average rating</em>
                                                            <span>Fine</span>
                                                        </div>
                                                        <ul class="rating-review">
                                                            <li>
                                                                <em>Facility</em>
                                                                <span>7.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Human</em>
                                                                <span>9.0</span>
                                                            </li>
                                                            <li>
                                                                <em>Service</em>
                                                                <span>9.5</span>
                                                            </li>
                                                            <li>
                                                                <em>Interesting</em>
                                                                <span>8.7</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="detail-sidebar">
                    <div class="call-to-book">
                        <i class="awe-icon awe-icon-phone"></i>
                        <em>Call to book</em>
                        <span>+1-888-8765-1234</span>
                    </div>
                    <div class="booking-info">
                        <h3>Booking info</h3>
                        <div class="form-select-date">
                            <div class="form-item">
                                <label>Select Travel Date</label>
                                <select class="awe-select">
                                    <option>Fri, 13 Feb, 2015</option>
                                    <option>Fri, 13 Feb, 2015</option>
                                </select>
                                <span>* Tickets must be redeemed within 6 months of purchase.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-elements form-adult">
                                <label>Adult</label>
                                <div class="form-item">
                                    <select class="awe-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <span>12 and above</span>
                            </div>
                            <div class="form-elements form-kids">
                                <label>Kids</label>
                                <div class="form-item">
                                    <select class="awe-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <span>2 to 12</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-elements form-adult">
                                <label>Family</label>
                                <div class="form-item">
                                    <select class="awe-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-elements form-kids">
                                <label>Concession</label>
                                <div class="form-item">
                                    <select class="awe-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <em>Total for this booking</em>
                            <span class="amount">$5,923</span>
                        </div>
                        <div class="form-submit">
                            <div class="add-to-cart">
                                <button type="submit">
                                    <i class="awe-icon awe-icon-cart"></i>Add this to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@stop