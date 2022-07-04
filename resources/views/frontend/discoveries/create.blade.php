@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Discoveries</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')


    <div class="clearfix"></div>

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Découvertes</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Acceuil</a></li>
                            <li>Découvertes</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="blog-page">
            <div class="row">

                <div class="col-lg-12">
                    <form method="post" action="{{ route('discoveries.store') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach($errors->all() as $error)
                            {{ $error  }}
                        @endforeach
                        @auth
                            <input type="hidden" name="user_id" value="{{  Auth::id() }}" />
                            <input type="hidden" name="author" value="{{  Auth::user()->name }}" />
                        @endauth
                        @guest
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-user"></i> Have an Account?</h3>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <div class="form-group lis-relative">
                                            Sign in If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email. <a href="#dialog_signin_part" class="login_form sign-in popup-with-zoom-anim">Sign in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endguest

                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-picture"></i> Images</h3>
                            </div>
                            <div class="row with-forms">

                                <div class="utf_submit_section col-md-4">

                                    <h4>Cover Image</h4>
                                    <input type="file" name="cover" class="dropzone" placeholder="image">
                                </div>
                                <div class="utf_submit_section col-md-4">
                                    <h4>Gallery Images</h4>
                                    <input type="file" name="images[]" class="dropzone" id="images" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="add_utf_listing_section margin-top-45">

                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-list"></i> Name &amp; Description</h3>
                            </div>

                            <div class="row with-forms">


                                <div class="col-md-6">
                                    <h5>Title</h5>
                                    <input type="text" placeholder="Title" name="title">
                                </div>
                                <div class="col-md-6">
                                    <h5>Tagline</h5>
                                    <input type="text" placeholder="Tagline" name="tagline">
                                </div>
                                <div class="col-md-6">
                                    <h5>Category</h5>
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select name="category" class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select Category">
                                            <option>Eat &amp; Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5>Description</h5>
                                    <textarea name="content" cols="40" rows="3" id="summernote" placeholder="Description..." spellcheck="true"></textarea>
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
                                            <select class="selectpicker default" name="city" data-selected-text-format="count" data-size="7" title="Select City">
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
                                        <input type="text" class="input-text" name="address" id="address" placeholder="Address" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Decimal Degrees</h5>
                                        <div class="row with-forms">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text" name="latitude" id="latitude" placeholder="40.7324319" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="input-text" name="longitude" id="longitude" placeholder="-73.824807777775" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="utf_listing_location" class="col-md-12 utf_listing_section">
                                        <div id="utf_single_listing_map_block">
                                            <div id="utf_single_listingmap" data-latitude="40.7324319" data-longitude="-73.824807777775" data-map-icon="im im-icon-Hamburger"></div>
                                            <a href="#" id="utf_street_view_btn">Street View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <button  class="button preview">Save &amp; Preview</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <!-- Footer -->

    <div id="bottom_backto_top"><a href="#"></a></div>

@endsection

@section('custom_js')


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

    <script src="/scripts/jquery-3.4.1.min.js"></script>
    <script src="/scripts/chosen.min.js"></script>
    <script src="/scripts/slick.min.js"></script>
    <script src="/scripts/rangeslider.min.js"></script>
    <script src="/scripts/bootstrap-select.min.js"></script>
    <script src="/scripts/magnific-popup.min.js"></script>
    <script src="/scripts/jquery-ui.min.js"></script>
    <script src="/scripts/mmenu.js"></script>
    <script src="/scripts/tooltips.min.js"></script>
    <script src="/scripts/color_switcher.js"></script>
    <script src="/scripts/jquery_custom.js"></script>

    <!-- Style Switcher -->


    <!-- Maps -->
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="/scripts/infobox.min.js"></script>
    <script src="/scripts/markerclusterer.js"></script>
    <script src="/scripts/maps.js"></script>
    <script>
        $(".utf_opening_day.utf_js_demo_hours .utf_chosen_select").each(function() {
            $(this).append(''+
                '<option></option>'+
                '<option>Closed</option>'+
                '<option>1 AM</option>'+
                '<option>2 AM</option>'+
                '<option>3 AM</option>'+
                '<option>4 AM</option>'+
                '<option>5 AM</option>'+
                '<option>6 AM</option>'+
                '<option>7 AM</option>'+
                '<option>8 AM</option>'+
                '<option>9 AM</option>'+
                '<option>10 AM</option>'+
                '<option>11 AM</option>'+
                '<option>12 AM</option>'+
                '<option>1 PM</option>'+
                '<option>2 PM</option>'+
                '<option>3 PM</option>'+
                '<option>4 PM</option>'+
                '<option>5 PM</option>'+
                '<option>6 PM</option>'+
                '<option>7 PM</option>'+
                '<option>8 PM</option>'+
                '<option>9 PM</option>'+
                '<option>10 PM</option>'+
                '<option>11 PM</option>'+
                '<option>12 PM</option>');
        });
    </script>
    <script src="/scripts/dropzone.js"></script>
@endsection
