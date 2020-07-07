/* Javascript */// $(window).load(function() {
//     $('.flexslider').flexslider({
//       animationDuration : 1300,
//       controlNav : false,
//       directionNav : false
//     });
//   });
/* jQuery */$(document).ready(function(){$("#nav-mobile").css("display","none");$(".nav-reveal").click(function(e){e.preventDefault();$("#nav-mobile").slideToggle();$(this).toggleClass("active")});$("img[usemap]").rwdImageMaps();$(".open-popup-link").on("click",function(e){e.preventDefault()})});