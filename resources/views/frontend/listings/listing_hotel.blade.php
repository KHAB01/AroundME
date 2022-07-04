@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | </title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')


    <div class="clearfix"></div>
    <div id="utf_listing_gallery_part" class="utf_listing_section">
        <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
            @foreach (explode(',', $listing->gallery) as $image)
                <a href="{{$image}}" data-background-image="{{$image}}" class="item utf_gallery"></a>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row utf_sticky_main_wrapper">
            <div class="col-lg-8 col-md-8">
                <div id="titlebar" class="utf_listing_titlebar">
                    <div class="utf_listing_titlebar_title">
                        <h2>{{$listing->listing_title}}<span class="listing-tag">{{$listing->tags}}</span></h2>
                        <span> <a href="#utf_listing_location" class="listing-address"> <i class="sl sl-icon-location"></i> {{$listing->address}} </a> </span>
                        <span class="call_now"><i class="sl sl-icon-phone"></i>{{$listing->phone}}</span>
                        <div class="utf_star_rating_section" data-rating="4.5">
                            <div class="utf_counter_star_rating">(4.5) / (14 avis)</div>
                        </div>
                        <ul class="listing_item_social">
                            <li><a href="#"><i class="fa fa-bookmark"></i> Signet</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Ajouter Avis</a></li>
                            <li><a href="#"><i class="fa fa-flag"></i> En Vedette</a></li>
                            <li><a href="#"><i class="fa fa-share"></i> Partager</a></li>
                            @if($listing->status='open')

                                <li><a href="#" class="now_open">Ouvert maintant</a></li>
                            @else
                                <li><a href="#" class="now-closed">Fermé</a></li>
                            @endif


                        </ul>
                    </div>
                </div>
                <div id="utf_listing_overview" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Description</h3>
                    <p>{!!$listing->description!!}</p>
                    <div id="utf_listing_tags" class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                        <a href="#"><i class="sl sl-icon-phone" aria-hidden="true"></i>{{$listing->phone}}</a>
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>{{$listing->email}}</a>
                        <a href="#"><i class="sl sl-icon-globe" aria-hidden="true"></i> www.{{$listing->title}}.com</a>
                    </div>
                    <div class="social-contact">
                        <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                        <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                        <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                    </div>
                </div>

                <div id="utf_listing_video" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Villa Videos</h3>
                    <div class="detail-video">
                        <iframe width="835" height="420" src="https://www.youtube.com/embed/9o9TIwHtOJU" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div id="utf_listing_tags" class="utf_listing_section listing_tags_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40">Tags</h3>
                    @foreach (explode(',', $listing->keywords) as $stop)
                        <a href="#"><i class="fa fa-tag" aria-hidden="true"></i>{{$stop}}</a>
                    @endforeach
                </div>

                <div class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Tarifs</h3>
                    <div class="show-more">
                        <div class="utf_pricing_list_section">
                            <h4>Choisir pack</h4>
                            <ul>
                                <li>
                                    <h5>Basic Pass <sub class="ppl-offer label-light-success">20% Off</sub></h5>
                                    <p><strong>Max :</strong> 1 Personne</p>
                                    <span>$80</span>
                                </li>
                                <li>
                                    <h5>Standard Pass <sub class="ppl-offer label-light-danger">10% Off</sub></h5>
                                    <p><strong>Max :</strong> 2 Personnes</p>
                                    <span>$120</span>
                                </li>
                                <li>
                                    <h5>Golden Pass <sub class="ppl-offer label-light-success">10% Off</sub></h5>
                                    <p><strong>Max :</strong> 3 Personnes</p>
                                    <span>$220</span>
                                </li>
                                <li>
                                    <h5><strong>Tatel Price</strong></h5>
                                    <span><strong>$440</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="file:///Users/khaoula/Downloads/business-listing-master-1/listings_activities.html#" class="show-more-button" data-more-title="Show More" data-less-title="Show Less"><i class="fa fa-angle-double-down"></i></a>
                </div>

                <div id="utf_listing_amenities" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Caractéristiques</h3>
                    <ul class="utf_listing_features checkboxes margin-top-0">
                        @foreach (explode(',', $listing->features) as $stop)
                            <li>{{$stop}}</li>
                        @endforeach
                    </ul>
                </div>

                <div id="utf_listing_faq" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">FAQ's</h3>
                    <div class="style-2">
                        <div class="accordion">
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (1) Est ce un endroit familiale ?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (2) Est ce que c'est un endroit ideal pour travailler ou étudier ?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (3) Est ce que le pass vaccinale est obligatoire ?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="utf_listing_location" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-60 margin-bottom-40">Localisation</h3>
                    <div id="utf_single_listing_map_block">
                        <div id="utf_single_listingmap" data-latitude="{{$listing->latitude}}" data-longitude="{{$listing->longitude}}" data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="utf_street_view_btn">Street View</a>
                    </div>
                </div>
                <div id="utf_listing_reviews" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-75 margin-bottom-20">Avis <span>(08)</span></h3>
                    <div class="clearfix"></div>
                    <div class="reviews-container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div id="review_summary">
                                    <strong>4.5</strong>
                                    <em>Superb avis</em>
                                    <small>Out of 15 avis</small>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Quality</strong></small></div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>77</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Space</strong></small></div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>15</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Price</strong></small></div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>18</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Service</strong></small></div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>10</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Location</strong></small></div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>05</strong></small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments utf_listing_reviews">
                        <ul>
                            <li>
                                <div class="avatar"><img src="images/client-avatar1.jpg" alt="" /></div>
                                <div class="utf_comment_content">
                                    <div class="utf_arrow_comment"></div>
                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                    <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                    <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span> </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar"><img src="images/client-avatar2.jpg" alt="" /> </div>
                                <div class="utf_comment_content">
                                    <div class="utf_arrow_comment"></div>
                                    <div class="utf_star_rating_section" data-rating="4"></div>
                                    <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                    <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span> </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar"><img src="images/client-avatar3.jpg" alt="" /> </div>
                                <div class="utf_comment_content">
                                    <div class="utf_arrow_comment"></div>
                                    <div class="utf_star_rating_section" data-rating="4"></div>
                                    <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span> </div>
                                    <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar"><img src="images/client-avatar1.jpg" alt="" /></div>
                                <div class="utf_comment_content">
                                    <div class="utf_arrow_comment"></div>
                                    <div class="utf_star_rating_section" data-rating="4.5"></div>
                                    <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span> </div>
                                    <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                    <div class="review-images utf_gallery_container">
                                        <a href="images/review-image-01.jpg" class="utf_gallery"><img src="images/review-image-01.jpg" alt=""></a>
                                        <a href="images/review-image-02.jpg" class="utf_gallery"><img src="images/review-image-02.jpg" alt=""></a>
                                        <a href="images/review-image-03.jpg" class="utf_gallery"><img src="images/review-image-03.jpg" alt=""></a>
                                        <a href="images/review-image-01.jpg" class="utf_gallery"><img src="images/review-image-01.jpg" alt=""></a>
                                        <a href="images/review-image-02.jpg" class="utf_gallery"><img src="images/review-image-02.jpg" alt=""></a>
                                        <a href="images/review-image-03.jpg" class="utf_gallery"><img src="images/review-image-03.jpg" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar"><img src="images/client-avatar3.jpg" alt="" /> </div>
                                <div class="utf_comment_content">
                                    <div class="utf_arrow_comment"></div>
                                    <div class="utf_star_rating_section" data-rating="4"></div>
                                    <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span> </div>
                                    <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="utf_pagination_container_part margin-top-30">
                                <nav class="pagination">
                                    <ul>
                                        <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                        <li><a href="#" class="current-page">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="utf_add_review" class="utf_add_review-box">
                    <h3 class="utf_listing_headline_part margin-bottom-20">Ajoutez votre avis</h3>
                    <span class="utf_leave_rating_title">Votre adresse email ne sera pas publiée.</span>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="clearfix"></div>
                            <div class="utf_leave_rating margin-bottom-30">
                                <input type="radio" name="rating" id="rating-1" value="1"/>
                                <label for="rating-1" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-2" value="2"/>
                                <label for="rating-2" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-3" value="3"/>
                                <label for="rating-3" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-4" value="4"/>
                                <label for="rating-4" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-5" value="5"/>
                                <label for="rating-5" class="fa fa-star"></label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="add-review-photos margin-bottom-30">
                                <div class="photoUpload"> <span>Upload Photo <i class="sl sl-icon-arrow-up-circle"></i></span>
                                    <input type="file" class="upload" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="utf_add_comment" class="utf_add_comment">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nom:</label>
                                    <input type="text" placeholder="Name" value=""/>
                                </div>
                                <div class="col-md-4">
                                    <label>Email:</label>
                                    <input type="text" placeholder="Email" value=""/>
                                </div>
                                <div class="col-md-4">
                                    <label>Commentaire:</label>
                                    <input type="text" placeholder="Subject" value=""/>
                                </div>
                            </div>
                            <div>
                                <label>Avis:</label>
                                <textarea cols="40" placeholder="Your Message..." rows="3"></textarea>
                            </div>
                        </fieldset>
                        <button class="button">Poster Avis</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">
                <div class="verified-badge with-tip margin-bottom-30" data-tip-content="Listing has been verified and belongs business owner or manager."> <i class="sl sl-icon-check"></i> Maintenant disponible</div>
                <div class="utf_box_widget booking_widget_box">
                    <h3><i class="fa fa-calendar"></i> Reserver

                    </h3>
                    <div class="row with-forms margin-top-0">
                        <div class="col-lg-12 col-md-12 select_date_box">
                            <input type="text" id="date-picker" placeholder="Sélectionner une date" readonly="readonly">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel-dropdown time-slots-dropdown">
                                <a href="#">Choisissez le créneau horaire...</a>
                                <div class="panel-dropdown-content padding-reset">
                                    <div class="panel-dropdown-scrollable">
                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-1">
                                            <label for="time-slot-1">
                                                <strong><span>1</span> : 8:00 AM - 8:30 AM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-2">
                                            <label for="time-slot-2">
                                                <strong><span>2</span> : 8:30 AM - 9:00 AM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-3">
                                            <label for="time-slot-3">
                                                <strong><span>3</span> : 9:00 AM - 9:30 AM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-4">
                                            <label for="time-slot-4">
                                                <strong><span>4</span> : 9:30 AM - 10:00 AM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-5">
                                            <label for="time-slot-5">
                                                <strong><span>5</span> : 10:00 AM - 10:30 AM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-6">
                                            <label for="time-slot-6">
                                                <strong><span>6</span> : 13:00 PM - 13:30 PM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-7">
                                            <label for="time-slot-7">
                                                <strong><span>7</span> : 13:30 PM - 14:00 PM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-8">
                                            <label for="time-slot-8">
                                                <strong><span>8</span> : 14:00 PM - 14:30 PM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-9">
                                            <label for="time-slot-9">
                                                <strong><span>9</span> : 15:00 PM - 15:30 PM</strong>
                                            </label>
                                        </div>

                                        <div class="time-slot">
                                            <input type="radio" name="time-slot" id="time-slot-10">
                                            <label for="time-slot-10">
                                                <strong><span>10</span> : 16:00 PM - 16:30 PM</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel-dropdown">
                                <a href="#">Invités <span class="qtyTotal" name="qtyTotal">1</span></a>
                                <div class="panel-dropdown-content">
                                    <div class="qtyButtons">
                                        <div class="qtyTitle">Adults</div>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <div class="qtyTitle">Enfants</div>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="with-forms margin-top-0">
                            <div class="col-lg-12 col-md-12">
                                <select class="utf_chosen_select_single" >
                                    <option label="Select Time">Sélectionnez l'heure</option>
                                    <option>Lunch</option>
                                    <option>Dinner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <a href="listing_booking.html" class="utf_progress_button button fullwidth_block margin-top-5">Demande de réservation</a>
                    <button class="like-button add_to_wishlist"><span class="like-icon"></span> Ajouter aux favories</button>
                    <div class="clearfix"></div>
                </div>
                <div class="opening-hours margin-top-35">
                    <div class="utf_coupon_widget" style="background-image: url(images/coupon-bg-1.jpg);">
                        <div class="utf_coupon_overlay"></div>
                        <a href="#" class="utf_coupon_top">
                            <h3>Réservez maintenant et obtenez 50% de réduction</h3>
                            <div class="utf_coupon_expires_date">Date d'expiration 05/08/2019</div>
                            <div class="utf_coupon_used"><strong>Comment utiliser?</strong> Montrez-nous simplement ce coupon sur un écran</div>
                        </a>
                        <div class="utf_coupon_bottom">
                            <p>Code promo</p>
                            <div class="utf_coupon_code">DL76T</div>
                        </div>
                    </div>
                </div>
                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-phone"></i> Informations de contact</h3>
                    <div class="utf_hosted_by_user_title"> <a href="#" class="utf_hosted_by_avatar_listing"><img src="{{$listing->logo}}" alt=""></a>
                        <h4><a href="#">{{$listing->name}}</a><span>Poster le {{ date('Y-m-d', strtotime($listing->created_at)) }}</span>
                            <span><i class="sl sl-icon-location"></i>{{$listing->city}}</span>
                        </h4>
                    </div>
                    <ul class="utf_social_icon rounded margin-top-10">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <ul class="utf_listing_detail_sidebar">
                        <li><i class="sl sl-icon-map"></i>{{$listing->address}}</li>
                        <li><i class="sl sl-icon-phone"></i>{{$listing->phone}}</li>
                        <li><i class="sl sl-icon-globe"></i> <a href="#">www.{{$listing->title}}.com</a></li>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:{{$listing->email}}">{{$listing->email}}</a></li>
                    </ul>
                </div>

                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-folder-alt"></i> Categories</h3>
                    <ul class="utf_listing_detail_sidebar">
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Travel</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Nightlife</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Fitness</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Real Estate</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Restaurant</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Dance Floor</a></li>
                    </ul>
                </div>
                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-clock"></i> Horaires d'ouverture</h3>
                    <ul>
                        <li>Lundi <span>{{$listing->monday_open}} - {{$listing->monday_closed}}</span></li>
                        <li>Mardi <span>{{$listing->Tuesday_open}} - {{$listing->Tuesday_closed}}</span></li>
                        <li>Mercredi <span>{{$listing->Wednesday_open}} - {{$listing->Wednesday_closed}}</span></li>
                        <li>Jeudi <span>{{$listing->Thursday_open}} - {{$listing->Thursday_closed}}</span></li>
                        <li>Vendredi <span>{{$listing->Friday_open}} - {{$listing->Friday_closed}}</span></li>
                        <li>Samedi <span>{{$listing->Saturday_open}} - {{$listing->Saturday_closed}}</span></li>
                        <li>Dimanche <span>{{$listing->Sunday_open}} - {{$listing->Sunday_closed}}</span></li>
                    </ul>
                </div>

                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-info"></i>Information supplémentaires</h3>
                    <ul>
                        <li>À emporter: <span>Oui</span></li>
                        <li>Livraison: <span>Oui</span></li>
                        <li>Toilettes neutres: <span>Oui</span></li>
                        <li>A une table de billard: <span>Oui</span></li>
                        <li>Toilettes non genrées: <span>Oui</span></li>
                        <li>Service de serveur : <span>Oui</span></li>
                    </ul>
                </div>
                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-envelope-open"></i> Formulaire</h3>
                    <form id="contactform">
                        <div class="row">
                            <div class="col-md-12">
                                <input name="name" type="text" placeholder="Nom" required="">
                            </div>
                            <div class="col-md-12">
                                <input name="email" type="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <input name="phone" type="text" placeholder="Telephone" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Votre Message" required=""></textarea>
                            </div>
                        </div>
                        <input type="submit" class="submit button" id="submit" value="Contacter">
                    </form>
                </div>
                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-info"></i> Google AdSense</h3>
                    <span><img src="images/google_adsense.jpg" alt="" /></span>
                </div>
                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-phone"></i>Contact rapide pour vous aider ?</h3>
                    <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                    <ul class="utf_social_icon rounded">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <a class="utf_progress_button button fullwidth_block margin-top-5" href="contact.html">Contacter Nous</a>
                </div>
                <div class="utf_box_widget listing-share margin-top-35 margin-bottom-40 no-border">
                    <h3><i class="sl sl-icon-pin"></i> Ajouter aux favoris</h3>
                    <span>1275 personnes ont ajouté cette entreprise à leurs favoris</span>
                    <button class="like-button"><span class="like-icon"></span> Contact rapide pour vous aider ?</button>
                    <ul class="utf_social_icon rounded margin-top-35">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="utf_box_widget opening-hours review-avg-wrapper margin-top-35">
                    <h3><i class="sl sl-icon-star"></i>  Note Moyenne </h3>
                    <div class="box-inner">
                        <div class="rating-avg-wrapper text-theme clearfix">
                            <div class="rating-avg">4.8</div>
                            <div class="rating-after">
                                <div class="rating-mode">/5 Moyenne</div>

                            </div>
                        </div>
                        <div class="ratings-avg-wrapper">
                            <div class="ratings-avg-item">
                                <div class="rating-label">Quality</div>
                                <div class="rating-value text-theme">5.0</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Location</div>
                                <div class="rating-value text-theme">4.5</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Space</div>
                                <div class="rating-value text-theme">3.5</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Service</div>
                                <div class="rating-value text-theme">4.0</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Price</div>
                                <div class="rating-value text-theme">5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block padding-top-20 padding-bottom-50">
        <div class="container">
            <div class="row slick_carousel_slider">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-25">Etablissements Similaires</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="simple_slick_carousel_block utf_dots_nav">
                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span> <span class="featured_tag">Featured</span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                                <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Chontaduro Barcelona</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-02.jpg" alt=""> <span class="tag"><i class="im im-icon-Electric-Guitar"></i> Events</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                            </div>
                                            <h3>The Lounge & Bar</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-03.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                        <span class="utf_closed">Closed</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                            </div>
                                            <h3>Westfield Sydney</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-04.jpg" alt=""> <span class="tag"><i class="im im-icon-Dumbbell"></i> Fitness</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                                <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Ruby Beauty Center</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-05.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                        <span class="utf_closed">Closed</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                            </div>
                                            <h3>UK Fitness Club</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"> <img src="images/utf_listing_item-06.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>
                                                <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Fairmont Pacific Rim</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Footer -->

    <div id="bottom_backto_top"><a href="#"></a></div>


