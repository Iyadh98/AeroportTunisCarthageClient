@extends('template')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('content')
    <!--================ PAGE-COVER ===============-->
    <section class="page-cover" id="cover-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Contact Us 1</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us 1</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-5 no-pd-r">
                        <div class="custom-form contact-form">
                            <h3>Contact Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <form id="addMessage">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="nom" name="nom" required/>
                                    <span><i class="fa fa-user"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" id="objet" name="objet" required/>
                                    <span><i class="fa fa-info-circle"></i></span>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message" id="message" name="message"></textarea>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>

                                <button class="btn btn-orange btn-block" type="submit" id="submitForm">Send</button>
                            </form>
                        </div><!-- end contact-form -->
                    </div><!-- end columns -->

                    <div class="col-sm-12 col-md-7 no-pd-l">
                        <div class="map">
                            <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                        </div><!-- end map -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end contact-us -->
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

    <script src="https://www.gstatic.com/firebasejs/5.9.3/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyASrngsVjEjoRcm_Q5w7QbqCOHSef0xyAQ",
            authDomain: "aeroporttuniscarthage.firebaseapp.com",
            databaseURL: "https://aeroporttuniscarthage.firebaseio.com",
            projectId: "aeroporttuniscarthage",
            storageBucket: "aeroporttuniscarthage.appspot.com",
            messagingSenderId: "178770301354"
        };
        firebase.initializeApp(config);
        var database = firebase.database();

        var lastIndex = 0;
        jQuery('#submitForm').on('click', function(){
            var values = jQuery("#addMessage").serializeArray();
            console.log(values);
            var nom=values[0].value
            var email= values[1].value;
            var objet = values[2].value;
            var adresse = values[3].value;
            console.log(nom);
            firebase.database().ref('/contact/'+nom).set({
                nom: nom,
                email: email,
                objet: objet,
                adresse: adresse,

            });


            jQuery("#addMessage input").val("");
            window.location.href = "/contact";
        });
    </script>
@endsection