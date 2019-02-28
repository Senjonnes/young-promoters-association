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
    <!-- Loan Bond -->
    <section id="loanbond">
        <div class="container">
            <h1>Loan Bond</h1>
            <div class="row">
                <div class="col-md-2 offset-md-11 print-icon" onclick="printcontent('page-print')">
                    <a href="#" >Print Page <i class="fa fa-print"></i></a>
                </div>
            </div>
            <div class="row">
                <article class="letter" id="page-print">
                    <h4 class="text-center">LOAN BOND</h4>
                    <div class="text-justify">
                        <p>This Loan Bomd is made and executed on this <b>17th</b> day of <b>July 2018 </b> between: 
                        <b>YOUNG PROMOTERS NIG. LTD. </b>Hereinafter called the <i><b>Lender </b></i> (on the first part) 
                        <b>AND </b><b>OLANREWAJU TIMOTHY </b>of <b>A146 AJEBANDELE STREET IPETUMODU OSUN STATE</b> hereinafter called the 
                        <i><b>Borrower </b></i>(on the Second Part)</p>
                        <p>Whereas the <i><b>Borrower </b></i>has applied for a Loan of <b>TWO MILLION NAIRA ONLY N</b><b> 2,000,000</b> 
                            with 15% interest which shall be repayable in instalments as specified below:</p>
                        <div class="row text-left">
                            <div class="col-xs-4">
                                <table class="table table-borderless table-responsive statement1">
                                    <thead>
                                        <tr>
                                            <td><i>Year of Payment:</i></td>
                                            <td><b>TWO YEARS</b></td>
                                        </tr>
                                        <tr>
                                            <td><i>Date of First Installment:</i></td>
                                            <td><b>31/07/2018</b></td>
                                        </tr>
                                        <tr>
                                            <td><i>Interest Rate:</i></td>
                                            <td><b>15% (N300,000)</b></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-xs-4">
                                <table class="table table-borderless table-responsive statement1">
                                    <thead>
                                        <tr>
                                            <td><i>Amount of Installment:</i></td>
                                            <td><b>FIFTY THOUSAND NAIRA</b></td>
                                        </tr>
                                        <tr>
                                            <td><i>Date of Last Instalment:</i></td>
                                            <td><b>31/07/2020</b></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <p>And whereas the sureties have agreed to give security for the above loan and the <i><b>Borrower </b></i>has 
                        agreed to advance the loan on such security.</p>
                        <p class="paragraph"><b>NOW THIS BOND WITNESS AS UNDER:</b></p>
                        <div class="col-md-12 follow-paragraph">
                            <ol>
                                <li>That in pursuance of the said agreement the <i><b>Borrower </b></i>has collected the sum of <b>TWO MILLION, THREE 
                                HUNDRED THOUSAND NAIRA ONLY N2,300,000</b> with 15% interest from the <i><b>Lender</b></i></li>
                                <li>The <i><b>Borrower </b></i>and sureties have jointly and severally agreed with the <i><b>Lender </b></i>that the <i><b>Borrower 
                                </b></i>and the sureties are jointly and severally responsible for repayment of the above amount in <b>N50,000</b> equal 
                                instalments with interest on <b>B1</b> yearly basis</li>
                                <li>That in case of failure to pay any instalment or part thereof with interest, the borrowed amount alongside with interest
                                shall become repayable at once and the <i><b>Borrower</b> and the sureties shall be jointly and severally liable to pay the same.</i></li>
                                <li>That the vehicle purchased with the loan collcted has the following identifications:<br>
                                    <i><b>Chasis Number:</b></i>_______________________________________<br>
                                    <i><b>Engine Number:</b></i>_______________________________________<br>
                                    <i><b>Registration (Plate No):</b></i>_________________________________<br>
                                    <i><b>Make:</b></i>________________________________________________<br>
                                    <i><b>Model:</b></i>_______________________________________________</li>
                                <li>The the <i><b>Borrower</b></i> and the sureties hereby decalare that the said property belongs to the Company until the payment of 
                                    the last instalment is made.</li>
                                <li>That the period of six (6) months shall be given to the <i><b>Borrower</b></i> and Sureties to pay the failed instalment after the 
                                    expiration of the last instalment</li>
                                <li>That it is hereby agreed and decalared that in case of failure on the part of <i><b>Borrower</b></i> to repay the instalment after 
                                    the expiration of the given period of six months, the <i><b>Lender</b></i> shall be entitled to dispose (sell) the purchsed property in 
                                    part or full to recover the principal amount and interest.
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-4 text-right offset-md-7">
                            <p>_________________________________</p>
                            <p>Borrower's Sign & Date</p>
                        </div>
                        <div class="row signatory">
                            <div class="col-xs-4">
                                <table class="table table-borderless table-responsive statement1">
                                    <thead>
                                        <tr>
                                            <td><b>FIRST SURETY:</b></td>
                                        </tr>
                                        <tr>
                                            <td>Name:______________________________________</td>
                                        </tr>
                                        <tr>
                                            <td>Signature:___________________ Date:___________</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-xs-4">
                                <table class="table table-borderless table-responsive statement1">
                                    <thead>
                                        <tr>
                                            <td><b>SECOND SURETY:</b></td>
                                        </tr>
                                        <tr>
                                            <td>Name:______________________________________</td>
                                        </tr>
                                        <tr>
                                            <td>Signature:___________________ Date:___________</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="row text-justify declaration">
                            <div class="col-md-12">
                                <p><b>DECLARATION:</b></p>
                                <p>We, the above noted have sihned this deed on the date and place mentioned above, after fully 
                                    understanding the contents of this deed of Agreement.
                                </p>
                            </div>
                        </div>
                        <div class="text-center official">
                            <p><i><b>For Official Use Only</b></i></p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <p>___________________________</p>
                                <p>Chairman</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>___________________________</p>
                                <p>Secretary</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>___________________________</p>
                                <p>Treasurer</p>
                            </div>
                        </div>
                    </div>
                </article>
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
    </script>
@endsection