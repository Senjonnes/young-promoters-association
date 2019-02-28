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
                  <a class="nav-link" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bankbalance">Balance</a>
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
                            @foreach($members as $member)
                                <option>{{$member->name}}</option>
                            @endforeach
                        </select>
                    </form>
                    <a href="loanbond.php" class="btn btn-primary">Get Loan Bond</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Entry -->
    <section id="entry">
        <div class="open-button">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">New Entry</button>
        </div>
        <div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Create New Entry</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" id="thedate" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="savings">Members' Savings</label>
                                    <input type="number" name="savings" class="form-control" id="themembersavings" placeholder="Members Savings">
                                </div>
                                <div class="form-group">
                                    <label for="fee">Entrance Fee</label>
                                    <input type="number" name="fee" class="form-control" id="theentrancefee" placeholder="Entrance Fee">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="installment">Instalment</label>
                                    <input type="number" name="instalment" class="form-control" id="theinstalment" placeholder="Installment">
                                </div>
                                <div class="form-group">
                                    <label for="interest">Fines</label>
                                    <input type="number" name="interest" class="form-control" id="thefines" placeholder="Fines">
                                </div>
                                <div class="form-group">
                                    <label for="sundry">Shop</label>
                                    <input type="number" name="sundry" class="form-control" id="theshop" placeholder="Shop">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="deposit">Expenditure</label>
                                    <input type="number" name="deposit" class="form-control" id="theexpenditure" placeholder="Expenditure">
                                </div>
                                <div class="form-group">
                                    <label for="expendicture">Loan</label>
                                    <input type="number" name="expendicture" class="form-control" id="theloan" placeholder="Loan">
                                </div>
                                <div class="form-group">
                                    <label for="loan">Balance</label>
                                    <input type="number" name="loan" class="form-control" id="thebalance" placeholder="Balance">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-group" id="base2">
                                <label for="comment">Comment</label>
                                <input type="text" name="comment" class="form-control" id="thecomment" placeholder="Comment">
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" onclick="addEntry()">Add Entry</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cash Balance Sheet Table -->
    <section id="table">
        <div class="con">
            <h1>Cash/Bank Balance Sheet</h1>
            <div class="index-table">
                <p>Select Number of Rows</p>
                <table id="balanceTable" class="table table-responsive table-striped table-bordered table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Dates</th>
                            <th>Members Savings</th>
                            <th>Entrance Fees</th>
                            <th>Instalment</th>
                            <th>Fines</th>
                            <th>Shop</th>
                            <th>Exp.</th>
                            <th>Loan</th>
                            <th>Balance</th>
                            <th>Comments</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tt">
                    @foreach($balances as $balance)
                    <tr>
                        <td><span class="txt spandates"><script>document.write(new Date("{{$balance->dates}}").toString('dd/MM/yyyy'))</script></span><input type="date" class="form-control dates txtbox" value="{{$balance->dates}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanmembersavings">{{$balance->membersavings}}</span><input type="number" class="form-control membersavings txtbox" value="{{$balance->membersavings}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanentrancefees">{{$balance->entrancefees}}</span><input type="number" class="form-control entrancefees txtbox" value="{{$balance->entrancefees}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spaninstalment">{{$balance->instalment}}</span><input type="number" class="form-control instalment txtbox" value="{{$balance->instalment}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanfines">{{$balance->fines}}</span><input type="number" class="form-control fines txtbox" value="{{$balance->fines}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanshop">{{$balance->shop}}</span><input type="number" class="form-control shop txtbox" value="{{$balance->shop}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanexpendictures">{{$balance->expendictures}}</span><input type="number" class="form-control expendictures txtbox" value="{{$balance->expendictures}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanloan">{{$balance->loan}}</span><input type="number" class="form-control loan txtbox" value="{{$balance->loan}}" style="display:none"></td>
                        <td class="text-right"><span class="txt spanbalance">{{$balance->balance}}</span><input type="number" class="form-control balance txtbox" value="{{$balance->balance}}" style="display:none"></td>
                        <td><span class="txt spancomment">{{$balance->comment}}</span><input type="text" class="form-control comment txtbox" value=" comment" style="display:none"></td>
                        <td>
                            <input type="hidden" class="id" value="{{$balance->id}}">
                            <div class="btn-group" role="group" style="display:flex;">
                                <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                            </div>
                            
                            <div class="btn-group" role="group" style="display:flex;">
                                <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach       
                    </tbody>
                </table>
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
    <script src="js/main.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <!-- <script src="js/bootstable.js"></script> -->
    <script>
        // var scroll = new SmoothScroll('a[href*="#"]');
        let dataTable=$(document).ready( function () {
            $('#balanceTable').DataTable({
                "order": [] //Don't order it by any column by default. Bring it out as it is ordered in the database 
            });
        });

        // $(document).ready( function () {
        //     $('#balanceTable').DataTable();
        // });

        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });

        // FOR THE MODAL ENTRY
        function addEntry() {
            let thedate = document.getElementById("thedate").value;
            let themembersavings = document.getElementById("themembersavings").value;
            let theentrancefee = document.getElementById("theentrancefee").value;
            let theinstalment = document.getElementById("theinstalment").value;
            let theloan = document.getElementById("theloan").value;
            let thefines = document.getElementById("thefines").value;
            let theshop = document.getElementById("theshop").value;
            let theexpenditure = document.getElementById("theexpenditure").value;
            let thebalance = document.getElementById("thebalance").value;
            let thecomment = document.getElementById("thecomment").value;

            axios.post('balance', {
                thedate: thedate,
                themembersavings : themembersavings,
                theentrancefee: theentrancefee,
                theinstalment: theinstalment,
                theloan: theloan,
                thefines: thefines,
                theshop: theshop,
                theexpenditure: theexpenditure,
                thebalance: thebalance,
                thecomment: thecomment,
            }).then(function(response){
                console.log(response);

                if(response.data.status==1){
                    alertify.set('notifier','delay', 5);
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Entry Added');
                }else if(response.data.status==0){
                    alertify.set('notifier','delay', 5);
                    alertify.set('notifier','position', 'top-right');
                    alertify.error('No Entry Added' + alertify.get('notifier',''));
                }
                
            }).catch(function(error){
                console.log(error);

                //Notification
                alertify.set('notifier','delay', 5);
                alertify.set('notifier','position', 'top-right');
                alertify.error('No Entry Added');
            });
        }


        function edit(obj){
            //Show all SPAN elements in the table
            showAllSpans();

            //hide all INPUT elements in the table
            hideAllInputs();

            //Hide all the update buttons
            hideAllUpdateBtn();

            //Hide all the cancel buttons
            hideAllCancelBtn();

            //Show all edit buttons
            showAllEditBtn();

            //Show all trash buttons
            showAllTrashBtn();

    
            //parent node 1 - div
            //parent node 2 - td
            //parent node 3- tr
            let theparentnode=obj.parentNode.parentNode.parentNode; //tr

            //Get all the INPUT elements under that particular parent node
            let inputs=theparentnode.getElementsByTagName('INPUT');

            //Unhide each INPUT element
            for (let i = 0; i < inputs.length; i++) {
                let element = inputs[i];
                element.style.display = "block";
            }
            
            //Get all the SPAN elements under that particular parent node
            let spans = theparentnode.getElementsByTagName('SPAN');

            //hide each SPAN element
            for (let i = 0; i < spans.length; i++) {
                let element = spans[i];
                element.style.display = "none";
            }

            //Get these buttons
            let editbtn=obj;
            let trashbtn=theparentnode.getElementsByClassName("trash")[0];
            let updatebtn=theparentnode.getElementsByClassName("update")[0];
            let cancelbtn=theparentnode.getElementsByClassName("cancel")[0];

            //Show these buttons
            updatebtn.style.display = "block";
            cancelbtn.style.display = "block";

            //Hide these buttons
            editbtn.style.display = "none";
            trashbtn.style.display = "none";

        }

        function hideAllInputs(){
            //Get all INPUT elements in the table
            let inputs=document.getElementById("balanceTable").getElementsByTagName("INPUT");

            //Hide each INPUT elements
            for (let i = 0; i < inputs.length; i++) {
                let element = inputs[i];
                element.style.display = "none";
            }
        }

        function showAllSpans() {
            //Get all SPAN elements in the table
            let spans = document.getElementById("balanceTable").getElementsByTagName("SPAN");

            //Show each SPAN element
            for (let i = 0; i < spans.length; i++) {
                let element = spans[i];
                element.style.display = "block";
            }
        }

        function hideAllUpdateBtn(){
            //Get all buttons with class name "update" in the table
            let updatebtns = document.getElementById("balanceTable").getElementsByClassName("update");

            //Hide each 
            for (let i = 0; i < updatebtns.length; i++) {
                let element = updatebtns[i];
                element.style.display = "none";
            }
        }

        function hideAllCancelBtn(){
            //Get all buttons with class name "cancel" in the table
            let cancelbtns = document.getElementById("balanceTable").getElementsByClassName("cancel");

            //Hide each 
            for (let i = 0; i < cancelbtns.length; i++) {
                let element = cancelbtns[i];
                element.style.display = "none";
            }
        }

        function showAllEditBtn(){
            //Get all buttons with class name "edit" in the table
            let editbtns = document.getElementById("balanceTable").getElementsByClassName("edit");

            //Show each 
            for (let i = 0; i < editbtns.length; i++) {
                let element = editbtns[i];
                element.style.display = "block";
            }
        }

        function showAllTrashBtn(){
            //Get all buttons with class name "delete" in the table
            let trashbtns = document.getElementById("balanceTable").getElementsByClassName("trash");

            //Show each 
            for (let i = 0; i < trashbtns.length; i++) {
                let element = trashbtns[i];
                element.style.display = "block";
            }
        }

        function cancel(obj){
            //parent node 1 - div
            //parent node 2 - td
            //parent node 3- tr
            let theparentnode = obj.parentNode.parentNode.parentNode; //tr

            //Get all the INPUT elements under that particular parent node
            let inputs = theparentnode.getElementsByTagName('INPUT');

            //hide each INPUT element
            for (let i = 0; i < inputs.length; i++) {
                let element = inputs[i];
                element.style.display = "none";
            }

            //Get all the SPAN elements under that particular parent node
            let spans = theparentnode.getElementsByTagName('SPAN');

            //show each SPAN element
            for (let i = 0; i < spans.length; i++) {
                let element = spans[i];
                element.style.display = "block";
            }

            //Get these buttons
            let cancelbtn = obj;
            let editbtn = theparentnode.getElementsByClassName("edit")[0];
            let trashbtn = theparentnode.getElementsByClassName("trash")[0];
            let updatebtn = theparentnode.getElementsByClassName("update")[0];

             //Hide these buttons
            updatebtn.style.display = "none";
            cancelbtn.style.display = "none";

            //Show these buttons
            editbtn.style.display = "block";
            trashbtn.style.display = "block";
        }

        function update(obj){
            //debugger;
            //parent node 1 - div
            //parent node 2 - td
            //parent node 3- tr
            let theparentnode = obj.parentNode.parentNode.parentNode; //tr

            //Get what is inside each of the textboxes
            let id=theparentnode.getElementsByClassName('id')[0].value;
            let dates=theparentnode.getElementsByClassName('dates')[0].value;
            let membersavings=theparentnode.getElementsByClassName('membersavings')[0].value;
            let entrancefees=theparentnode.getElementsByClassName('entrancefees')[0].value;
            let instalment=theparentnode.getElementsByClassName('instalment')[0].value;
            let fines=theparentnode.getElementsByClassName('fines')[0].value;
            let shop=theparentnode.getElementsByClassName('shop')[0].value;
            let expendictures=theparentnode.getElementsByClassName('expendictures')[0].value;
            let loan=theparentnode.getElementsByClassName('loan')[0].value;
            let balance=theparentnode.getElementsByClassName('balance')[0].value;
            let comment=theparentnode.getElementsByClassName('comment')[0].value;

            //console.log("EF: "+ id);

            axios.post('updatebalance', {
                id: id,
                date : dates,
                membersavings: membersavings,
                entrancefees: entrancefees,
                instalment: instalment,
                fines: fines,
                shop: shop,
                expendictures: expendictures,
                loan: loan,
                balance: balance,
                comment: comment
            }).then(function(response){
                console.log(response);

                if(response.data.status==1){
                    //Update the SPANS with the new values
                    theparentnode.getElementsByClassName('spandates')[0].innerHTML = new Date(dates).toString('dd/MM/yyyy');
                    theparentnode.getElementsByClassName('spanmembersavings')[0].innerHTML=membersavings;
                    theparentnode.getElementsByClassName('spanentrancefees')[0].innerHTML=entrancefees;
                    theparentnode.getElementsByClassName('spaninstalment')[0].innerHTML=instalment;
                    theparentnode.getElementsByClassName('spanfines')[0].innerHTML=fines;
                    theparentnode.getElementsByClassName('spanshop')[0].innerHTML=shop;
                    theparentnode.getElementsByClassName('spanexpendictures')[0].innerHTML=expendictures;
                    theparentnode.getElementsByClassName('spanloan')[0].innerHTML=loan;
                    theparentnode.getElementsByClassName('spanbalance')[0].innerHTML=balance;
                    theparentnode.getElementsByClassName('spancomment')[0].innerHTML=comment;

                    //Notification
                    alertify.set('notifier','delay', 5);
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Updated');
                }else if(response.data.status==0){
                    //Notification
                    alertify.set('notifier','delay', 5);
                    alertify.set('notifier','position', 'top-right');
                    alertify.error('Not Updated');
                }
                
            }).catch(function(error){
                console.log(error);

                //Notification
                alertify.set('notifier','delay', 5);
                alertify.set('notifier','position', 'top-right');
                alertify.error('Not Updated');
            });

            //Get all the INPUT elements under that particular parent node
            let inputs = theparentnode.getElementsByTagName('INPUT');

            //hide each INPUT element
            for (let i = 0; i < inputs.length; i++) {
                let element = inputs[i];
                element.style.display = "none";
            }

            //Get all the SPAN elements under that particular parent node
            let spans = theparentnode.getElementsByTagName('SPAN');

            //show each SPAN element
            for (let i = 0; i < spans.length; i++) {
                let element = spans[i];
                element.style.display = "block";
            }

            //Get these buttons
            let updatebtn = obj;
            let cancelbtn = theparentnode.getElementsByClassName("cancel")[0];
            let editbtn = theparentnode.getElementsByClassName("edit")[0];
            let trashbtn = theparentnode.getElementsByClassName("trash")[0];

             //Hide these buttons
            updatebtn.style.display = "none";
            cancelbtn.style.display = "none";

            //Show these buttons
            editbtn.style.display = "block";
            trashbtn.style.display = "block";
        }

        function deleteo(obj){
            //Prompt the user to be sure he/she wants to delete
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this record",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    //parent node 1 - div
                    //parent node 2 - td
                    //parent node 3- tr
                    let theparentnode = obj.parentNode.parentNode.parentNode; //tr

                    let id=theparentnode.getElementsByClassName('id')[0].value;

                    axios.post('deletebalance', {
                        id: id,
                    }).then(function(response){
                        console.log(response);
                        if(response.data.status==1){
                            //Remove the tr
                            theparentnode.remove();
                            
                            //Notification
                            alertify.set('notifier','delay', 5);
                            alertify.set('notifier','position', 'top-right');
                            alertify.success('Deleted');
                            
                        }else if(response.data.status==0){
                            alertify.set('notifier','delay', 5);
                            alertify.set('notifier','position', 'top-right');
                            alertify.error('Not Deleting');
                        }
                    }).catch(function(error){
                        console.log(error);
                    });
                }
            });
            
        }
    </script>
@endsection 
