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
                    <a class="nav-link" href="home.php">HOME</a>
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
    <!-- Change Admin Info -->
    <section id="change-details">
        <div class="container">
            <h1>Change Admin</h1>
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <div class="form-group">
                        <label for="email">Current Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Current Email">
                    </div>
                    <div class="form-group">
                        <label for="username">New Username/Maintain Previous one</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="New Password">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">New Email</label>
                        <input type="email" name="email" class="form-control" placeholder="New Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Current Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-5">
                    <button type="submit" class="btn btn-primary">CONFIRM CHANGE</button>
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