@extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Evenements</title>

@endsection

@section('content')


    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>

        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Mes evenements</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/admin">Tableau de bord</a></li>
                                <li>Mon évenement</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <div class="sort-by my_sort_by">
                            <div class="utf_sort_by_select_item">
                                <select data-placeholder="Default Listing" class="utf_chosen_select_single">
                                    <option>Default Listing</option>
                                    <option>Active Listing</option>
                                    <option>Pending Listing</option>
                                    <option>Expired Listing</option>
                                </select>
                            </div>
                        </div>
                        <h4><i class="sl sl-icon-list"></i> My Listings</h4>
                        <ul>
                            @foreach($events as $event)
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="{{$event->cover}}" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>{{$event->title}}</h3>
                                            <span><i class="im im-icon-Hotel"></i> Event</span>
                                            <span><i class="sl sl-icon-location"></i>{{$event->adresse}}</span>
                                            <span><i class="sl sl-icon-phone"></i>{{$event->telephone}}</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>{{$event->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="{{ route('events.edit',$event->id) }}" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="{{ route('events.destroy',$event->id) }}" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
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
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

@endsection



