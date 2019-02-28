@extends('layouts.layout')
@section('content')
    <!--NavigationBar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#top"><img src="img/company-logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="board">BOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="background: orange;">JOIN NOW</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Promo -->
    <section id="promo">
        <div class="container">
            <p>BECOME A MEMBER</p>
        </div>
    </section>
    <!-- Change Admin Info -->
    <section id="login-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <form class="form-container" id="signup" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <h2 class="text-center" style="padding-bottom: 10px; font-weight: bold;">Create Account</h2>
                        <div class="row">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} log-in col-md-6">
                                <label for="name" class="control-label">Name</label>

                                <div>
                                    <input id="name" type="text" class="form-control" style="padding-left: 40px; border-bottom: 1px solid #999!important;" name="name" value="{{ old('name') }}" required autofocus>
                                    <i class="fa fa-user fa-fw"></i>
                                    
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} log-in col-md-6">
                                    <label for="email" class="control-label">E-Mail Address</label>
                                    
                                <div>
                                    <input id="email" type="email" class="form-control" style="padding-left: 40px; border-bottom: 1px solid #999!important;" name="email" value="{{ old('email') }}" required>
                                    <i class="fa fa-user fa-fw"></i>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} log-in col-md-6">
                                <label for="password" class="control-label">Password</label>
                                
                                <div>
                                    <input id="password" type="password" class="form-control" style="padding-left: 40px; border-bottom: 1px solid #999!important;" name="password" required>
                                    <i class="fa fa-lock fa-fw"></i>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group log-in col-md-6">
                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" style="padding-left: 40px; border-bottom: 1px solid #999!important;" name="password_confirmation" required>
                                    <i class="fa fa-lock fa-fw"></i>
                                </div>
                            </div>

                            <div class="form-group offset-md-1 col-md-10">
                                <div>
                                    <button type="submit" style="border-radius:0!important; width: 100%;" class="btn btn-primary">
                                        SIGNUP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="some-tips">
        <div class="container">
            <div class="some-ad">
                <div class="text-center question"><label>HAVE ANY QUESTION</label><img src="img/question.png"></i></div>
            </div>
        </div>
    </section>
    <!-- Get in Touch -->
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius:0!important;">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>Address: </b><i class="fa fa-map-marker"></i> XYZ Road,
                    Bangalore, IN</div>
                    <div class="follow"><b>Phone: </b><i class="fa fa-phone"></i> +234 7039347005</div>
                    <div class="follow"><b>Email: </b><i class="fa fa-envelope-o"></i> senjonnes@gmail.com</div>
                    <div class="follow"><b><label>Get Social:</b></label>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section id="footer">
        <div class="container text-center">
            <p>Made With <i class="fa fa-heart-o"></i> by Odeyemi Oluwaseun</p>
        </div>
    </section>
    <!-- Footer End -->
    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });

        $(document).ready(function() {

        var docHeight = $(window).outerHeight();
        var footerHeight = $('#address').height();
        var footerTop = $('#address').position().top + footerHeight;

        if (footerTop < docHeight)
            $('#address').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        });
    </script>
@endsection 