$(document).ready(function(){
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
    $("#actu-container").delay(100).load( "fb_feed.php",function(){
      console.log("loadeeed");
      $(window).trigger("scroll");
    } );
})
