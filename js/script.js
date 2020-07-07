/* Javascript */

// $(window).load(function() {
//     $('.flexslider').flexslider({
//       animationDuration : 1300,
//       controlNav : false,
//       directionNav : false
//     });
//   });


/* jQuery */

jQuery(document).ready(function($) {

  /* prepend menu icon */
  $("#nav-mobile").css("display", "none");

  /* toggle nav */
  $(".nav-reveal").click(function(event) {
    event.preventDefault();
    $("#nav-mobile").slideToggle();
    $(this).toggleClass("active");
  });

  $('#presentation').addClass('scriptjs-loaded');

  // Prevent page from jumping due to empty href when an area on imagemap is clicked
  $(".open-popup-link").on("click", function(event){
      event.preventDefault();
  });

  // Inner Fade

  $('#presentation ul').innerFade({
    animationtype: 'fade',
    speed: 5000,
    timeout: 6000
  });
});