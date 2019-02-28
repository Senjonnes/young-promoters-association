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
            <p>LOGIN HERE</p>
        </div>
    </section>
    <!-- Change Admin Info -->
    <section id="login-form">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin:auto; width:100%;">
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">Login</div>
                            
                            <div class="panel-body"> -->
                        <form class="form-container" id="log-in" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <h2 class="text-center" style="padding-bottom: 30px; font-weight: bold;">Login</h2>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} log-in">
                                <label for="email" class="input-name">E-Mail Address</label>

                                <div>
                                    <input id="email" type="email" class="form-control" name="email" style="padding-left: 40px; border-bottom: 1px solid #999!important;" value="{{ old('email') }}" required autofocus>
                                    <i class="fa fa-user fa-fw"></i>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} log-in">
                                <label for="password" class="input-name">Password</label>

                                <div>
                                    <input id="password" type="password" class="form-control" name="password" style="padding-left: 40px; border-bottom: 1px solid #999!important;" required>
                                    <i class="fa fa-lock fa-fw"></i>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span style="color:#333;"> Remember Me</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button id="login" type="submit" name="submit" class="btn btn-primary btn-block" style="border-radius:0!important;">
                                        LOGIN &#10144;
                                    </button>
                                    <div class="buttomText">
                                        <a class="forgotPassword" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col"><hr class="border"></div>
                                        <div class="col-auto" style="color:#333;">OR</div>
                                        <div class="col"><hr class="border"></div>
                                    </div>
                                    <div class="click">
                                        <label for="button">Click</label>
                                        <a href="{{ route('register') }}">here</a>
                                        <label for="button">to create an account</label>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    <!-- </div>
                    </div>
                </div> -->
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