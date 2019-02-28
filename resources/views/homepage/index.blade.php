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
                  <a class="nav-link" href="#top">HOME</a>
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
    <section>
        <!--Slider-->
        <div id="slider">
            <div id="headerSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                  <li data-target="#headerSlider" data-slide-to="1"></li>
                  <li data-target="#headerSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/login.jpg">
                    <div class="carousel-caption">
                        <h5>Cash/Bank Account</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/second.jpg">
                    <div class="carousel-caption">
                        <h5>Instalment</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/third.jpg">
                    <div class="carousel-caption">
                        <h5>Savings</h5>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--About-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <div class="about-content text-justify">
                        I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                        the belief that I will be a great asset to your organization. I have excellent written and 
                        communication skills, interpersonal relationship and ability to liaise effectively and 
                        professionally with individuals at all levels. I am a professional and I believe my 
                        greatest assets are my ability to work with different personalities and adapt quickly 
                        to different work environment.
                    </div>
                    <a href="about"><button type="button" class="btn btn-primary">Read more>></button></a>
                </div>
                <div class="col-md-6 skills-bar">
                    <h2 style="margin-bottom: 10px;">Growth</h2>
                    <p>Cash/Bank Balance</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;">80%</div>
                    </div>
                    <p>Instalment</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%;">85%</div>
                    </div>
                    <p>Savings</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%;">75%</div>
                    </div>
                    <p>Loan Bond</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%;">50%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu -->
    <section id="menu">
        <div class="container">
            <h1>Menu</h1>
            <div class="row menu">
                <div class="col-md-3 text-center">
                    <a href="balance"><div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <h3>Account Information</h3>
                    <p>I am interested in this position as it appeals directly to my passion
                            for working with</p></a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="savings"><div class="icon">
                            <i class="fa fa-credit-card-alt"></i>
                    </div>
                    <h3>View Account</h3>
                    <p>I am interested in this position as it appeals directly to my passion
                        for working with</p></a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="installment"><div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3>My Instalment</h3>
                    <p>I am interested in this position as it appeals directly to my passion
                        for working with</p></a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="#promo"><div class="icon">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3>Loan Bond</h3>
                    <p>I am interested in this position as it appeals directly to my passion
                        for working with</p></a>
                </div>
            </div>
        </div>        
    </section>
    <!-- Offer -->
    <section id="offer">
        <div class="container">
            <h1>What Makes Us Unique</h1>
            <div class="row equal offset-md-1">
                <div class="col-md-3">
                    <p class="title-name">Our Vission</p>
                </div>
                <div class="col-md-8 offer">
                    <p>I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                    </p>
                </div>
            </div>
            <div class="row equal offset-md-1">
                <div class="col-md-3">
                    <p class="title-name">Our Mission</p>
                </div>
                <div class="col-md-8 offer">
                    <p>I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                    </p>
                </div>
            </div>
            <div class="row equal offset-md-1">
                <div class="col-md-3">
                    <p class="title-name">Values</p>
                </div>
                <div class="col-md-8 offer">
                    <p>I am interested in this position as it appeals directly to my passion for working with 
                        numbers, interacting with people, computer, practical tools, equipment and machines and 
                    </p>
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
    </script>
@endsection 