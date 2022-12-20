function load(){
        $(".img").animate({opacity: '1'}, "slow")
        $(".p1").animate({left:'+=100px'}, "fast");
        $(".p1").animate({left:'-=100px'}, "fast");
        $(".p2").animate({left:'-=100px'}, "fast");
        $(".p2").animate({left:'+=100px'}, "fast");
        $(".p3").animate({left:'+=100px'}, "fast");
        $(".p3").animate({left:'-=100px'}, "fast");
        $(".p4").animate({left:'-=100px'}, "fast");
        $(".p4").animate({left:'+=100px'}, "fast");
        $(".p5").animate({left:'+=100px'}, "fast");
        $(".p5").animate({left:'-=100px'}, "fast");
}

window.addEventListener('scroll', handleScroll);
function handleScroll() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;  
    var scrolled = (winScroll / height) * 100;

    document.getElementById("progressBar").style.width = scrolled + "%";
}

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