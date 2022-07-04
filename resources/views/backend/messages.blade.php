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
                    <li class="active"><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
                    <li>
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
                        <h2>Messages</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li>Messages</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4 class="gray"><i class="fa fa-envelope-o"></i> Messages</h4>
                        <div class="utf_user_messages_block">
                            <ul>
                                <li class="unread">
                                    <a href="dashboard_messages_details.html">
                                        <div class="utf_message_user online"><img src="images/user_avatar_01.jpg" alt="user_avatar" /></div>
                                        <div class="utf_message_headline_item">
                                            <div class="utf_message_headline_text">
                                                <h5>John Doe <i>New</i></h5>
                                                <span><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="dashboard_messages_details.html">
                                        <div class="utf_message_user online"><img src="images/user_avatar_02.jpg" alt="user_avatar" /></div>
                                        <div class="utf_message_headline_item">
                                            <div class="utf_message_headline_text">
                                                <h5>John Doe <i>New</i></h5>
                                                <span><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_messages_details.html">
                                        <div class="utf_message_user online"><img src="images/user_avatar_03.jpg" alt="user_avatar" /></div>
                                        <div class="utf_message_headline_item">
                                            <div class="utf_message_headline_text">
                                                <h5>John Doe <i>New</i></h5>
                                                <span><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_messages_details.html">
                                        <div class="utf_message_user"><img src="images/user_avatar_04.jpg" alt="user_avatar" /></div>
                                        <div class="utf_message_headline_item">
                                            <div class="utf_message_headline_text">
                                                <h5>John Doe</h5>
                                                <span><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_messages_details.html">
                                        <div class="utf_message_user"><img src="images/user_avatar_01.jpg" alt="user_avatar" /></div>
                                        <div class="utf_message_headline_item">
                                            <div class="utf_message_headline_text">
                                                <h5>John Doe</h5>
                                                <span><i class="fa fa-clock-o"></i> Jan 05, 2019 - 8:52 am</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="utf_pagination_container_part margin-top-30 margin-bottom-0">
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
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

@endsection





