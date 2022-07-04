@extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Add Listing</title>

@endsection

@section('content')

    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
        <div class="utf_dashboard_navigation js-scrollbar">
            <div class="utf_dashboard_navigation_inner_block">
                <ul>
                    <li><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                    <li><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-layers"></i> My Listings</a>
                        <ul>
                            <li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
                            <li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
                            <li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>
                    <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
                    <li class="active">
                        <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Reviews</a>
                        <ul>
                            <li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
                            <li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
                    <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
                    <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Reviews</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li>Reviews</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4><i class="sl sl-icon-star"></i> Submitted Reviews</h4>
                        <ul>
                            <li>
                                <div class="comments utf_listing_reviews">
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="images/client-avatar3.jpg" alt=""> </div>
                                            <div class="utf_comment_content">
                                                <div class="utf_arrow_comment"></div>
                                                <div class="utf_by_comment">Your Review
                                                    <div class="utf_by_comment-listing own-comment">on <a href="#">The Lounge & Bar</a></div>
                                                    <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                                    <a href="#" class="rate-review">Edit Review <i class="fa fa-edit"></i></a>
                                                </div>
                                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="comments utf_listing_reviews">
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="images/client-avatar3.jpg" alt=""> </div>
                                            <div class="utf_comment_content">
                                                <div class="utf_arrow_comment"></div>
                                                <div class="utf_by_comment">Your Review
                                                    <div class="utf_by_comment-listing own-comment">on <a href="#">The Lounge & Bar</a></div>
                                                    <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                                    <a href="#" class="rate-review">Edit Review <i class="fa fa-edit"></i></a>
                                                </div>
                                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="comments utf_listing_reviews">
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="images/client-avatar3.jpg" alt=""> </div>
                                            <div class="utf_comment_content">
                                                <div class="utf_arrow_comment"></div>
                                                <div class="utf_by_comment">Your Review
                                                    <div class="utf_by_comment-listing own-comment">on <a href="#">The Lounge & Bar</a></div>
                                                    <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                                    <a href="#" class="rate-review">Edit Review <i class="fa fa-edit"></i></a>
                                                </div>
                                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="comments utf_listing_reviews">
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="images/client-avatar3.jpg" alt=""> </div>
                                            <div class="utf_comment_content">
                                                <div class="utf_arrow_comment"></div>
                                                <div class="utf_by_comment">Your Review
                                                    <div class="utf_by_comment-listing own-comment">on <a href="#">The Lounge & Bar</a></div>
                                                    <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                                    <a href="#" class="rate-review">Edit Review <i class="fa fa-edit"></i></a>
                                                </div>
                                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="comments utf_listing_reviews">
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="images/client-avatar3.jpg" alt=""> </div>
                                            <div class="utf_comment_content">
                                                <div class="utf_arrow_comment"></div>
                                                <div class="utf_by_comment">Your Review
                                                    <div class="utf_by_comment-listing own-comment">on <a href="#">The Lounge & Bar</a></div>
                                                    <span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                                    <div class="utf_star_rating_section" data-rating="5"></div>
                                                    <a href="#" class="rate-review">Edit Review <i class="fa fa-edit"></i></a>
                                                </div>
                                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

@endsection





