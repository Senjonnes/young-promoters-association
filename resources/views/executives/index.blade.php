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
            <p>EXECUTIVES</p>
        </div>
    </section>
    <!-- Executives Tables -->
    <section id="savings-table">
        <h1 style="padding: 30px 0px 10px 0px;">Modify Executives</h1>
        <div class="container">
            <div class="account-table">
                <p class="row-num">Select Number of Rows</p>
                <table id="savingsTable" class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Name</th>
                            <th>Position</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>LinkedIn</th>
                            <th>Picture</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($executives as $executive)
                        <tr>
                            <td class="text-left"><span class="txt spanname">{{$executive->name}}</span><input type="text" class="form-control name txtbox" value="{{$executive->deposit}}" style="display:none"></td>
                            <td class="text-left"><span class="txt spanposition">{{$executive->position}}</span><input type="text" class="form-control position txtbox" value="{{$executive->deposit}}" style="display:none"></td>
                            <td class="text-left"><span class="txt spanfacebook">{{$executive->facebook}}</span><input type="text" class="form-control facebook txtbox" value="{{$executive->deposit}}" style="display:none"></td>
                            <td class="text-left"><span class="txt spantwitter">{{$executive->twitter}}</span><input type="text" class="form-control twitter txtbox" value="{{$executive->withdrawal}}" style="display:none"></td>
                            <td class="text-left"><span class="txt spanlinkedin">{{$executive->linkedin}}</span><input type="text" class="form-control linkedin txtbox" value="{{$executive->balance}}" style="display:none"></td>
                            <td class="text-left"><span class="txt spanpicture">{{$executive->picture}}</span><input type="text" class="form-control picture txtbox" value="{{$executive->balance}}" style="display:none"></td>
                            <td>
                                <input type="hidden" class="id" value="{{$executive->id}}">
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
    <script>
        $(document).ready( function () {
            $('#savingsTable').DataTable();
        });
        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });

        
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
            let name=theparentnode.getElementsByClassName('name')[0].value;
            let position=theparentnode.getElementsByClassName('position')[0].value;
            let facebook=theparentnode.getElementsByClassName('facebook')[0].value;
            let twitter=theparentnode.getElementsByClassName('twitter')[0].value;
            let linkedin=theparentnode.getElementsByClassName('linkedin')[0].value;
            let picture=theparentnode.getElementsByClassName('picture')[0].value;

            //console.log("EF: "+ id);

            axios.post('api/updatebalance', {
                id: id,
                nmae : nmae,
                position: position,
                facebook: facebook,
                twitter: twitter,
                linkedin: linkedin,
                picture: picture
            }).then(function(response){
                console.log(response);

                if(response.data.status==1){
                    //Update the SPANS with the new values
                    theparentnode.getElementsByClassName('spanname')[0].innerHTML=name;
                    theparentnode.getElementsByClassName('spanposition')[0].innerHTML=position;
                    theparentnode.getElementsByClassName('spanfacebook')[0].innerHTML=facebook;
                    theparentnode.getElementsByClassName('spantwitter')[0].innerHTML=twitter;
                    theparentnode.getElementsByClassName('spanlinkedin')[0].innerHTML=linkedin;
                    theparentnode.getElementsByClassName('spanpicture')[0].innerHTML=picture;

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