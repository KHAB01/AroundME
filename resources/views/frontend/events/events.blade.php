@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Etablissements</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, evenement and restaurant listing.">
@endsection

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing_filter_block margin-top-30">
                    <div class="col-md-3 col-xs-3">
                        <div class="utf_layout_nav"> <a href="listings_grid_full_width.html" class="grid"><i class="fa fa-th"></i></a> <a href="#" class="list active"><i class="fa fa-align-justify"></i></a> </div>
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Destination</a>
                            <div class="utf_panel_dropdown-content">
                                <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                                <div class="panel-buttons">
                                    <button class="panel-apply">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
                                    <option>Sort by Listing</option>
                                    <option>Latest Listings</option>
                                    <option>Popular Listings</option>
                                    <option>Price (Low to High)</option>
                                    <option>Price (High to Low)</option>
                                    <option>Highest Reviewe</option>
                                    <option>Lowest Reviewe</option>
                                    <option>Newest Listing</option>
                                    <option>Oldest Listing</option>
                                    <option>Random Listings</option>
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Categories:" class="utf_chosen_select_single">
                                    <option>Categories</option>
                                    <option>Restaurant</option>
                                    <option>Health</option>
                                    <option>evenement</option>
                                    <option>Real Estate</option>
                                    <option>Fitness</option>
                                    <option>Shopping</option>
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item utf_search_map_section">
                                <ul>
                                    <li><a class="utf_common_button" href="#"><i class="fa fa-dot-circle-o"></i>Near Me</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="utf_listing_item-container list-layout"> <a href="listings_single_page_1.html" class="utf_listing_item">
                                <div class="utf_listing_item-image">
                                    <img src="images/ev1.jpg" alt="">
                                    <span class="like-icon"></span>
                                    <span class="tag"><i class="im im-icon-Hotel"></i> evenement</span>
                                    <span class="featured_tag">Featured</span>
                                    <div class="utf_listing_prige_block utf_half_list">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                </div>

                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_item-inner">
                                        <h3>Chontaduro Barcelona</h3>
                                        <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                        <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="utf_listing_item-container list-layout"> <a href="listings_single_page_1.html" class="utf_listing_item">
                                <div class="utf_listing_item-image">
                                    <img src="images/ev2.jpg" alt="">
                                    <span class="like-icon"></span>
                                    <span class="tag"><i class="im im-icon-Hotel"></i> evenement</span>
                                    <div class="utf_listing_prige_block utf_half_list">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                </div>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_item-inner">
                                        <h3>The Lounge & Bar</h3>
                                        <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                        <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        <div class="utf_star_rating_section" data-rating="5.0">
                                            <div class="utf_counter_star_rating">(5)</div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="utf_listing_item-container list-layout"> <a href="listings_single_page_1.html" class="utf_listing_item">
                                <div class="utf_listing_item-image">
                                    <img src="images/ev3.jpg" alt="">
                                    <span class="like-icon"></span>
                                    <span class="tag"><i class="im im-icon-Hotel"></i> evenement</span>
                                    <div class="utf_listing_prige_block utf_half_list">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                </div>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_item-inner">
                                        <h3>Westfield Sydney</h3>
                                        <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                        <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        <div class="utf_star_rating_section" data-rating="2.0">
                                            <div class="utf_counter_star_rating">(2.0)</div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="utf_listing_item-container list-layout"> <a href="listings_single_page_1.html" class="utf_listing_item">
                                <div class="utf_listing_item-image">
                                    <img src="images/ev5.jpg" alt="">
                                    <span class="like-icon"></span>
                                    <span class="tag"><i class="im im-icon-Hotel"></i> evenement</span>
                                    <div class="utf_listing_prige_block utf_half_list">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                </div>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_item-inner">
                                        <h3>UK Fitness Club</h3>
                                        <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                        <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_pagination_container_part margin-top-20 margin-bottom-75">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('custom_js')
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="scripts/infobox.min.js"></script>
    <script src="scripts/markerclusterer.js"></script>
    <script src="scripts/maps.js"></script>
@endsection


