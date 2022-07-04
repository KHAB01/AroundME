@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Contact</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')



        <div class="clearfix"></div>

        <!-- Content -->
        <div class="utf_contact_map margin-bottom-70">
            <div id="utf_single_listing_map_block">
                <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931" data-map-icon="im im-icon-Map2"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section id="contact" class="margin-bottom-70">
                        <h4><i class="sl sl-icon-phone"></i> Contacter Nous</h4>
                        <form id="contactform">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Nom" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Prenom" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="email" placeholder="Email" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="subject" type="text" placeholder="Sujet" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <input type="submit" class="submit button" id="submit" value="Envoyer" />
                        </form>
                    </section>
                </div>

                <div class="col-md-4">
                    <div class="utf_box_widget margin-bottom-70">
                        <h3><i class="sl sl-icon-map"></i> Informations</h3>
                        <div class="utf_sidebar_textbox">
                            <ul class="utf_contact_detail">
                                <li><strong>Phone: </strong> <span>+ 212 245 01540</span></li>
                                <li><strong>Web: </strong> <span><a href="#">www.aroundme.ma</a></span></li>
                                <li><strong>E-Mail: </strong> <span><a href="mailto:info@aroundme.com">info@aroundme.ma</a></span></li>
                                <li><strong>Address: </strong> <span>Agadir.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="utf_cta_area_item utf_cta_area2_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_subscribe_block clearfix">
                            <div class="col-md-8 col-sm-7">
                                <div class="section-heading">
                                    <h2 class="utf_sec_title_item utf_sec_title_item2">S'inscrire à la Newsletter!</h2>
                                    <p class="utf_sec_meta">
                                        Abonnez-vous pour obtenir les dernières mises à jour et informations.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <span class="la la-envelope-o"></span>
                                        <input class="form-control" type="email" placeholder="Enter your email" required="">
                                        <button class="utf_theme_btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

@section('custom_js')
    <!-- Scripts -->
    <script src="/scripts/jquery-3.4.1.min.js"></script>
    <script src="/scripts/chosen.min.js"></script>
    <script src="/scripts/slick.min.js"></script>
    <script src="/scripts/rangeslider.min.js"></script>
    <script src="/scripts/magnific-popup.min.js"></script>
    <script src="/scripts/jquery-ui.min.js"></script>
    <script src="/scripts/mmenu.js"></script>
    <script src="/scripts/tooltips.min.js"></script>
    <script src="/scripts/color_switcher.js"></script>
    <script src="/scripts/jquery_custom.js"></script>

    <!-- Style Switcher -->
    <div id="color_switcher_preview">
        <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>
        <div>
            <ul class="colors" id="color1">
                <li><a href="#" class="stylesheet"></a></li>
                <li><a href="#" class="stylesheet_1"></a></li>
                <li><a href="#" class="stylesheet_2"></a></li>
                <li><a href="#" class="stylesheet_3"></a></li>
                <li><a href="#" class="stylesheet_4"></a></li>
                <li><a href="#" class="stylesheet_5"></a></li>
            </ul>
        </div>
    </div>

    <!-- Maps -->
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="/scripts/infobox.min.js"></script>
    <script src="/scripts/markerclusterer.js"></script>
    <script src="/scripts/maps.js"></script>
@endsection
