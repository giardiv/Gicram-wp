$(function() {
    // Manual SS
    $(".manual-ss-controls img").click(function(){
      var id = $(this).data("to");
      $(".manual-ss-img").fadeOut();
      console.log(".manual-ss-img:nth-child("+id+")");
      $(".manual-ss-img:nth-child("+id+")").fadeIn();
    })
});
