@extends('layouts.layout')
@section('content')
    <!--NavigationBar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#top"><img src="img/company-logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if(!Auth::check())
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="homepage">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">ABOUT</a>
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
            @else
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="home">HOME</a>
                </li>
                @can('isUser')
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                @endcan
                @can('isAdmin')
                <li class="nav-item">
                  <a class="nav-link" href="all-members">MEMBERS</a>
                </li>
                @endcan
                @can('isUser')
                <li class="nav-item">
                    <a class="nav-link" href="board">BOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
                @endcan
                <li class="dropdown nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">
                            <a style="text-decoration: none; color: #fff!important;" href="profile">
                            {{ Auth::user()->user_type==1 ? 'ADMIN' : Auth::user()->name }}
                            </a>
                        </button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Account</a>
                            @can('isUser')
                            <a class="dropdown-item" href="#">Loan Bond</a>
                            @endcan
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
            @endif
        </nav>
    </section>
    <!-- Promo -->
    <section id="promo">
        <div class="container">
            <p>ABOUT US</p>
        </div>
    </section>
    <!-- About -->
    <section id="about-page">
        <div class="container">
            <h1 class="page-title">About</h1>
            <div class="row">
                <div class="col-md-8">
                    <h3>About Us</h3>
                    <p class="text-justify">
                        As you will see from attached CV, I have recently completed my Bachelor’s 
                        degree in Metallurgical and Materials Engineering at the Federal University 
                        of Technology Akure, Ondo State, Nigeria and attained a Second-Class Upper 
                        Division. Whilst studying, I had a six (6) months internship with Lafarge 
                        Cement WAPCO Nigeria Plc, Sagamu, Ogun State where I worked as an Engineering Intern. 
                        I gained valuable knowledge and experience tailored to fabrication, overhauling, 
                        welding, general maintenance and basic knowledge of cement production and it chemistry. 
                        I have also had a hand – on experience Metal Arc Welding and the ability to interact 
                        with customers while working with Joamech Gas and Engineering Company, Akure, Ondo 
                        State. I observed a full training with FEDDO Integrated on Subsea System Integration 
                        and currently working with Zinox Institute of Technology as a Software Developer 
                        Trainee.
                    </p>
                    <p class="text-justify">
                        I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                        the belief that I will be a great asset to your organization. I have excellent written and 
                        communication skills, interpersonal relationship and ability to liaise effectively and 
                        professionally with individuals at all levels. I am a professional and I believe my 
                        greatest assets are my ability to work with different personalities and adapt quickly 
                        to different work environment. 
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>What We Do</h4>
                    <p class="text-justify">
                        I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                        the belief that I will be a great asset to your organization. I have excellent written and 
                        communication skills, interpersonal relationship and ability to liaise effectively and 
                        professionally with individuals at all levels. I am a professional and I believe my 
                        greatest assets are my ability to work with different personalities and adapt quickly 
                        to different work environment. 
                    </p>
                </div>
            </div>
            </aside>
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
    </script>
@endsection 