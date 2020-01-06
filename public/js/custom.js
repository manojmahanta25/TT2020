(function($) {
  "use strict";


jQuery(document).ready(function(jQuery) {
    Boxgrid.init();
});
/*    $(window).load(function() {

      $(".loader").delay(500).fadeOut();
      $(".image").delay(1000).fadeOut("slow");
      $("#global").removeClass("hide");
  });*/

$(window).on('load', function(){
  setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( ".loader" ).fadeOut(100, function() {
      // fadeOut complete. Remove the loading div
      $( ".loader" ).remove(); //makes page more lightweight 
      $("#global").removeClass("hide");
  });  
}


})(jQuery); 			
