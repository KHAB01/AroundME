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
                    <div class="col-lg-8 col-md-8">

                        @foreach ($discoveries as $discovery)
                        <div class="utf_blog_post">
                            <a href="/discoveries/{{$discovery->id}}" class="utf_post_img"> <img style="width: 750px; height: 550px;" src="images/{{$discovery->cover}}" alt=""> </a>
                            <div class="utf_post_content">
                                <h3><a href="/discoveries/{{$discovery->id}}">{{$discovery->title}}</a></h3>
                                <ul class="utf_post_text_meta">
                                    <li>{{$discovery->created_at}}</li>

                                    <li>By <a href="#">{{$discovery->author}}</a> </li>
                                    <li><a href="#">5 Comments</a></li>
                                    <li>{{$discovery->category}}</li>
                                </ul>

                                @php
                                    $body = substr($discovery->content, 0, 500);
                                @endphp
                                <p>{!! $body !!} <a href="/discoveries/{{$discovery->id}}">[...]</a></p>
                                <a href="/discoveries/{{$discovery->id}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        @endforeach

                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="utf_pagination_container_part margin-bottom-70">
                                    <nav class="pagination">
                                        <ul>
                                            {!!$discoveries->links()!!}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar right">
                            <div class="utf_box_widget">
                                <h3><i class="sl sl-icon-magnifier"></i> Search Blog</h3>
                                <div class="utf_search_blog_input">
                                    <div class="input">
                                        <input class="search-field" type="text" placeholder="Search..." value=""/>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="utf_box_widget margin-top-35">
                                <h3><i class="sl sl-icon-folder-alt"></i> Categories</h3>
                                <ul class="utf_listing_detail_sidebar">
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Travel</a></li>
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Nightlife</a></li>
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Fitness</a></li>
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Real Estate</a></li>
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Restaurant</a></li>
                                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Dance Floor</a></li>
                                </ul>
                            </div>

                            <div class="utf_box_widget margin-top-40">
                                <h3><i class="sl sl-icon-book-open"></i> Popular Post</h3>
                                <ul class="utf_widget_tabs">
                                    @foreach($latest as $post)
                                        <li>
                                            <div class="utf_widget_content">
                                                <div class="utf_widget_thum"> <a href="/discoveries/{{$post->id}}"><img src="/images/{{$post->cover}}" alt=""></a> </div>
                                                <div class="utf_widget_text">

                                                    <h5><a href="/discoveries/{{$post->id}}">{{$post->title}}</a></h5>

                                                    <span><i class="fa fa-clock-o"></i> {{ date('M-d h s a', strtotime($post->created_at)) }}</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="utf_box_widget margin-top-35">
                                <h3><i class="sl sl-icon-phone"></i> Quick contact to help?</h3>
                                <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                                <ul class="utf_social_icon rounded">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                                </ul>
                                <a class="utf_progress_button button fullwidth_block margin-top-5" href="contact.html">Contact Us</a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="utf_cta_area_item utf_cta_area2_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_subscribe_block clearfix">
                            <div class="col-md-8 col-sm-7">
                                <div class="section-heading">
                                    <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                                    <p class="utf_sec_meta">
                                        Subscribe to get latest updates and information.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <span class="la la-envelope-o"></span>
                                        <input class="form-control" type="email" placeholder="Enter your email" required="">
                                        <button class="utf_theme_btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

        <div id="bottom_backto_top"><a href="#"></a></div>

@endsection
