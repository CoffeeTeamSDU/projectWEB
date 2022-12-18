function change(element){
    var a = element.innerHTML;
    var x = document.getElementById("myBR");
    switch(a){
        case "Alibek":
            $("#img").css({opacity: 0, left: '25px'});
            $("#img").animate({left:'-=25px',opacity:0},"fast");
            document.getElementById("img").src="cat_01.jpg";
            $("#img").animate({left:'+=25px',opacity:1});
            break;
        case "Bekasyl":
            $("#img").css({opacity: 0, left: '25px'});
            $("#img").animate({left:'-=25px',opacity:0},"fast");
            document.getElementById("img").src="cat1.jpg";
            $("#img").animate({left:'+=25px',opacity:1});
            break;
        case "Daniyar":
            $("#img").css({opacity: 0, left: '25px'});
            $("#img").animate({left:'-=25px',opacity:0},"fast");
            document.getElementById("img").src="cat2.jpg";
            $("#img").animate({left:'+=25px',opacity:1});
            break;
    }
    
}

            function load(){
                $(".text").animate({opacity: '1'}, "slow")
            }
        