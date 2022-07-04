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
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Reviews</a>
                        <ul>
                            <li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
                            <li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
                    <li class="active"><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
                    <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Profile</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li>My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4 class="gray"><i class="sl sl-icon-user"></i> Profile Details</h4>
                        <div class="utf_dashboard_list_box-static">
                            <div class="edit-profile-photo"> <img src="images/user-avatar.jpg" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="my-profile">
                                <div class="row with-forms">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                        <input type="text" class="input-text" placeholder="Alex Daniel" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="text" class="input-text" placeholder="(123) 123-456" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Company</label>
                                        <input type="text" class="input-text" placeholder="ABC Company" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" class="input-text" placeholder="test@example.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Designation</label>
                                        <input type="text" class="input-text" placeholder="Account Manager" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>State</label>
                                        <input type="text" class="input-text" placeholder="London" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Birth</label>
                                        <input type="text" class="input-text" placeholder="20 March 2000" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Country</label>
                                        <input type="text" class="input-text" placeholder="England" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Age</label>
                                        <input type="text" class="input-text" placeholder="18 Year" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <textarea name="notes" cols="30" rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Notes</label>
                                        <textarea name="notes" cols="30" rows="10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Facebook</label>
                                        <input type="text" class="input-text" placeholder="https://www.facebook.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Twitter</label>
                                        <input type="text" class="input-text" placeholder="https://www.twitter.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Linkedin</label>
                                        <input type="text" class="input-text" placeholder="https://www.linkedin.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Google+</label>
                                        <input type="text" class="input-text" placeholder="https://plus.google.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Instagram</label>
                                        <input type="text" class="input-text" placeholder="http://instagram.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Skype</label>
                                        <input type="text" class="input-text" placeholder="https://www.skype.com" value="">
                                    </div>
                                </div>
                            </div>
                            <button class="button preview btn_center_item margin-top-15">Save Changes</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

@endsection





