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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Add New Entry</button>
        </div>
        <div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog modal-fluid">
                <div class="modal-content">
                    <form method="post" action="{{url('savings')}}">
                        {{csrf_field()}}
                        <div class="modal-header">
                            <h3 class="modal-title">New Savings Entry</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="Date" id="thedate">
                                    </div>
                                    <div class="form-group">
                                        <label for="particulars">Particulars</label>
                                        <input type="text" name="particulars" class="form-control" placeholder="Particulars" id="theparticular">
                                    </div>
                                    <input type="hidden" name="memberid" value="{{$memberr->id ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="withdraw">Withdrawal</label>
                                        <input type="number" name="withdraw" class="form-control" placeholder="Withdraw" id="thewithdrawal" onkeyup="disableTextField(this, 'thedeposit')">
                                    </div>
                                    <div class="form-group">
                                        <label for="deposit">Deposit</label>
                                        <input type="number" name="deposit" class="form-control" placeholder="Deposit" id="thedeposit" onkeyup="disableTextField(this, 'thewithdrawal')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" onclick="addNewEntry()">Add Entry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Members Savings -->
    <section id="member-savings">
        <div class="container">
            <h1>Members' Savings Account</h1>
            <div class="row">
                <div class="col-md-6 text-center" style="margin:auto;">
                    <form method="post" action="{{url('getsavings')}}">
                        {{csrf_field()}}
                        <select class="chosen-select" style="width: 100%" name="members_name">
                        <option disabled selected>Member's Name</option>
                            @foreach($members as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Show Account</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Memebers Savings table -->
    <section id="savings-table">
        <div class="container">
            <div class="row justify-content-start">
                    <div class="col-2">
                        <p class="account-name">Name:</p>
                        <p class="account-number">Account Number:</p>
                    </div>
                    <div class="col-2">
                        <p class="values">{{$memberr->name ?? ''}}</p>
                        <p class="values">{{$memberr->accountnumber ?? ''}}</p>
                    </div>
            </div>
            <div class="account-table">
                <p class="row-num">Select Number of Rows</p>
                <table id="savingsTable" class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Dates</th>
                            <th>Particulars</th>
                            <th>Withdrawal</th>
                            <th>Deposit</th>
                            <th>Balance</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($memberr))
                            @foreach($memberr->savings as $member_saving)
                                <tr>
                                    <td><span class="txt spandates"><script>document.write(new Date("{{$member_saving->dates}}").toString('dd/MM/yyyy'))</script></span><input type="date" class="form-control dates txtbox" value="{{$member_saving->dates}}" style="display:none"></td>
                                    <td><span class="txt spanparticulars">{{$member_saving->particulars}}</span><input type="text" class="form-control particulars txtbox" value="{{$member_saving->particulars}}" style="display:none"></td>
                                    <td class="text-right"><span class="txt spandeposit">{{$member_saving->deposit}}</span><input type="number" class="form-control deposit txtbox" value="{{$member_saving->deposit}}" style="display:none"></td>
                                    <td class="text-right"><span class="txt spanwithdrawal">{{$member_saving->withdrawal}}</span><input type="number" class="form-control withdrawal txtbox" value="{{$member_saving->withdrawal}}" style="display:none"></td>
                                    <td class="text-right"><span class="txt spanbalance">{{$member_saving->balance}}</span><input type="number" class="form-control balance txtbox" value="{{$member_saving->balance}}" style="display:none"></td>
                                    <td>
                                        <input type="hidden" class="id" value="{{$member_saving->id}}">
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
                        @else
                            <tbody>
                            
                            </tbody>
                        @endif                            
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
        var scroll = new SmoothScroll('a[href*="#"]');
        $(document).ready( function () {
            $('#savingsTable').DataTable();
        });
        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });
        // $('#savingsTable').SetEditable();

        function disableTextField(self,textFieldId){
            // debugger;
            var textField=document.getElementById(textFieldId);
            // alert(self.value);
            if(self.value.length==0){
                textField.disabled = false;
            }else if(self.value.length >= 1){
                textField.disabled = true;
            }
        }

        // FOR THE MODAL ENTRY
        function addEntry() {
            let thedate = document.getElementById("thedate").value;
            let theparticular = document.getElementById("theparticular").value;
            let thewithdrawal = document.getElementById("thewithdrawal").value;
            let thedeposit = document.getElementById("thedeposit").value;
            let thebalance = document.getElementById("thebalance").value;

            axios.post('api/addsavings', {
                thedate: thedate,
                theparticular : theparticular,
                thewithdrawal: thewithdrawal,
                thedeposit: thedeposit,
                thebalance: thebalance,
            }).then(function(response){
                console.log(response);

                if(response.data.status==1){
                    $.notify("Entry Added!", "success");
                }else if(response.data.status==0){
                    //Notification
                    $.notify("No Entry Added!", "error");
                }
                
            }).catch(function(error){
                console.log(error);

                //Notification
                $.notify("No Entry Added!", "error");
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
            let inputs=document.getElementById("savingsTable").getElementsByTagName("INPUT");

            //Hide each INPUT elements
            for (let i = 0; i < inputs.length; i++) {
                let element = inputs[i];
                element.style.display = "none";
            }
        }

        function showAllSpans() {
            //Get all SPAN elements in the table
            let spans = document.getElementById("savingsTable").getElementsByTagName("SPAN");

            //Show each SPAN element
            for (let i = 0; i < spans.length; i++) {
                let element = spans[i];
                element.style.display = "block";
            }
        }

        function hideAllUpdateBtn(){
            //Get all buttons with class name "update" in the table
            let updatebtns = document.getElementById("savingsTable").getElementsByClassName("update");

            //Hide each 
            for (let i = 0; i < updatebtns.length; i++) {
                let element = updatebtns[i];
                element.style.display = "none";
            }
        }

        function hideAllCancelBtn(){
            //Get all buttons with class name "cancel" in the table
            let cancelbtns = document.getElementById("savingsTable").getElementsByClassName("cancel");

            //Hide each 
            for (let i = 0; i < cancelbtns.length; i++) {
                let element = cancelbtns[i];
                element.style.display = "none";
            }
        }

        function showAllEditBtn(){
            //Get all buttons with class name "edit" in the table
            let editbtns = document.getElementById("savingsTable").getElementsByClassName("edit");

            //Show each 
            for (let i = 0; i < editbtns.length; i++) {
                let element = editbtns[i];
                element.style.display = "block";
            }
        }

        function showAllTrashBtn(){
            //Get all buttons with class name "delete" in the table
            let trashbtns = document.getElementById("savingsTable").getElementsByClassName("trash");

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
            let particulars=theparentnode.getElementsByClassName('particulars')[0].value;
            let withdrawal=theparentnode.getElementsByClassName('withdrawal')[0].value;
            let deposit=theparentnode.getElementsByClassName('deposit')[0].value;
            let balance=theparentnode.getElementsByClassName('balance')[0].value;

            //console.log("EF: "+ id);

            axios.post('api/updatebalance', {
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
                    $.notify("Updated!", "success");
                }else if(response.data.status==0){
                    //Notification
                    $.notify("Not updated!", "error");
                }
                
            }).catch(function(error){
                console.log(error);

                //Notification
                $.notify("Not updated!", "error");
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

                    axios.post('api/savingsTable', {
                        id: id,
                    }).then(function(response){
                        console.log(response);
                        if(response.data.status==1){
                            //Remove the tr
                            theparentnode.remove();
                            
                            //Notification
                            $.notify("Deleted!", "success");
                            
                        }else if(response.data.status==0){
                            $.notify("Error deleting!", "error");
                        }
                    }).catch(function(error){
                        console.log(error);
                    });
                }
            });
        }
    </script>
@endsection