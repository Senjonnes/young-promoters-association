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
                    <a class="nav-link" href="home.php ">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGOUT</a>
                </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Promo -->
    <section id="promo">
        <div class="container">
            <p>Get Member's Loan Bond</p>
            <div class="row">
                <div class="col-md-6 text-center" style="margin:auto;">
                    <form>
                        <select class="chosen-select" style="width: 100%">
                            <option disabled selected>Member's Name</option>
                            @foreach($members as $members)
                                <option>{{$members->name}}</option>
                            @endforeach
                        </select>
                    </form>
                    <a href="loanbond.php" class="btn btn-primary">Get Loan Bond</a>
                </div>
            </div>
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