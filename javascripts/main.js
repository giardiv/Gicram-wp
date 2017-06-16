$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top + 200;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    if(elementBottom > viewportTop && elementTop < viewportBottom){
        return $(this);
    }
    return false;
};

$(function() {
    // Manual SS
    $(".manual-ss-controls img").click(function(){
      var id = $(this).data("to");
      $(".manual-ss-img").fadeOut();
      console.log(".manual-ss-img:nth-child("+id+")");
      $(".manual-ss-img:nth-child("+id+")").fadeIn();
    })

    // HEADER
    var hd = {
        'from' : 0,
        'to' : 300,
        'padding' : {
            'from' : 10,
            'to' : 5
        },
        'height' : {
            'from' : 60,
            'to' : 30
        },
        'marginTop' : {
            'from' : 0,
            'to' : -230
        },
        'right' : {
            'from' : -100,
            'to' : 0
        },
        'opacity' : {
            'from' : 0,
            'to' : 1
        },
        'logomargin' : {
            'from' : 36,
            'to' : 0
        }
    }
    function getHdValue(at){
        return (hd[at]['to'] - hd[at]['from'])/(hd['to'] - hd['from']) * $(window).scrollTop() + hd[at]['from'];
    }
    $(window).scroll(function(){
        if($(window).scrollTop() < hd['to'] &&  $(window).scrollTop() > hd['from']){
            $("#header").css("padding", getHdValue('padding') + "px 0px");
            $("#logo img").css({"height" : getHdValue("height"), "marginTop" : getHdValue("logomargin")});
            $("header nav").css("marginTop", getHdValue('marginTop'));
            $("#menu-btn").css("right", getHdValue("right"));
            $("#header-bg").css({ opacity : getHdValue("opacity") });
        }
        if($(window).scrollTop() < 3){
            $("#header").css("padding", hd['padding']['from'] + "px 0px");
            $("#logo img").css({"height" : hd['height']['from'], "marginTop" : hd['logomargin']['from']});
            $("header nav").css("marginTop", hd['marginTop']['from']);
            $("#menu-btn").css("right", hd['right']['from']);
            $("#header-bg").css({ opacity : hd['opacity']['from'] });
        }
        if($(window).scrollTop() > 300){
            $("#header").css("padding", hd['padding']['to'] + "px 0px");
            $("#logo img").css({"height" : hd['height']['to'], "marginTop" : hd['logomargin']['to']});
            $("header nav").css("marginTop", hd['marginTop']['to']);
            $("#menu-btn").css("right", hd['right']['to']);
            $("#header-bg").css({ opacity : hd['opacity']['to'] });
        }

        $.each($(".animated, .top-animated-b"), function(){
            //margin = 200;
            if( $(this).isInViewport() ){
                $(this).delay(600).removeClass("left-animated");
                $(this).delay(600).removeClass(
                    "top-animated"
                );
            }
        })
    })
    $("#menu-btn").click(function(){
        $("#header").animate({
            padding: hd['padding']['from'] + "px 0px"
        });
        $("#logo img").animate({"height" : hd['height']['from'], "marginTop" : hd['logomargin']['from']});
        $("header nav").animate({marginTop: hd['marginTop']['from'] });
        $("#menu-btn").animate({right: hd['right']['from'] });
    })
    $("#nav-sf").click(function(){
      if($("#ul-nav-sf").css("opacity") == 0){
        $("#ul-nav-sf").animate({
            width : "175px",
            padding : "0 20px",
            //opacity : "0.2"
        },300,function(){
            $("#ul-nav-sf").animate({
                opacity : "1"
            },300)
        })
        }else{
            $("#ul-nav-sf").animate({
                opacity : "0"
            },300,function(){
                $("#ul-nav-sf").animate({
                    width : "0px",
                    padding : "0px",
                    //opacity : "0.2"
                },300)
            })
        }
    })
});
