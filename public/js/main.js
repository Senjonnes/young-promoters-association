var login = document.getElementById("login");

login.onclick = function () {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "oluwaseun" && password == "oluwaseun") {
        alert("Login succesful");
        window.location = "home.php";
    } else {
        alert("Incorrect username or password");
    }
}

function printcontent(el) {
    var restorepage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = restorepage;
}
