@extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Add listing</title>

@endsection

@section('content')


    <div class="utf_dashboard_content">
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add Listing</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li>Add Listing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container margin-bottom-75">
            <div class="row">
                <div class="col-lg-12">
                    <div id="utf_add_listing_part">
                        <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach($errors->all() as $error)
                                {{ $error  }}
                            @endforeach
                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-tag"></i> Categories & Tags</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Listing Title</h5>
                                        <input type="text" class="search-field" name="listing_title" id="listing_title"
                                               placeholder="Listing Title" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Keywords</h5>
                                        <input type="text" name="keywords" id="keywords" placeholder="Keywords..."
                                               value="">
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Category</h5>
                                        <div class="intro-search-field utf-chosen-cat-single">
                                            <select class="selectpicker default" name="category"
                                                    data-selected-text-format="count" data-size="7"
                                                    title="Select Category">
                                                <option>Eat & Drink</option>
                                                <option>Shops</option>
                                                <option>Hotels</option>
                                                <option>Restaurants</option>
                                                <option>Fitness</option>
                                                <option>Events</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Tags(optional)</h5>
                                        <div class="intro-search-field utf-chosen-cat-single">
                                            <select class="selectpicker default" name="tags"
                                                    data-selected-text-format="count" data-size="7" title="Select Tags">
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                                <option>Four</option>
                                                <option>Five</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Listing Tags</h5>
                                        <input type="text" class="search-field" name="listing_tags" id="listing_title"
                                               placeholder="Listing Tags" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-map"></i> Location</h3>
                                </div>
                                <div class="utf_submit_section">
                                    <div class="row with-forms">
                                        <div class="col-md-6">
                                            <h5>City</h5>
                                            <div class="intro-search-field utf-chosen-cat-single">
                                                <select class="selectpicker default" name="city"
                                                        data-selected-text-format="count" data-size="7"
                                                        title="Select City">
                                                    <option>New York</option>
                                                    <option>Argentina</option>
                                                    <option>Chicago</option>
                                                    <option>Azerbaijan</option>
                                                    <option>Indonesia</option>
                                                    <option>India</option>
                                                    <option>Thailand</option>
                                                    <option>Gambia</option>
                                                    <option>Spain</option>
                                                    <option>Iraq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Address</h5>
                                            <input type="text" class="input-text" name="address" id="address"
                                                   placeholder="Address" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h5>Decimal Degrees</h5>
                                            <div class="row with-forms">
                                                <div class="col-md-6">
                                                    <input type="text" class="input-text" name="latitude" id="latitude"
                                                           placeholder="40.7324319" value="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="input-text" name="longitude"
                                                           id="longitude" placeholder="-73.824807777775" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="utf_listing_location" class="col-md-12 utf_listing_section">
                                            <div id="utf_single_listing_map_block">
                                                <div id="utf_single_listingmap" data-latitude="40.7324319"
                                                     data-longitude="-73.824807777775"
                                                     data-map-icon="im im-icon-Hamburger"></div>
                                                <a href="#" id="utf_street_view_btn">Street View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-picture"></i> Images</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="utf_submit_section col-md-4">
                                        <h4>Logo</h4>

                                            <input type="file" name="logo"/>

                                    </div>
                                    <div class="utf_submit_section col-md-4">
                                        <h4>Cover Image</h4>

                                        <input type="file" name="cover"/>

                                    </div>
                                    <div class="utf_submit_section col-md-4">
                                        <h4>Gallery Images</h4>

                                        <input type="file" name="gallery"/>

                                    </div>
                                </div>
                            </div>

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-list"></i> Name & Description</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Name</h5>
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Email</h5>
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Title</h5>
                                        <input type="text" name="title" placeholder="Title">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Tagline</h5>
                                        <input type="text" name="tagline" placeholder="Tagline">
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Description</h5>
                                        <textarea  name="description" cols="40" rows="3" id="description"
                                                  placeholder="Description..." spellcheck="true"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-home"></i> Amenities</h3>
                                </div>
                                <div class="checkboxes in-row amenities_checkbox">
                                    <ul>
                                        <li>
                                            <input id="check-a" type="checkbox" name="amenities[]">
                                            <label for="check-a">Car Parking</label>
                                        </li>
                                        <li>
                                            <input id="check-b" type="checkbox" name="amenities[]">
                                            <label for="check-b">Takes Reservations</label>
                                        </li>
                                        <li>
                                            <input id="check-c" type="checkbox" name="amenities[]">
                                            <label for="check-c">Street Parking</label>
                                        </li>
                                        <li>
                                            <input id="check-d" type="checkbox" name="amenities[]">
                                            <label for="check-d">Elevator in Building</label>
                                        </li>
                                        <li>
                                            <input id="check-e" type="checkbox" name="amenities[]">
                                            <label for="check-e">Outdoor Seating</label>
                                        </li>
                                        <li>
                                            <input id="check-f" type="checkbox" name="amenities[]">
                                            <label for="check-f">Friendly Workspace</label>
                                        </li>
                                        <li>
                                            <input id="check-g" type="checkbox" name="amenities[]">
                                            <label for="check-g">Wireless Internet</label>
                                        </li>
                                        <li>
                                            <input id="check-h" type="checkbox" name="amenities[]">
                                            <label for="check-h">Good for Kids</label>
                                        </li>
                                        <li>
                                            <input id="check-i" type="checkbox" name="amenities[]">
                                            <label for="check-i">Events</label>
                                        </li>
                                        <li>
                                            <input id="check-j" type="checkbox" name="amenities[]">
                                            <label for="check-j">Smoking Allowed</label>
                                        </li>
                                        <li>
                                            <input id="check-k" type="checkbox" name="amenities[]">
                                            <label for="check-k">Wheelchair Accessible</label>
                                        </li>
                                        <li>
                                            <input id="check-l" type="checkbox" name="amenities[]">
                                            <label for="check-l">Accepted Bank Cards</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                                </div>
                                <div class="switcher-content">
                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Monday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="monday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="monday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Tuesday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Tuesday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Tuesday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Wednesday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Wednesday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Wednesday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Thursday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Thursday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Thursday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Friday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Friday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Friday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Saturday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Saturday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Saturday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>

                                    <div class="row utf_opening_day utf_js_demo_hours">
                                        <div class="col-md-2">
                                            <h5>Sunday :-</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Sunday_open"
                                                    data-placeholder="Open Time"></select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="utf_chosen_select" name="Sunday_closed"
                                                    data-placeholder="Close Time"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-docs"></i> Your Listing Feature</h3>
                                </div>
                                <div class="checkboxes in-row amenities_checkbox">
                                    <ul>
                                        <li>
                                            <input id="check-a1" name="features[]" value="Accepts Credit Cards"
                                                   type="checkbox">
                                            <label for="check-a1">Accepts Credit Cards</label>
                                        </li>
                                        <li>
                                            <input id="check-b1" name="features[]" value="Smoking Allowed"
                                                   type="checkbox" name="check">
                                            <label for="check-b1">Smoking Allowed</label>
                                        </li>
                                        <li>
                                            <input id="check-c1" name="features[]" value="Bike Parking" type="checkbox"
                                                   name="check">
                                            <label for="check-c1">Bike Parking</label>
                                        </li>
                                        <li>
                                            <input id="check-d1" name="features[]" value="Hostels" type="checkbox"
                                                   name="check">
                                            <label for="check-d1">Hostels</label>
                                        </li>
                                        <li>
                                            <input id="check-e1" name="features[]" value="Accepts Credit Cards"
                                                   type="checkbox" name="check">
                                            <label for="check-e1">Wheelchair Accessible</label>
                                        </li>
                                        <li>
                                            <input id="check-f1" name="features[]" value="Wheelchair Internet"
                                                   type="checkbox" name="check">
                                            <label for="check-f1">Wheelchair Internet</label>
                                        </li>
                                        <li>
                                            <input id="check-g1" name="features[]" value="Wheelchair Accessible"
                                                   type="checkbox" name="check">
                                            <label for="check-g1">Wheelchair Accessible</label>
                                        </li>
                                        <li>
                                            <input id="check-h1" name="features[]" value="Parking Street"
                                                   type="checkbox" name="check">
                                            <label for="check-h1">Parking Street</label>
                                        </li>
                                        <li>
                                            <input id="check-i1" name="features[]" value="Wireless Internet"
                                                   type="checkbox" name="check">
                                            <label for="check-i1">Wireless Internet</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" class="button preview"><i class="fa fa-arrow-circle-right"></i> Save &
                                Preview
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection







