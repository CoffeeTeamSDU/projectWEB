function change(element){
    var a = element.innerHTML;
    var x = document.getElementById("myBR");

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

            function load(){
                $(".img").animate({opacity: '1'}, "slow")
            }
