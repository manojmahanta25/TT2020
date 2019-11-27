(function($) {
  "use strict";


jQuery(document).ready(function(jQuery) {
    Boxgrid.init();
});

jQuery(document).ready(function($) { 

 // Cache selectors
 var lastId;
 var topMenu = $("#mainmenu"); 
 var topMenuHeight = 0;//topMenu.outerHeight()+15
     // All list items
 var menuItems = topMenu.find("a"),
     // Anchors corresponding to menu items
     scrollItems = menuItems.map(function(){
       var item = $($(this).attr("href"));
       
       if (item.length) { return item; }
     });
  

 // Bind click handler to menu items
 // so we can get a fancy scroll animation
menuItems.click(function(e){
  e.preventDefault();
   var href = $(this).attr("href"),
       offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
       
  
   $('html, body').stop().animate({ 
       scrollTop: offsetTop
   }, 100);
  //return false;
 });


        $(window).scroll( function ()
        {
            var fromTop = $(this).scrollTop()+25;
            var cur = scrollItems.map(function(){
              if ($(this).offset().top < fromTop)
                return this;
            });
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                menuItems
                  .parent().removeClass("active");
                  menuItems.filter("[href=#"+id+"]").parent().addClass("active");               
                   }
                   
                 // Animation function  
                   $('.animate').not('.load').each(function(i){
                           var $this=$(this);
                           var ind = i * 100;
                           var docViewTop = $(window).scrollTop();
                           var docViewBottom = docViewTop + $(window).height();
                           var elemTop = $this.offset().top;      
                   
                               if (docViewBottom >= elemTop) { 
                                   setTimeout(function(){ 
                                        $this.addClass('load');
                                   	}, ind);
                                   }
                       });
                      //End function 
                   
        });
    });
    
    		

})(jQuery); 			
