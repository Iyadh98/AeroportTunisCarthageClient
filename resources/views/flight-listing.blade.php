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
                        @foreach($web as $wb)
                            @php $wk=$wb->find('td'); $tk=[] @endphp
                            @foreach($wk as $w)
                                @php $tk[]=$w->plaintext @endphp
                                @endforeach

                        <div class="list-block main-block f-list-block">
                            <div class="list-content">
                                <div class="main-img list-img f-list-img">
                                    <a href="flight-detail-left-sidebar.html">
                                        @if($tk[2]=="TUNISAIR")
                                        <div class="f-img">
                                            <img src="https://logo-logos.com/wp-content/uploads/2016/10/Tunisair_logo_image_picture.png" class="img-responsive" alt="flight-img" />
                                        </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="TUNISAIR EXPRESS")
                                            <div class="f-img">
                                                <img src="https://www.ilboursa.com/i/info/b/TAIR00_7c89b121-b00c-440c-ae3f-846ab75f25e5_b.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="AIR FRANCE")
                                            <div class="f-img">
                                                <img src="https://www.succeed-together.eu/wp-content/uploads/2014/05/AirFrance-Logo.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                            @elseif($tk[2]=="NOUVEL AIR")
                                            <div class="f-img">
                                                <img src="https://m.nouvelair.com/sites/all/themes/mobile/logo.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="LUFTHANSA")
                                            <div class="f-img">
                                                <img src="https://logo-logos.com/wp-content/uploads/2016/10/Lufthansa_logo.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="TRANSAVIA")
                                            <div class="f-img">
                                                <img src="data:image/png;base64,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" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="TUI FLY")
                                            <div class="f-img">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/TUIfly_Nordic_Logo.svg/1280px-TUIfly_Nordic_Logo.svg.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="AIR ALGERIE")
                                            <div class="f-img">
                                                <img src="https://airalgerie.dz/wp-content/uploads/2016/11/air-algerie-logo-og.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="LIBYAN WINGS")
                                            <div class="f-img">
                                                <img src="data:image/png;base64,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" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="LIBYAN ARAB")
                                            <div class="f-img">
                                                <img src="https://hobbydb-production.s3.amazonaws.com/processed_uploads/subject_photo/subject_photo/image/5905/1432483669-3-8582/Libyan_Arab_Airlines_logo_large.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="ALITALIA")
                                            <div class="f-img">
                                                <img src="https://www.alitalia.com/content/dam/alitaliacareers/icons/alitalia-logo.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="TURKISH AIRLINES")
                                            <div class="f-img">
                                                <img src="data:image/png;base64,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" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="ROYAL AIR MAROC")
                                            <div class="f-img">
                                                <img src="https://upload.wikimedia.org/wikipedia/fr/0/00/Logo_RoyalAirMaroc.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="SAUDI ARAB")
                                            <div class="f-img">
                                                <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/2/26/Logo_EgyptAir.svg/667px-Logo_EgyptAir.svg.png" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="AFRIQIYAH AIRWAYS")
                                            <div class="f-img">
                                                <img src="https://www.airlinelogofinder.com/logos/converted/jpeg/afriqiyah-airways.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="QATAR AIRWAYS")
                                            <div class="f-img">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAtFBMVEVcBjL///9gDTdaAC9YACtNABVZAC1RAB5WAChPABpQABxVACZOABdSACBJAApaAC5LABBTACP8+Prq4OX28vTh1tu8pa/w6e1JAAiNY3XSwslFAADcz9Xs5OiCUGbDr7i1nKfKuMA+AAChf45uMEyWcIDHtLyXcoJmHECoipdxMk84AACHW254Q1qvk5/e0teihZF9S2BrJkZlGD51O1VyOlKAVGYqAAB5Sl2acYPUyM19RV77w2JJAAAS3klEQVR4nO1ch5biOBZFyDngABhsMCaHbqCgoGp36f//r31KDthUz0wxXT1ndM+enSbIyNcv3PckVast8YfRkpCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQ+McC26bx1XP4h0CxgkX/JNn6ObA9fE8Q6p61r57Jbw/sWrsBQreDL7n6CbCFI4RQslSVr57K7w5stteUKsf76qn87sBWewZUjd9UQZWHv3RCvy+wq2RAVToRsUpxO29vkq0m2OYUqAo3QxqrQGWp8TpEN/2r5/UbQhkuQuBq6tgtwpSKFzd4eYvVr57Yr4diWZYO/3PdAGDbhqJoZf/C6mRAgtVFx4Sp9q4Pr7q7wPwXZkRllVDM1lk0nR6Pp00cn7eFinJbIEFRL+5gYlOUKZQtfftfGa9ckuMIwrDXGwy6/fEtyaIT/yMpWudIPpv6hqJbmxfy7/5Cdf+1itT1/WGn0/F9XwU4pqXrQcAKP+wcUkLPqxl0JoxUYlTP+FXNdi3TgV9z7Z8z71qWWbFkBUKFhynYG+zfnqYpRlUEQoAxG6+pKOwCHlxLMQxD+dBVsGEzGDb5Lvl9PgHxDUMncgEtRqpyJGELDU6m+wxBapjq4RTdxv3+OIlOV9X6uCi3ZknSdUs3o8Tx+2H52sYKUE6hB4bX3i6v7/vVoTxDEwJMtylpK/H7so1xe/vt/L6PV6v4va3qDx+bF6yOx+NudzotFptVHMf7/fvh7fWClQAeObGxzr5HBLs7ujKjur0PnxKpAnWVoDLCJP7IXLFBvrQqEWqN0WNsSl/EmLwTNzwLP6wNDGdL68EMXj/4PRrA+mRG3cn3uM/879V5SvpT1F19nqi38x9e3V7QR+UU77jRB1P/UbIPe0feSRocUe02jY385ikYURoS9EhYT9O02+2/3CApzmaQFY+7BZnPYP990aPcTQ39OQWh+d5j8+rurnqn476dXjhdk+bYAkbAnlYRHlpW0nSnHPsS6z6jpCEeOeyi6Hha7feLTDy/5AFbgepzqBQk2lpcb5mjjAj2OTOC3kkNnqQUOlM2qfTcsYmaw5rtX/m8p53GIR73gWOQv2Ufp6fTKt5Pzoclu83w2/k8gYC12EVxYVnaNzZ0V3dyk3vyiOhKw2VJn/yK2zAF/NHdWwd4/NHoxKhaPE9UdWZsStmw9Pi1EWdw1siW8Lm09NBtLp4VbcQMtTeC9AR3bdtByQtZggIrrtuLeWMkC3NWF5yte2JwoFqu6+q6bpmQvrldOaZpmdSwhkBzH684VZ2nSAUKn09+Orx7f8c5bHICR7jIj6Zk5dM0jQZNI7ElXPNaG6rPqmS1hsIvq7eL7WmXTkDELIhaabfffxnfbjcQ8lOIIqsDnUS481XddJ9U2AQbNp/b8P6Tzpp9sghqg+yNuONZkwRQOVlNdaotrAVltaHu+o4s8eVxNXQGU/QRgMfkchP/hP9LZ5unsIXb/AfqXo0tbj7t2kd+kbbchmigpvSjtImsTpoPte6HutkdWcoP1EQ7VqLiKqLMgWzYJba17qFwz6LdbTI5vG0N1XmSZTnM8tGubj6tgD/X2X1K1A7wLk9+i4aAwCVAt4Es5Vwaei+1eCQsyMIXTtadQ0PMUoMg0F3L8f1Ong8hanXMPrqdqWX39j6T9H+MiZ9DZDVkNlwSi8i0vfvQJCtJHvssbQhMzmOyHBja59ZcC/EPyeo6le8pkDJYN4ZVOgatdDTPw+4Bpsx+PXr6KqrIavX4QWDxqDWtmh113c2IB9+GEP+YLLyF91cj7sX3Ib5GljLhtl2enuIcFrTO2UGds9hsVqTUeT8frt9eL3ksRfF3KKlNU3dZh+sZ7Xafq9F9o1MbcaP1kHsKTRF8G6T4Y7LoUFUMnVn1TytkBVxplWsjZd9Dj1AqQ3opjWBEze8Wq/j6+mm2hEBsDNNgB9zVqjoHmzCnyMV604cUD2MWHTN1sc2HGtWhNbKGLK32yhfSH1cKD1gMw0HaT3afbWHZJ/TIBiiE4cVlw6N2sfWEKiqreI6HlkXLQkiuFh96l1buybL49PaV6KOfXnqCBZEH+yCybg3lLZnFZOSDR+qfjmBCTScPVjmcJlHoQ9oeAw8az+u9Woh/SBZRq4lTxKJB3b8LsjyfR4HjnaPbJkl+pbrQgTzoEwE7qxradHpcLB83A/4kRDEWNQgHAuvGPy8VZ8oe8RjHhXq928I5rpFFY+B7eWg1Vop0M4eK2PSXQhTfiSzbcihMBguKHtAQbXJFt9K26AVWYD9v7Vm4WUNRSyE6CesSWf6LMCYRfvv3pvWILNKqYMYkNPi48hVBFonMY07n7bVaRRutXdKneAGMocBJZqTCIV/vjfLygCL1dNWnzQioF3/Sdv05OvyqNXnI0UAWzQksTLEuHuDbXex8QJZyzZ+LEFDotfzkay2xl+nr3bYEbYIeY22CbOxXjCuEqhHCGSTF3eb6ObaG/JqbB2TxNgDKCrLMGcp7Uc5NTLI67AFZRJAiXlapPABkZfUgyJqJAG7XGuY0CNQQ0tgeqy0djat1Y8hqbGBrejp/ziVzy3rghiKmFaqUWpPQR0KHoTvJ10wWtaY1TyXGig8t16R5zBKKpl/vDxmv03E3pY1RmgTBG8csD07g0iZ6FxfmGKzmI9+EqGYbnwxfvOJ9GLNEn7cg0yUP7rVjkp6k6cx792RSNJNFqbj4YihP9GXhkWdDnbeH0LGepnFgqqIapHHemdNHOpsvMW4nw3PN7KI3X39CoDd5TIqaWpGtYgVhIoISFaQoJStASTLud/nnYZWWRrKwS99jQ1/yoWXhUXQdOryvXW96YVclChpjTVPsQLccdcRuIu1Bar1grWkdozdbLE31k8v1eVJqbrXnETz3FXvRMBXApmKajWQFu+ahpRUiPScr/+WBWvVwvM0GFbMBeS7+rdIpX9ADdMeTT7GlvPOfbF4SENG0n9+1P3gwkUpwaSTLf1CMlHoPpeafLUJPVDVaqybT88uyalu7PiLrcR77gzD5ZeotXjp5HnDzuEIjep8saU4A+9VmwQsSVHloTWTRiF4ZKiytaFuU28q+KAH3FaPlnlqgII/VZMZdgH8iWTpXyc1Bq8PtKC+V6QLYXicNJI2syhv2iOfLW5mYJrJoc3VChmpiKFdESd6s4jUyJQu7Ih5WxaS1PWUzinWWZVGhzHjcrGo1stKaZNHxBA/pfK23fP8URNshbKqkFZ5Y8k4p7ZBW67lcPZTVZUNtSKvBu6HCBi7iHoSso8rEEPJzXNUPUO6o+XLOvGhBcC1Y8vbdRR3NR6OO7+huYBvVTVt/BY5o8TZUh53xHQ/0y3dNBpUbQFld8gWLMlkq4eFOoYhGbG7WQtax16rwuF1FP7jqcrLfv79PJufzoZQ02CzdcgYKuy+z6LjYxIe3ZVuxPr3PL1+wqHe0bG40UzFXj7Q579tXudmXelP86ZbIYu1r5cFQ8duCLJZ8sSOM5FoKiHbU3IlhVaa2bfyQ3+ODXRN/HAF3huR+KUzDbFZFtqKZ/VZth3MGUcXiuDwrre7QBvV9TzVfABBtLdER4qSKMIB6es6yXREgpQRLM4xmPMjW7E7upv4XoPLne7fIqii8S5lbEutv1voxqtgXUVDDc2xBFmu51nrXfMNELkx5rMuN1xGOmORhCyvrRq5o5yPYPu44o0qF+5fR4VPK/IIHbL7xJfhLnthpR6aeCQyxSJALU7YdqRzPaZFUbxIaIsBwYareZd/CEU952MK6e1iRVYrVioQJcYUfSssY1hRzOIASmjXhJ9fXpyyK+bwvNYiHruFBIWGYiugseYUAo6G8/nSw0GqpePwiDubssDW1hqEuH8pdXWSyPMUbeY/hUFgl1gKyWca0hruZMWMfzzqavRqg7lTsJSE/H6vzOcmGKs2GT1ngaZW2HA2i+O2yPSxEQj76xQ8wC2o4dya0Wu5mIhblVsiKpAbhK3rxXNP6tXXKXJqGRf5Q/OXmRAAKl/tx+OPwdp7Gbd0d/ihb1qCfrInIiieH5eWTKqsgwjw25JisXbYFWunUXanoxedVkVh0z7MftZimoUqupWjsdfirQrPl60tFalXeS0E8rPyHGVT9Rhg+qd8L4MDc3KrXDrejcltDm/Szdb9R6av9/m2dzW6DKxug7AfwOhn3+FqdtqdDm/r8apcOHQ+W5Kv2YDzL1rfBt+KHg8XgNsvgza5YNHErS2GEprD6oJulBQo/nwtzYMM0r5tptIZCgl8+csrPQjNd12xe2DAdy3V1M28QaPBaL71WTP0nQx3eeoUvuuIFg+3A77qu5eTpwz3mnaEw7A166aC84yiZPdiuOX1CLixDMwKyQcwXYbW395/k588EDhwzCAKylw3CPEBsZqN72Sx9WAT5MB0TCQ914Wv77zoRbbfFjp5b+8nP40nASiC2hhTb4DW+D74jFsSyq0LS4dBXzb/x8Inn59Jv1/kNT24o1n5Ht4aQXfA0LcbxHorFA9mI77kYFQCplcyy6aP1q6fAzwVeehAxRAiVXNJ/oPIaKnztT1f9cP3GIc1LPCXUM2L8t54Ac9/yX1yzjXPe25IVuAqNZK6jtNuO22rb/BhtwCo4T22DFjmDVrroPhMPitNu2ep5/0oHYtUx/Hq492qLJhj8y6NhgFymdLfKBw2+ZmRPTIVNUILiyATVjH7Ith6BdIwCG6LoAATP2rG5NgcxRfaaQ6W7xNo3ss3mwtvN5gy9OgvUHaMe0I1x2I1RdN8BCJa1JSYdqhjUg+rbibea/79y6wEvIobplJyaOx6FL+7/e1hu255W1Q8NO6OfDDzkyxlduouF2D5delZTdAygrEvnfjtE09GMFoGkjUhKPHMM2tSNiAYNTlTVQ/Wzc/ZoNzLNrkuKobC7QtO7PXBQH9TKoSC5bV+yoGVnCG+7adk4sB0QQREIlKI8jfGicxjeouNq/+1XnC10SGzoxR36TMkaMr0fp48WNtzcQG1ZEdjOmZJIFooSi6hwUMqkFowNstkWTMvKBh0rIQuxLMhh1TS+Z3cbd5xBQ2tb1z3T98hTAr4aGiwKPxTGjoSRbOiJM2EWa+Wkx/jQVn7NHyawL4OI9yKg4Psf23pKyDKMFSFLz9DYBP+bBlANRUQkKzFSoRbsZ6QbpxyAM7uNDpoJY0ZKHq5BhZd3PmoBscWm6iBQTwfPR8jb18nyzD3JhHSnJDjg++T83zdwQS1QydnD74U2fftFf8XBy4W3vk5GbGmaWdYK3FB3Q/AzsKnU976hOXE6awYsdHqbH3S/mwou+j1JVLooc9sPRf42j4IsDAy5h7EFX4hGqgCX69iHknWimCHy4hpZH54KA2mf8rA1wL/8KDQO0NVZ0zaMICvMsrC7d1vAE3rVoxkEr5mlorMGfqN2wK10SJxQZqAWcUBahsfUeOgBb0aW4s1cSAkDFciaJQOB7o4tmKY0uTST1VKyXkFNjwwjK+U3clqaHpamJ+xR4v/6vw4SHLvfh/Asz0oRs8BaDGICfhcd5+E5gNgyjEMfCuvpfLSjhwLIMjQtyrBK/lwO7eJgsDe+JKqcUegDt6l6vx4I1kgOP++7j8lqufnuv3wfPDkXpltkizLE/CGU3KuvKNggMIWkur85PGZtUPp9gLqkFx0cUfcbIQmcMokCb8kbASebntTZskdrDychGlvUMnszThbYJ/FgalmDw1LgvUdan+YYpR9YVg5IjbzuMZTKMQF/VxdvvwDAzev2sl2QxpzTBcuywbKGwMrUZJvbx5Ao9TVK0NKzZt3LdrtN0KBD/ZB2p0jcsDbkju0Fus0XjCxsAFnalZEVOZ6An5DoGEzJZqKfkoWXRGgddycomMnJ3+VFs1x2oNz4kj5AJ505GHtgO5kOOgvIWsAd6qBMzwZbbb5qtJWX+hijVQBKh2RCgzTvSHdK2Vh0QRbEBeSDFZC1ntNNtMQNf0AWmEflAD+/oRW8Gs3/k6LrCDLHR2SZ9+dfIYSNs137lxJUAtBARSSJLDZ45DEA1wPZCUIqBP0EL+jiBGj7YwAigN4WfNYnzBGHapkpaNLRC6EUrkEdmh5/C4llnbnbhgXyF4h9+UM3tM5ENoBuuGDbJLJBVa3g6/5GnZ6wlRrwmHA6CsMoCKZhT6WvxwHRYFSuQkReakbIEh1ZDDorWxbUgwilt7A3sesHz33lo22iHPgjslokUnHp/mv4+Bg674Brvm+3VFIGB77KXhNmPJ8JSpfkaZWLS9v3NZBKbB+66x/2fEu61SEYjs6Wfx4NO567QuN552NgpfM3l8K/F+46NKS4jFCiL6/n3sPd0hIMeJnF5+ysLNNBOv1XWc1fAXYVzQU/NVX1wfkOCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJiefi/2MxhCeHJ9IMAAAAAElFTkSuQmCC" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="BURAQ AIR")
                                            <div class="f-img">
                                                <img src="https://cdn.worldvectorlogo.com/logos/buraq-air.svg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @elseif($tk[2]=="RAHILA AIR")
                                            <div class="f-img">
                                                <img src="https://www.ch-aviation.com/portal/stock/4222.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                        @else
                                            <div class="f-img">
                                                <img src="images/flight-1.jpg" class="img-responsive" alt="flight-img" />
                                            </div><!-- end f-list-img -->
                                            @endif

                                    </a>
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="duration"><i class="fa fa-clock-o"></i><span>{{$tk[2]}}</span></li>
                                        <li class="price" style="font-size:10px;">{{$tk[4]}}<span class="divider">|</span><span class="pkg">2 Stay</span></li>
                                    </ul>
                                    <ul class="list-unstyled flight-timing">
                                        <li><span><i class="fa fa-plane"></i></span><span class="date">{{date("Y/m/d")}} </span>(8:40 PM)</li>
                                        <li><span><i class="fa fa-plane"></i></span><span class="date">{{date("Y/m/d")}} </span>(8:40 PM)</li>
                                    </ul>
                                </div><!-- end f-list-img -->

                                <div class="list-info f-list-info">
                                    <h3 class="block-title"><a href="flight-detail-left-sidebar.html">{{$tk[0]}}</a></h3>
                                    <br>
                                    <ul>
                                    <li><span style="color:black;">Num. Vol:</span> {{$tk[3]}} </li>
                                       <li> <span style="color:black;">Heure prévue de decollage:</span>{{$tk[1]}}</li>


                                    </ul>
                                    <a href="flight-detail-left-sidebar.html" class="btn btn-orange">View More</a>
                                </div><!-- end f-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end f-list-block -->
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