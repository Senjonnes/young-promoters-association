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
            <div class="row">
                <div class="col-md-6">
                    <img src="img/n.jpg" class="img-responsive rounded-circle"><span style="font-size: 40px;"> {{ Auth::user()->user_type==1 ? 'ADMIN' : Auth::user()->name }}</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div style="background-color: #fff;" class="col-md-6 offset-md-3 user-details">
                    <div class="row">
                        <div class="col-auto" style="padding: 10px 0px 10px 20px;">
                            <p style="color: #333;">Account Balance</p>
                        </div>
                        <div class="col" style="padding: 10px 10px 10px 10px;"><hr class="border"></div>
                        <div class="col-auto text-right" style="padding: 10px 20px 10px 0px;">
                            <p style="color: #0d75e4;;">&#8358; 400,000</p>
                        </div>
                    </div>
                    <div class="row" style="padding: 0px 0px 0px 20px; font-size: 24px;">
                        <p style="font-weight: bold; color: #333;">Summary</p>
                    </div>
                    <div class="row">
                        <div class="col-auto" style="color:#333; padding: 0px 0px 0px 20px; font-size: 18px;">Details</div>
                        <div class="col"><hr class="border"></div>
                    </div>
                    <div class="row">
                        <table style="margin-left: 40px!important; width: 100%;">
                            <tr>
                                <td>Profile Picture:</td>
                                <td style="font-weight: bold;"><img style="height: 150px;" src="img/n.jpg" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>Full Name:</td>
                                <td style="font-weight: bold;">{{ Auth::user()->user_type==1 ? 'ADMIN' : Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Email Adress:</td>
                                <td style="font-weight: bold;">odeyemioluwaseun@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Phome Number:</td>
                                <td style="font-weight: bold;">07039347005</td>
                            </tr>
                            <tr>
                                <td>Contact Address:</td>
                                <td style="font-weight: bold;">1, Awonaike Street, Off Tejuosho Road, Yaba, Lagos</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-auto" style="padding: 0px 0px 0px 20px; font-size: 16px;"><a  data-target="#changePasswordModal" href="#">Change Password</a></div>
                        <div class="col"><hr class="border"></div>
                        <div class="col-auto" style="color:#333;"><a data-toggle="modal" data-target="#changePasswordModal" href="#"><i class="fa fa-edit"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-auto" style="padding: 0px 0px 0px 20px; font-size: 16px;"><a data-toggle="modal" data-target="#changeProfilePictureModal" href="#">Change Profile Picture</a></div>
                        <div class="col"><hr class="border"></div>
                        <div class="col-auto" style="color:#333;"><a data-toggle="modal" data-target="#changeProfilePictureModal" href="#"><i class="fa fa-edit"></i></a></div>
                    </div>
                    <div class="text-right" style="margin: 10px -15px 10px 0px;">
                        <div class="col-auto" style="color:#333;"><a data-toggle="modal" data-target="#loginModal" href="#">Edit <i class="fa fa-edit"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Entry -->
    <section id="entry">
        <div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog modal-fluid">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h3 class="modal-title">Edit Profile</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="number">Phone Number</label>
                                        <input type="text" name="number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Address</label>
                                        <input type="text" name="contact" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" onclick="addNewEntry()">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CHANGE PASSWORD -->
    <section id="change-password">
        <div class="modal fade" role="dialog" id="changePasswordModal">
            <div class="modal-dialog modal-fluid">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h3 class="modal-title">Change Password</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="modal-body">
                                    <div class="form-group change-password" >
                                        <label for="password">Old Password</label>
                                        <input style="padding-left: 40px;" type="password" name="password" class="form-control">
                                        <i class="fa fa-lock fa-fw"></i>
                                    </div>
                                    <div class="form-group change-password" >
                                        <label for="email">New Password</label>
                                        <input style="padding-left: 40px;" type="password" name="password" class="form-control">
                                        <i class="fa fa-lock fa-fw"></i>
                                    </div>
                                    <div class="form-group change-password" >
                                        <label for="password">Confirm New Password</label>
                                        <input style="padding-left: 40px;" type="password" name="password" class="form-control">
                                        <i class="fa fa-lock fa-fw"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" onclick="addNewEntry()">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CHANGE PROFILE PICTURE -->
    <section id="change-profile-pictures">
        <div class="modal fade" role="dialog" id="changeProfilePictureModal">
            <div class="modal-dialog modal-fluid">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h3 class="modal-title">Change Profile Picture</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin: 10px auto 0px;">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <button id="login" type="submit" name="submit" class="btn btn-primary btn-block" style="border-radius:0!important;">
                                            Choose Picture <span><i class="fa fa-edit"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin-left: auto;">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <button id="login" type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: red!important; border-radius:0!important;">
                                            Remove Picture <span><i class="fa fa-edit"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" onclick="addNewEntry()">Update Profile Picture</button>
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
    <script>
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