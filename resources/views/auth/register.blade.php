@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Register </title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')




    <div class="clearfix"></div>
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Register</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="utf_booking_payment_option_form " style="width:600px; margin:80px auto;">
        <h3><i class="sl sl-icon-credit-card "></i> Register </h3>
        <div class="payment">
            <div class="utf_signin_form style_one">

                <div class="tab_container alt">
                    <div class="tab_content" id="tab1" style="">
                        <form method="POST" class="register" action="{{ route('register') }}">
                            @csrf  @foreach($errors->all() as $error)
                                <div class="alert alert-success">
                                    {{ $error  }}
                                </div>
                            @endforeach
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username2">
                                    <input id="name" placeholder="Name" type="text" class="input-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                            </p><p class="utf_row_form utf_form_wide_block">
                                <label for="username2">
                                    <input id="name" placeholder="Last Name" type="text" class="input-text @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="email2">
                                    <input id="email" placeholder="Email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password1">
                                    <input id="password" placeholder="Password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password2">
                                    <input id="password-confirm" placeholder="Confirm password" type="password" class="input-text" name="password_confirmation" required autocomplete="new-password">

                                </label>
                            </p>
                            <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                        </form>
                        <div class="utf_row_form">
                            <a  class="button border margin-top-5" style="text-align: center" href="/login" >Login</a>
                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>



    <!-- Footer -->



@endsection
