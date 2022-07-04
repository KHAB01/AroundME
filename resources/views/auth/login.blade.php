@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Login </title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')


        <div class="clearfix"></div>
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Login</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li>Login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="utf_booking_payment_option_form " style="width:600px; margin:80px auto;">
            <h3><i class="sl sl-icon-credit-card "></i> Login </h3>
            <div class="payment">
                <div class="utf_signin_form style_one">

                    <div class="tab_container alt">
                        <div class="tab_content" id="tab1" style="">
                            <form method="post" class="login" action="{{ route('login') }}">
                                @csrf
                                <a href="javascript:void(0);" class="social_bt facebook_btn"><i class="fa fa-facebook"></i>Login with Facebook</a>
                                <a href="javascript:void(0);" class="social_bt google_btn"><i class="fa fa-google-plus"></i>Login with Google</a>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="email">
                                        <input id="email" placeholder="Email" class="input-text" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                        @enderror
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password">
                                        <input  class="input-text" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                        @enderror
                                    </label>
                                </p>
                                <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left">
                             @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">

                            {{ __('Forgot Your Password?') }}
                        </a>
                                        @endif
                          </span>
                                    <div class="checkboxes fl_right">

                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="utf_row_form">
                                    <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                </div>
                            </form>
                            <div class="utf_row_form">
                                <a  class="button border margin-top-5" style="text-align: center" href="/register" >Register</a>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>



        <!-- Footer -->



@endsection
