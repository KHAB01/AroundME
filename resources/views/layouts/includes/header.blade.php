<header id="header_part">
    <div id="header">
        <div class="container">
            <div class="utf_left_side">
                <div id="logo"> <a href="/"><img src="/images/logo.png" alt=""></a> </div>
                <div class="mmenu-trigger">
                    <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                    </button>
                </div>
                <nav id="navigation" class="style_one">
                    <ul id="responsive">
                        <li><a href="/">Acceuil</a>
                        </li>
                        <li>
                            <a href="/etablissements">Etablissements</a>
                        </li>
                        <li>
                            <a href="/evenements">Evenements</a>
                        </li>

                        <li><a href="/discoveries">Découvertes</a></li>
                        <li><a href="/contact">Contact</a></li>


                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="utf_right_side">
                <div class="header_widget">
                    @auth

                        <a href="{{ route('logout') }}" class="button border "><i class="fa fa-sign-in"></i>Se déconnecter</a>
                        @php
                            $isAdmin = Auth::user()->user_type;
                        @endphp
                        @if($isAdmin == 'Administrator')
                            <a href="/admin" class="button border with-icon"><i class="sl sl-icon-user"></i>Dashboard</a>
                        @else
                            <a href="/discoveries/create" class="button border with-icon"><i class="sl sl-icon-user"></i>Ajouter découverte</a>
                        @endif

                    @endauth

                    @guest
                    <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Se connecter</a>
                            <a href="/business" class="button border with-icon"><i class="sl sl-icon-user"></i> Ajouter une annonce</a>
                        @endguest



                </div>
            </div>

            <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                <div class="small_dialog_header">

                </div>
                <div class="utf_signin_form style_one">
                    <ul class="utf_tabs_nav">
                        <li class=""><a href="#tab1">Se connecter</a></li>
                        <li><a href="#tab2">S'enregistrer</a></li>
                    </ul>
                    <div class="tab_container alt">
                        <div class="tab_content" id="tab1" style="display:none;">
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

                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                        @endif
                                      </span>
                                    <div class="checkboxes fl_right">

                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember-me">Se rappeler de moi</label>
                                    </div>
                                </div>
                                <div class="utf_row_form">
                                    <input type="submit" class="button border margin-top-5" name="login" value="Se connecter" />
                                </div>
                            </form>
                        </div>

                        <div class="tab_content" id="tab2" style="display:none;">
                            <form method="POST" class="register" action="{{ route('register') }}">
                                @csrf  @foreach($errors->all() as $error)
                                    <div class="alert alert-success">
                                        {{ $error  }}
                                    </div>
                                @endforeach
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username2">
                                        <input id="name" placeholder="Name" type="text" class="input-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username2">
                                        <input id="name" placeholder="Last name" type="text" class="input-text @error('name') is-invalid @enderror" name="lastname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username2">
                                        <input id="name" placeholder="bio" type="text" class="input-text @error('name') is-invalid @enderror" name="bio" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                                <input type="submit" class="button border fw margin-top-10" name="register" value="Créer un compte" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clearfix"></div>
