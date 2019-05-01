@extends('template')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection
@section('content')

    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-2">

        <div class="flexslider slider" id="slider-2">
            <ul class="slides">

                <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/tncar.jpeg) 50% 15%;
	background-size:cover;
	height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>Meilleurs offres de vols</h2>
                            <p>L'aeroport Tunis-Carthage vous offre les meilleurs offres de vols.</p>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/flight-slider-1.jpg) 50% 15%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Meilleurs offres de vols</h2>
                            <p>L'aeroport Tunis-Carthage vous offre les meilleurs offres de vols.</p>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Vols</span></a></li>
                            <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hôtels</span></a></li>
                            <li><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Taxis</span></a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="flights" class="tab-pane in active">
                                <form method="post" action="{{action('ScrapperController@searchFlights')}}" id="myForm" >
                                    {{csrf_field()}}

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" id="myInput" name="from" placeholder="Pays de départ" >
                                                        <i class="fa fa-map-marker"></i>
                                                        <div id="countryList">
                                                        </div>

                                                    </div>

                                                </div><!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" id="myInput1" name="to" placeholder="Destination" >
                                                        <i class="fa fa-map-marker"></i>
                                                        <div id="countryList1">
                                                        </div>

                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" name="checkin" placeholder="Date de départ" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" name="checkout" placeholder="Date de retour" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control" name="classe">
                                                    <option selected>Classe</option>
                                                    <option>Economique</option>
                                                    <option>Affaires</option>
                                                    <option>Premiere</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <div class="form-group right-icon">
                                                <select class="form-control" name="sel">
                                                    <option selected>Adults</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->


                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button type ="submit" class="btn btn-orange">Lancer la recherche</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end flights -->

                            <div id="hotels" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Rooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Adults</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-4">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Kids</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end hotels -->

                            <div id="cars" class="tab-pane">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="Country" />
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="City" />
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-sm-12 col-md-4">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control" placeholder="Location" />
                                                        <i class="fa fa-street-view"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Search</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end cars -->

                        </div><!-- end tab-content -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <!--================= FLIGHT OFFERS =============-->
    <section id="flight-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Offres de vols</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-1.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-2.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-3.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-4.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-5.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="flight-detail-right-sidebar.html">
                                    <div class="flight-img">
                                        <img src="images/flight-6.jpg" class="img-responsive" alt="flight-img" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="flight-grid-right-sidebar.html" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end flight-offers -->


    <!--============== TOP DESTINATIONS ============-->
    <section id="destinations" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Top Destinations</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="tour-detail-right-sidebar.html">
                                                <img src="images/destination-1.jpg" class="img-responsive" alt="destination-img"/>
                                            </a>
                                        </div><!-- end destination-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="tour-detail-right-sidebar.html">Blue Beach</a>
                                                <p class="country">Dubai</p>
                                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                                                <span class="destination-price">$899/Person</span>
                                                <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book Now</a>
                                            </div><!-- end destination-title -->
                                        </div><!-- end destination-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end destination-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="tour-detail-right-sidebar.html">
                                                <img src="images/destination-2.jpg" class="img-responsive" alt="destination-img"/>
                                            </a>
                                        </div><!-- end destination-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="tour-detail-right-sidebar.html">Sydney Tour</a>
                                                <p class="country">Australia</p>
                                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                                                <span class="destination-price">$899/Person</span>
                                                <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book Now</a>
                                            </div><!-- end destination-title -->
                                        </div><!-- end destination-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end destination-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="tour-detail-right-sidebar.html">
                                                <img src="images/destination-3.jpg" class="img-responsive" alt="destination-img"/>
                                            </a>
                                        </div><!-- end destination-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="tour-detail-right-sidebar.html">Wild Forest</a>
                                                <p class="country">Africa</p>
                                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                                                <span class="destination-price">$899/Person</span>
                                                <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book Now</a>
                                            </div><!-- end destination-title -->
                                        </div><!-- end destination-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end destination-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="tour-detail-right-sidebar.html">
                                                <img src="images/destination-4.jpg" class="img-responsive" alt="destination-img"/>
                                            </a>
                                        </div><!-- end destination-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="tour-detail-right-sidebar.html">Beautiful Paris</a>
                                                <p class="country">France</p>
                                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                                                <span class="destination-price">$899/Person</span>
                                                <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book Now</a>
                                            </div><!-- end destination-title -->
                                        </div><!-- end destination-info -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end destination-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="tour-listing-right-sidebar.html" class="btn btn-g-border">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destinations -->


    <!--========================= BEST FEATURES =======================-->
    <section id="best-features" class="banner-padding lightgrey-features">
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


    <!--=============== TESTIMONIALS ===============-->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading white-heading">
                        <h2>Testimonials</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <div class="carousel-inner text-center">

                            <div class="item active">
                                <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Jhon Smith</small>
                            </div><!-- end item -->

                            <div class="item">
                                <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Jhon Smith</small>
                            </div><!-- end item -->

                            <div class="item">
                                <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Jhon Smith</small>
                            </div><!-- end item -->

                        </div><!-- end carousel-inner -->

                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/client-1.jpg" class="img-responsive"  alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img src="images/client-2.jpg" class="img-responsive"  alt="client-img">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img src="images/client-3.jpg" class="img-responsive"  alt="client-img">
                            </li>
                        </ol>

                    </div><!-- end quote-carousel -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonials -->


    <!--============== HIGHLIGHTS =============-->
    <section id="highlights" class="highlights-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                        </div><!-- end boxes -->
                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end highlights -->


    <!--============ NEWSLETTER-2 =============-->
    <section id="newsletter-2" class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <h2>Subscribe Our Newsletter</h2>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
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
    </section><!-- end newsletter-2 -->


    <script>
        jQuery(document).ready(function(){

            jQuery('#myInput').keyup(function(){
                console.log("i'm in");
                var query = jQuery(this).val();
                console.log(query);
                if(query != '')
                {
                    var _token = jQuery('input[name="_token"]').val();
                    console.log(_token);
                    console.log(jQuery.ajax({
                        url:"{{ route('autocomplete.fetch') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            jQuery('#countryList').fadeIn();
                            jQuery('#countryList').html(data);
                        }
                    }));
                }
            });

            jQuery(document).on('click', '.abcd', function(){
                jQuery('#myInput').val(jQuery(this).text());
                jQuery('#countryList').fadeOut();
            });

        });
    </script>

    <script>
        jQuery(document).ready(function(){

            jQuery('#myInput1').keyup(function(){
                console.log("i'm in");
                var query1 = jQuery(this).val();
                console.log(query1);
                if(query1 != '')
                {
                    var _token1 = jQuery('input[name="_token"]').val();
                    console.log(_token1);
                    console.log(jQuery.ajax({
                        url:"{{ route('autocompleteTo.fetch') }}",
                        method:"POST",
                        data:{query:query1, _token:_token1},
                        success:function(data){
                            jQuery('#countryList1').fadeIn();
                            jQuery('#countryList1').html(data);
                        }
                    }));
                }
            });

            jQuery(document).on('click', '.bcda', function(){
                jQuery('#myInput1').val(jQuery(this).text());
                jQuery('#countryList1').fadeOut();
            });

        });
    </script>


@endsection

