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
            'from' : 30,
            'to' : 10
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
        }
    }
    function getHdValue(at){
        return (hd[at]['to'] - hd[at]['from'])/(hd['to'] - hd['from']) * $(window).scrollTop() + hd[at]['from'];
    }
    $(window).scroll(function(){
        if($(window).scrollTop() < hd['to'] &&  $(window).scrollTop() > hd['from']){
            $("#header").css("padding", getHdValue('padding') + "px 0px");
            $("#logo img").css("height", getHdValue("height"));
            $("header nav").css("marginTop", getHdValue('marginTop'));
            $("#menu-btn").css("right", getHdValue("right"));
            $("#header-bg").css({ opacity : getHdValue("opacity") });
        }
        if($(window).scrollTop() < 3){
            $("#header").css("padding", hd['padding']['from'] + "px 0px");
            $("#logo img").css("height", hd['height']['from']);
            $("header nav").css("marginTop", hd['marginTop']['from']);
            $("#menu-btn").css("right", hd['right']['from']);
            $("#header-bg").css({ opacity : hd['opacity']['from'] });
        }
        if($(window).scrollTop() > 300){
            $("#header").css("padding", hd['padding']['to'] + "px 0px");
            $("#logo img").css("height", hd['height']['to']);
            $("header nav").css("marginTop", hd['marginTop']['to']);
            $("#menu-btn").css("right", hd['right']['to']);
            $("#header-bg").css({ opacity : hd['opacity']['to'] });
        }

        $.each($(".animated"), function(){
            if( $(this).isInViewport() ){
                $(this).delay(600).removeClass("left-animated");
                $(this).delay(600).removeClass(
                    "top-animated-l-0 top-animated-2 top-animated-l-4" +
                    "top-animated-0 top-animated-r-2 top-animated-4" +
                    "top-animated-l-1 top-animated-3 top-animated-l-5" +
                    "top-animated-1 top-animated-r-3 top-animated-5"
                );

            }
        })
    })
    $("#menu-btn").click(function(){
        console.log("click");
        $("#header").animate({
            padding: hd['padding']['from'] + "px 0px"
        });
        $("#logo img").animate({height: hd['height']['from'] });
        $("header nav").animate({marginTop: hd['marginTop']['from'] });
        $("#menu-btn").animate({right: hd['right']['from'] });
    })
});
