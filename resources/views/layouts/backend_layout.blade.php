<!DOCTYPE html>
<html lang="en">

<head>

    @yield('head')

    @include('layouts.includes.head_back')



</head>

<body style="overflow-x: hidden;">

<div id="main_wrapper">

    @include('layouts.includes.header_back')


    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
        <div class="utf_dashboard_navigation js-scrollbar ps ps--active-x">
            <div class="utf_dashboard_navigation_inner_block" style="max-height: 1488px;">
                <ul>
                    <li class="active"><a href="/"><i class="sl sl-icon-layers"></i> Tableau de bord</a></li>
                    @php

                    @endphp
                    <li ><a href="/admin/listings"><i class="sl sl-icon-plus"></i> Ajouter Annonce</a></li>
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-layers"></i> Mes annonces</a>
                        <ul>
                            <li><a href="/admin/listings">Active <span class="nav-tag green">{{DB::table('listings')->where('etat','=','active')->count()}}</span></a></li>
                            <li><a href="/admin/listings">En attente <span class="nav-tag yellow">{{DB::table('listings')->where('etat','=','en attente')->count()}}</span></a></li>
                            <li><a href="/admin/listings">Expirée <span class="nav-tag red">{{DB::table('listings')->where('etat','=','expired')->count()}}</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Réservations</a></li>
                    <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Portefeuille</a></li>
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Avis</a>
                        <ul>
                            <li><a href="dashboard_visitor_review.html">Avis des visiteurs <span class="nav-tag green">4</span></a></li>
                            <li><a href="dashboard_submitted_review.html">Avis soumis <span class="nav-tag yellow">5</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
                    <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> Mon profil</a></li>
                    <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Changer mot de passe</a></li>
                    <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Se déconnecter</a></li>
                </ul>
            </div>
            <div class="ps__rail-x" style="width: 260px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 244px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
            <div class="small_dialog_header">
                <h3>Sign In</h3>
            </div>

            <div class="utf_signin_form style_one">
                <ul class="utf_tabs_nav">
                    <li class="active"><a href="#tab1">Log In</a></li>
                    <li><a href="#tab2">Register</a></li>
                </ul>
                <div class="tab_container alt">

                    <div class="tab_content" id="tab1" style="">
                        <form method="post" class="login">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username">
                                    <input type="text" class="input-text" name="username" id="username" value="" placeholder="Username">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password">
                                    <input class="input-text" type="password" name="password" id="password" placeholder="Password">
                                </label>
                            </p>
                            <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="javascript:void(0);">Forgot Password?</a> </span>
                                <div class="checkboxes fl_right">
                                    <input id="remember-me" type="checkbox" name="check">
                                    <label for="remember-me">Remember Me</label>
                                </div>
                            </div>
                            <div class="utf_row_form">
                                <input type="submit" class="button border margin-top-5" name="login" value="Login">
                            </div>
                        </form>
                    </div>

                    <div class="tab_content" id="tab2" style="display: none;">
                        <form method="post" class="register">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username2">
                                    <input type="text" class="input-text" name="username" id="username2" value="" placeholder="Username">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="email2">
                                    <input type="text" class="input-text" name="email" id="email2" value="" placeholder="Email">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password1">
                                    <input class="input-text" type="password" name="password1" id="password1" placeholder="Password">
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password2">
                                    <input class="input-text" type="password" name="password2" id="password2" placeholder="Confirm Password">
                                </label>
                            </p>
                            <input type="submit" class="button border fw margin-top-10" name="register" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        @yield('content')

    </div>




</div>

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

</body>
</html>
