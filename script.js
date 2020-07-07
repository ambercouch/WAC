/* Javascript */

// $(window).load(function() {
//     $('.flexslider').flexslider({
//       animationDuration : 1300,
//       controlNav : false,
//       directionNav : false
//     });
//   });


/* jQuery */

$(document).ready(function() {

  /* prepend menu icon */
  $("#nav-mobile").css("display", "none");

  /* toggle nav */
  $(".nav-reveal").click(function(event) {
    event.preventDefault();
    $("#nav-mobile").slideToggle();
    $(this).toggleClass("active");
  });

  // Responsive Image Maps
  // https://github.com/stowball/jQuery-rwdImageMaps

  $('img[usemap]').rwdImageMaps();


});