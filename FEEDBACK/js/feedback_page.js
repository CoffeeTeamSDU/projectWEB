
var elem = document.getElementById("btnback");
btnback.onclick = function myFunction() {
    if(document.body.style.backgroundColor) {
        document.body.style.backgroundColor = "";
        document.getElementById("btnback2").innerHTML = "☀️";
        document.getElementById("btnback").innerHTML = "☀️";
    }
    else{
        document.getElementById("btnback2").innerHTML = "☕";
        document.getElementById("btnback").innerHTML = "☕";
        document.body.style.backgroundColor = "#fff";  
    }
}

var elem2 = document.getElementById("btnback2");
btnback2.onclick = function myFunction() {
    if(document.body.style.backgroundColor) {
        document.body.style.backgroundColor = "";
        document.getElementById("btnback").innerHTML = "☀️";
        document.getElementById("btnback2").innerHTML = "☀️";
    }
    else{
        document.getElementById("btnback").innerHTML = "☕";
        document.getElementById("btnback2").innerHTML = "☕";
        document.body.style.backgroundColor = "#fff";     
    }
}
