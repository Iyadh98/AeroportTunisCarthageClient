@extends('template')
@section('head')
@endsection
@section('content')

    <!--================== PAGE-COVER ================-->
    <section class="page-cover" id="cover-flight-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Flight Detail Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Flight Detail Left Sidebar</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="flight-details" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                        <div class="side-bar-block booking-form-block">
                            <h2 class="selected-price">$568.00 <span>FR 5379</span></h2>

                            <div class="booking-form">
                                <h3>Book Flight</h3>
                                <p>Find your dream flight today</p>

                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control dpd3" placeholder="Booking Date" required/>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Children</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group right-icon">
                                        <select class="form-control">
                                            <option selected>Payment Method</option>
                                            <option>Credit Card</option>
                                            <option>Paypal</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>

                                    <div class="checkbox custom-check">
                                        <input type="checkbox" id="check01" name="checkbox"/>
                                        <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                    </div>

                                    <button class="btn btn-block btn-orange">Confirm Booking</button>
                                </form>

                            </div><!-- end booking-form -->
                        </div><!-- end side-bar-block -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div><!-- end ad-text -->
                                            </div><!-- end columns -->
                                        </a>
                                    </div><!-- end ad-img -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Need Help</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+1 123 1234567</p>
                                    </div><!-- end support-contact -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div class="detail-slider">
                            <div class="feature-slider">
                                <div><img src="images/f-feature-1.jpg" class="img-responsive" alt="feature-img"/></div>
                                <div><img src="images/f-feature-2.jpg" class="img-responsive" alt="feature-img"/></div>
                                <div><img src="images/f-feature-3.jpg" class="img-responsive" alt="feature-img"/></div>
                                <div><img src="images/f-feature-4.jpg" class="img-responsive" alt="feature-img"/></div>
                                <div><img src="images/f-feature-5.jpg" class="img-responsive" alt="feature-img"/></div>
                            </div><!-- end feature-slider -->

                            <div class="feature-slider-nav">
                                <div><img src="images/f-feature-thumb-1.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                <div><img src="images/f-feature-thumb-2.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                <div><img src="images/f-feature-thumb-3.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                <div><img src="images/f-feature-thumb-4.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                <div><img src="images/f-feature-thumb-5.jpg" class="img-responsive" alt="feature-thumb"/></div>
                            </div><!-- end feature-slider-nav -->

                            <ul class="list-unstyled features flight-features">
                                <li><div class="f-icon"><i class="fa fa-plane"></i></div><div class="f-text"><p class="f-heading">From</p><p class="f-data">Sydney</p></div></li>
                                <li><div class="f-icon"><i class="fa fa-plane"></i></div><div class="f-text"><p class="f-heading">To</p><p class="f-data">Paris</p></div></li>
                                <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Total Time</p><p class="f-data">6 hrs 30 mins</p></div></li>
                            </ul>
                        </div><!-- end detail-slider -->

                        <div class="detail-tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#flight-info" data-toggle="tab">Flight Information</a></li>
                                <li><a href="#entertainment" data-toggle="tab">Entertainment</a></li>
                                <li><a href="#connectivity" data-toggle="tab">Connectivity</a></li>
                                <li><a href="#fare" data-toggle="tab">Fare</a></li>
                                <li><a href="#baggage" data-toggle="tab">Baggage</a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="flight-info" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="images/flight-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3>Flight Information</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end flight-info -->

                                <div id="entertainment" class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="images/flight-detail-tab-2.jpg" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3>Entertainment</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end entertainment -->

                                <div id="connectivity" class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="images/flight-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3>Connectivity</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end connectivity -->

                                <div id="fare" class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="images/flight-detail-tab-4.jpg" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3>Fare</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end fare -->

                                <div id="baggage" class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="images/flight-detail-tab-5.jpg" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3>Baggage</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end baggage -->

                            </div><!-- end tab-content -->
                        </div><!-- end detail-tabs -->

                        <div class="available-blocks" id="available-seats">
                            <h2>Available Seats</h2>
                            <div class="list-block main-block seat-block">
                                <div class="list-content">
                                    <div class="main-img list-img seat-img">
                                        <a href="#">
                                            <img src="images/available-seat-1.jpg" class="img-responsive" alt="seat-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">$29.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end seat-img -->

                                    <div class="list-info seat-info">
                                        <h3 class="block-title"><a href="#">Advanced Seats</a></h3>
                                        <p class="block-minor">Flexible</p>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        <a href="#" class="btn btn-orange btn-lg">View More</a>
                                    </div><!-- end seat-info -->
                                </div><!-- end list-content -->
                            </div><!-- end seat-block -->

                            <div class="list-block main-block seat-block">
                                <div class="list-content">
                                    <div class="main-img list-img seat-img">
                                        <a href="#">
                                            <img src="images/available-seat-2.jpg" class="img-responsive" alt="seat-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">$38.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end seat-img -->

                                    <div class="list-info seat-info">
                                        <h3 class="block-title"><a href="#">Panel Seats</a></h3>
                                        <p class="block-minor">Flexible</p>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        <a href="#" class="btn btn-orange btn-lg">View More</a>
                                    </div><!-- end seat-info -->
                                </div><!-- end list-content -->
                            </div><!-- end seat-block -->

                            <div class="list-block main-block seat-block">
                                <div class="list-content">
                                    <div class="main-img list-img seat-img">
                                        <a href="#">
                                            <img src="images/available-seat-3.jpg" class="img-responsive" alt="seat-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">$36.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end seat-img -->

                                    <div class="list-info seat-info">
                                        <h3 class="block-title"><a href="#">Standard Seats</a></h3>
                                        <p class="block-minor">Flexible</p>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        <a href="#" class="btn btn-orange btn-lg">View More</a>
                                    </div><!-- end seat-info -->
                                </div><!-- end list-content -->
                            </div><!-- end seat-block -->

                            <div class="list-block main-block seat-block">
                                <div class="list-content">
                                    <div class="main-img list-img seat-img">
                                        <a href="#">
                                            <img src="images/available-seat-4.jpg" class="img-responsive" alt="seat-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">$25.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end seat-img -->

                                    <div class="list-info seat-info">
                                        <h3 class="block-title"><a href="#">Standard Seats</a></h3>
                                        <p class="block-minor">Flexible</p>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        <a href="#" class="btn btn-orange btn-lg">View More</a>
                                    </div><!-- end seat-info -->
                                </div><!-- end list-content -->
                            </div><!-- end seat-block -->

                        </div><!-- end available-seats -->


                        <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div><!-- end pages -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end flight-detail -->
    </section><!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->


@endsection