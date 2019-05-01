@extends('template')
@section('head')
@endsection
@section('content')
    <section class="page-cover back-size" id="cover-flight-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Vols</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active">Vols</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="flight-listings" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                        <div class="side-bar-block filter-block">
                            <h3>Trier par</h3>
                            <p>Trouvez vos voyages de rêve aujourd'hui</p>

                            <div class="panels-group">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-1" data-toggle="collapse" >Selectionner une compagnie aérienne <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>Tous</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Tunisair</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Airfrance</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox"/>
                                                    <label for="check03"><span><i class="fa fa-check"></i></span>Asiana Airlines</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox"/>
                                                    <label for="check04"><span><i class="fa fa-check"></i></span>American Airlines</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox"/>
                                                    <label for="check05"><span><i class="fa fa-check"></i></span>Delta Stop</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox"/>
                                                    <label for="check06"><span><i class="fa fa-check"></i></span>KingFisher Airlines</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox"/>
                                                    <label for="check07"><span><i class="fa fa-check"></i></span>Lufthansa Airlines</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox"/>
                                                    <label for="check08"><span><i class="fa fa-check"></i></span>Qatar Airlines</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox"/>
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>United Airlines</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-2" data-toggle="collapse" >Classe <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox"/>
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>All</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check11" name="checkbox"/>
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Economy</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check12" name="checkbox"/>
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>First Class</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check13" name="checkbox"/>
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>Business</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-3" data-toggle="collapse" >Escales <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-3" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>All</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>1 Stop</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>2 Stop</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>3 Stop</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                            </div><!-- end panel-group -->

                            <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div><!-- end price-slider -->
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

                    <div class="col-xs-12 col-sm-12 col-md-9 content-side">
                        @foreach($arr2['body']['Itineraries'] as $arr)
                                @foreach($arr['PricingOptions'] as $price)
                                    @foreach($arr2['body']['Legs'] as $leg)
                                        @if($leg['Id']==$arr['OutboundLegId'])
                                            @php  $departTime=$from2=explode("T",$leg['Departure'])[1];
                                                  $arriveeTime=$from2=explode("T",$leg['Arrival'])[1];
                                                    @endphp
                                            @foreach($leg['Carriers'] as $carrier)
                                                @php $carr=$carrier @endphp
                                                @endforeach
                                            @break
                                            @endif
                                        @endforeach
                                    @foreach($arr2['body']['Carriers'] as $carriers)
                                        @if($carriers['Id']==$carr)
                                                @php $image=$carriers['ImageUrl'];
                                                     $nom=$carriers['Name'];
                                                @endphp
                                            @break
                                            @endif
                                        @endforeach
                            <div class="list-block main-block f-list-block">
                                <div class="list-content">
                                    <div class="main-img list-img f-list-img">
                                        <a href="flight-detail-left-sidebar.html">
                                            <div class="f-img">
                                                <img src="{{$image}}" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        </a>
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="duration"><i class="fa fa-clock-o"></i><span></span></li>
                                            <li class="price" style="font-size:20px;">{{$price['Price']}} DT<span class="divider">|</span><span class="pkg">2 Stay</span></li>
                                        </ul>
                                        <ul class="list-unstyled flight-timing">
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">{{$arr2['body']['Query']['OutboundDate']}} </span>({{$departTime}})</li>
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">{{$arr2['body']['Query']['InboundDate']}} </span>({{$arriveeTime}})</li>
                                        </ul>
                                    </div><!-- end f-list-img -->

                                    <div class="list-info f-list-info">
                                        <h3 class="block-title"><a href="flight-detail-left-sidebar.html">{{$nom}}</a></h3>
                                        <p class="block-minor"><span></span> </p>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        <a href="{{$price['DeeplinkUrl']}}" class="btn btn-orange">Payer</a>
                                    </div><!-- end f-list-info -->
                                </div><!-- end list-content -->
                            </div><!-- end f-list-block -->

                        @endforeach
                        @endforeach
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
        </div><!-- end flight-listings -->
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