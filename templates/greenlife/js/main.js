jQuery(function($) {


    resizes();                     // resize pagina
    $(window).scroll(resizes);     // calcula el desplazamiento de la pagina
    $(window).resize(resizes);     // calcula el cambio de tamaño de la pagina
  
     // NAV MOBILE
    $('#btn_nav').click(function(){
        $('#main-header nav').toggle();
    });

    $(".tour").hover(function(event){

      console.log($(this).attr("id"));
      var myitem = $(this);
      var por_left = myitem[0].style.left;
      var pix_left = myitem[0].style.left;
     
      switch($(this).attr("id")) {
          case 't1': 
                $('#t2').animate({"left":"70%"});
                $('#t3').animate({"left":"80%"});
                $('#t4').animate({"left":"90%"});

                
            break;
          case 't2': 
                if ( por_left == '10%' || por_left=='' ) {
                    $('#t3').animate({"left":"80%"});
                    $('#t4').animate({"left":"90%"});
                    $('#t2').animate({"left":"10%"});
                    
                }
                else {
                    $('#t2').animate({"left":"10%"});
                   
                  }
                  
            break;
          case 't3': 
             if ( por_left == '20%' || por_left=='' ) {
                    $('#t4').animate({"left":"90%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                   
                }
                else {
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                   
                  }
                 
            break;
           case 't4': 
                if ( por_left == '90%' || por_left=='' ) {
                    $('#t4').animate({"left":"30%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                 }
                 
            break;
        } 
    },function(){
      
    });

   

    function resizes(){
            height_dispo = getWindowHeight() - ($('#main-header').height()) - ($('#main-footer').height()) - 20;
            width_dispo = getWindowWidth() - getScrollerWidth();            
           

            if(getWindowWidth() > 768){
                
                 $('#main').height(height_dispo).width(width_dispo);
                 $('.item-page_tours_home li').height(height_dispo);//.width(width_dispo);
               
            }else
              {  
               $('#main').height('auto').width('auto');
               $('.item-page_tours_home li').height('500px');
            }
           


    };

});