@endsection


@section('custom_js')
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
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="/scripts/infobox.min.js"></script>
    <script src="/scripts/markerclusterer.js"></script>
    <script src="/scripts/maps.js"></script>
    <link href="css/datedropper.css" rel="stylesheet" type="text/css">
    <script src="/scripts/datedropper.js"></script>
    <script src="/scripts/quantityButtons.js"></script>
    <script src="/scripts/moment.min.js"></script>
    <script src="/scripts/daterangepicker.js"></script>
    <script>
        $(function() {
            $('#date-picker').daterangepicker({
                "opens": "left",
                // singleDatePicker: true,
                isInvalidDate: function(date) {
                    var disabled_start = moment('09/02/2018', 'DD/MM/YYYY');
                    var disabled_end = moment('09/06/2018', 'DD/MM/YYYY');
                    return date.isAfter(disabled_start) && date.isBefore(disabled_end);
                }
            });
        });

        $('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
            $('.daterangepicker').addClass('calendar-animated');
        });
        $('#date-picker').on('show.daterangepicker', function(ev, picker) {
            $('.daterangepicker').addClass('calendar-visible');
            $('.daterangepicker').removeClass('calendar-hidden');
        });
        $('#date-picker').on('hide.daterangepicker', function(ev, picker) {
            $('.daterangepicker').removeClass('calendar-visible');
            $('.daterangepicker').addClass('calendar-hidden');
        });

        function close_panel_dropdown() {
            $('.panel-dropdown').removeClass("active");
            $('.fs-inner-container.content').removeClass("faded-out");
        }
        $('.panel-dropdown a').on('click', function(e) {
            if ($(this).parent().is(".active")) {
                close_panel_dropdown();
            } else {
                close_panel_dropdown();
                $(this).parent().addClass('active');
                $('.fs-inner-container.content').addClass("faded-out");
            }
            e.preventDefault();
        });
        $('.panel-buttons button').on('click', function(e) {
            $('.panel-dropdown').removeClass('active');
            $('.fs-inner-container.content').removeClass("faded-out");
        });
        var mouse_is_inside = false;
        $('.panel-dropdown').hover(function() {
            mouse_is_inside = true;
        }, function() {
            mouse_is_inside = false;
        });
        $("body").mouseup(function() {
            if (!mouse_is_inside) close_panel_dropdown();
        });
    </script>
@endsection
