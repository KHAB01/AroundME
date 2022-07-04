@extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Ajouter evenement</title>

@endsection

@section('content')


    <div class="utf_dashboard_content">
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ajouter evenement</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/admin">Tableau de bord</a></li>
                                <li>Ajouter evenement</li>
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
                        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach($errors->all() as $error)
                                {{ $error  }}
                            @endforeach
                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-tag"></i> Informations sur l'evenement</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Titre</h5>
                                        <input type="text" class="search-field" name="title" id="listing_title"
                                               placeholder="Titre" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Adresse email</h5>
                                        <input type="email" name="email" id="keywords" placeholder="adresse email..."
                                               value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>telephone</h5>
                                        <input type="tel" name="telephone" id="keywords" placeholder="telephone..."
                                               value="">
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Categorie</h5>
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
                                        <h5>Site web</h5>
                                        <input type="text" name="website" id="keywords" placeholder="Site web..."
                                               value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Facebook</h5>
                                        <input type="text" name="facebook" id="keywords" placeholder="Facebook..."
                                               value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Twitter</h5>
                                        <input type="text" name="twitter" id="keywords" placeholder="Twitter..."
                                               value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Instagram</h5>
                                        <input type="text" name="instagram" id="keywords" placeholder="Instagram..."
                                               value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Youtube</h5>
                                        <input type="text" name="youtube" id="keywords" placeholder="Youtube..."
                                               value="">
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Tags</h5>
                                        <input type="text" class="search-field" name="tags" id="listing_title"
                                               placeholder="Tags" value="">
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">

                                            <h5>Description</h5>
                                            <textarea name="description" cols="40" rows="3" id="summernote" placeholder="Description..." spellcheck="true"></textarea>

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
                                            <h5>Ville</h5>
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
                                            <h5>Addresse</h5>
                                            <input type="text" class="input-text" name="adresse" id="address"
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




                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-home"></i> Programme</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>Date début</h5>
                                        <input type="date" class="search-field" name="startdate" id="listing_title"
                                                value="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Date fin</h5>
                                        <input type="date" name="enddate" id="keywords" placeholder="adresse email..."
                                               value="">
                                    </div>

                                </div>

                            </div>


                            <button type="submit" class="button preview"><i class="fa fa-arrow-circle-right"></i> Enregistrer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



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

    <script src="/scripts/dropzone.js"></script>
@endsection

