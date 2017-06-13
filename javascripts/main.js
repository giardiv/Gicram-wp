$(function() {
    // Manual SS
    $(".manual-ss-controls img").click(function(){
      var id = $(this).data("to");
      $(".manual-ss-img").fadeOut();
      console.log(".manual-ss-img:nth-child("+id+")");
      $(".manual-ss-img:nth-child("+id+")").fadeIn();
    })

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n){
      showSlides(slideIndex = n);
    }
    function showSlides(n){
      var i;
      var slides = document.getElementsByClassName("item");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].classList.remove("c-shower");
         slides[i].className += " c-hider";
          //slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].classList.remove("c-hider");
      slides[slideIndex-1].className += " c-shower";
      //slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      $(".ss-caption .active").removeClass("active").addClass("hide-caption");
      console.log(".ss-caption .row:nth-child("+ (slideIndex) + ")");
      $(".ss-caption .row:nth-child("+ (slideIndex) + ")").removeClass("hide-caption").addClass("active");
    }

    $('[data-ride="carousel-gicram"]').children(".carousel-control").click(function(){
        var dir = $(this).data("slide") == "prev-z" ? -1 : 1;
        plusSlides(dir);
    })
    $('[data-ride="carousel-gicram"]').find(".dot").click(function(){
        var n = $(this).data("slide-to");
        console.log(n);
        currentSlide(n);
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
