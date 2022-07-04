<header id="header_part" class="fixed fullwidth_block dashboard">
    <div id="header" class="not-sticky">
        <div class="container">
            <div class="utf_left_side">
                <div id="logo"> <a href="index_1.html"><img src="/images/logo2.png" alt=""></a> <a href="index_1.html" class="dashboard-logo"><img src="/images/logo2.png" alt=""></a> </div>
                <div class="mmenu-trigger">
                    <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                    </button>
                </div>
                <nav id="navigation" class="style_one">
                    <ul id="responsive">
                        <li><a href="/">Home</a>

                        </li>
                        <li><a href="/etablissements">Etablissements</a>

                        </li>
                        <li><a href="/discoveries">Evenements</a>
                        <li><a href="/discoveries">Découvertes</a>
                        </li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="utf_right_side">
                <div class="header_widget">
                    <div class="dashboard_header_button_item has-noti js-item-menu">
                        <i class="sl sl-icon-bell"></i>
                        <div class="dashboard_notifi_dropdown js-dropdown">
                            <div class="dashboard_notifi_title">
                                <p>You Have 2 Notifications</p>
                            </div>
                            <div class="dashboard_notifi_item">
                                <div class="bg-c1 red">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="content">
                                    <p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </div>
                            <div class="dashboard_notifi_item">
                                <div class="bg-c1 green">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <p>Vous avez 7 messages non lus</p>
                                    <span class="date">il y a 5 heures</span>
                                </div>
                            </div>
                            <div class="dashboard_notify_bottom text-center pad-tb-20">
                                <a href="#">Afficher toutes les notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="utf_user_menu">
                        <div class="utf_user_name">Bonjour,
                            {{Auth::user()->name}}</div>
                        <ul>
                            <li><a href="/admin"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                            <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> Mon profil</a></li>
                            <li><a href="/admin/listings"><i class="sl sl-icon-list"></i> Mes Annonces</a></li>
                            <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                            <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Booking</a></li>
                            <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
