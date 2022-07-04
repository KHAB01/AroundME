@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Confirmation</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')


        <div class="clearfix"></div>

        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Prix</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/business">Acceuil</a></li>
                                <li>Prix</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="fullwidth_block margin-top-0 padding-top-0 padding-bottom-50" data-background-color="#fff">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-20">Choisissez votre forfait<span>Choisissez le forfait qui vous conviens le mieux.</span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="utf_pricing_container_block margin-top-30 margin-bottom-30">
                        <div class="plan featured col-md-4 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Basique</h3>
                                <span class="value">500 MAD<span>/Par Mois</span></span> <span class="period">Parfait pour les petites entreprises</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>Listing basique</li>
                                    <li>Customiser votre page (en
                                        ajoutant des photos dans la
                                        galerie, logo, coordonnées)</li>
                                    <li>Publicité de 3 jours sur le fil
                                        d’actualité</li>
                                    <li>24/7 Support</li>

                                </ul>
                                <a class="button border" href="/pricing/basique"><i class="sl sl-icon-basket"></i> Commandez</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-4 col-sm-6 col-xs-12 active">
                            <div class="utf_price_plan">
                                <h3>Silver</h3>
                                <span class="value">1700 MAD<span>/Par Mois</span></span> <span class="period">Parfait pour les entreprises désirant recevoir des réservations</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>Listing avec bouton de réservation</li>
                                    <li>Customiser votre page (en ajoutant des photos dans la galerie, logo, coordonnées)</li>
                                    <li>Publicité de 7 jours sur le fil d’actualité</li>
                                    <li>Afficher votre publication dans la page des concurrents pour 3 jours</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button" href="/pricing/silver"><i class="sl sl-icon-basket"></i> Commandez</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-4 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Gold</h3>
                                <span class="value">2300 MAD<span>/Par Mois</span></span> <span class="period">Parfait pour les entreprises désirant être en contact avec leurs clients</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>Listing avec bouton de réservation</li>
                                    <li>Fonctionnalité d’échange de message avec les clients</li>
                                    <li>Customiser votre page (en ajoutant des photos dans la galerie, logo, coordonnées, site web, section contacter nous)</li>
                                    <li>Enlever les Ads des concurrents de leur page.</li>
                                    <li>Publicité de 14 jours sur le fil d’actualité</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="/pricing/gold"><i class="sl sl-icon-basket"></i> Commandez</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-4 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Pay per clic</h3>
                                <span class="value"><span></span></span>
                                <span class="period">Pour des tarifs flexibles</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>Listing avec bouton de réservation</li>
                                    <li>Customiser votre page (en ajoutant des photos dans la galerie, logo, coordonnées, site web, section contacter nous)</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="/pricing/gold"><i class="sl sl-icon-basket"></i> Commandez</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>




@endsection
