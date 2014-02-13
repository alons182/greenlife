jQuery(function($) {

    var theLanguage = $('html').attr('lang');

    resizes();                     // resize pagina
    $(window).scroll(resizes);     // calcula el desplazamiento de la pagina
    $(window).resize(resizes);     // calcula el cambio de tamaño de la pagina
  
    //MENU 
    $menu = $('#menu'),
    //$submenu = $('.sub-menu');

    $menu.find(".parent").hoverIntent({
        over: function() {
              $(this).find(">.nav-child").slideDown(200 );
            },
        out:  function() {
              $(this).find(">.nav-child").slideUp(200);
            },
        timeout: 200

        });
  

     // NAV MOBILE
    $('#btn_nav').click(function(){
        $('#main-header nav').toggle();
    });

    $(".tour").hover(function(event){

      //console.log($(this).attr("id"));
      var myitem = $(this);
      var por_left = myitem[0].style.left;
      var pix_left = myitem[0].style.left;

     
      switch($(this).attr("id")) {
          case 't1': 
                $('#t2').animate({"left":"60%"});
                $('#t3').animate({"left":"70%"});
                $('#t4').animate({"left":"80%"});
                $('#t5').animate({"left":"90%"});

                
            break;
          case 't2': 
                if ( por_left == '10%' || por_left=='' ) {
                    $('#t3').animate({"left":"70%"});
                    $('#t4').animate({"left":"80%"});
                    $('#t5').animate({"left":"90%"});
                    $('#t2').animate({"left":"10%"});

                    
                }
                else {
                    $('#t2').animate({"left":"10%"});
                   
                  }
                  
            break;
          case 't3': 
             if ( por_left == '20%' || por_left=='' ) {
                    $('#t5').animate({"left":"90%"});
                    $('#t4').animate({"left":"80%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                   
                }
                else {
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                   
                  }
                 
            break;
           case 't4': 
                
                if ( por_left == '30%' || por_left=='' ) {
                    $('#t5').animate({"left":"90%"});
                    $('#t4').animate({"left":"30%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                 }
                  else {
                    $('#t4').animate({"left":"30%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                   
                  }
            break;
           case 't5': 
                if ( por_left == '90%' || por_left=='' ) {
                    $('#t5').animate({"left":"40%"});
                    $('#t4').animate({"left":"30%"});
                    $('#t3').animate({"left":"20%"});
                    $('#t2').animate({"left":"10%"});
                 }
                 
            break;
        } 
    },function(){
      
    });

   $('.botones li').on('click',function(e){
    //console.log($(this).attr('data-info'));
    
    if($(this).attr('data-info')=="book")
    {
       
        var tour;
     
        tour =  $.trim($('.page-header > h2').text());
        
        $("#Activitie option[value='"+ tour +"']").attr("selected",true); //avistamiento pajaros

        $(".chosen-select").trigger("chosen:updated");

        $('#dialog').fadeIn(200);

    }else{
       $(".info").find('article').hide();
       $(".info").find('[data-id="'+ $(this).attr('data-info') +'"]').fadeIn(500);
    }
   
   
  });

   $('#btn-reserve ').on('click',function(e){
      e.preventDefault();
      
      $('#dialog').fadeIn(200);
    
   
  });

    $('#dialog').find('.close').on('click',function(e){
        e.preventDefault();
        $('#dialog').fadeOut(200);
        limpiaForm($('#reservationFormTour'));
        limpiaChosen();
   
  });

    
  $(".chosen-select").chosen({width: "100%"});
  $( "#date" ).datepicker({ dateFormat: "dd/mm/yy" });
   
   

  // LOAD ACTIVITIES FORM RESERVATION
  $.getJSON('/helpers/activities.php',{lang:theLanguage}, function(data) {
    
      var items = [];

      var select = $('#Activitie').empty();
        $.each(data, function(i,item) {
            select.append( '<option value="'
                                 + $.trim(item.title)
                                 + '">'
                                 + item.title
                                 + '</option>' ); 


     
    });
    
    $(".chosen-select").trigger("chosen:updated");

     //select.prepend('<option value="">Choose your activities</option>');

  });

  $.validator.setDefaults({ ignore: ":hidden:not(select)" })
 

  $("#reservationFormTour").validate({

    rules: {
      
        Activitie:{
          required: true
        },
      
         Adults: {

          required: true,

          number: true

        }
       

      },

      submitHandler: function(form) {

        var formInput =  $('#reservationFormTour').serializeArray();
      var url = "/helpers/reservation.php";
      
      $.post(url, formInput, function(data){
            //console.log(data);
            
            limpiaForm($('#reservationFormTour'));
            limpiaChosen();

            if(data=="ok")
            {
              if(theLanguage == "es-es")
                $('.mensaje').html('<span class="ok">Reservación enviada correctamente</span>');
              else
                 $('.mensaje').html('<span class="ok">Reservation sent successfully</span>');
            }             
            else
            {
              if(theLanguage == "es-es")
                $('.mensaje').html('<span class="error">Error Enviando la Reservacion. Verifique</span>');
              else
                $('.mensaje').html('<span class="error">Error sending the reservation</span>');
            }
              


            setTimeout(function(){  
                  $('.mensaje').fadeOut(200,function() {

                  $('.mensaje span').remove();
                  $('.mensaje').show();

                });}, 2000);  


          });
       // form.submit();

      }

     });

 // FUNCTION LIMPIAR FORM
    function limpiaChosen() {
    
    $("#Activitie").val('').trigger("chosen:updated");
    $("#Adults").val('').trigger("chosen:updated");
    $("#Childrens").val('').trigger("chosen:updated");
    
    
  }
    
                

         
          

    function resizes(){
            height_dispo = getWindowHeight() - ($('#main-header').height()) - ($('#main-footer').height());
            width_dispo = getWindowWidth() - getScrollerWidth();            
            //console.log(getWindowHeight() );

            if(getWindowWidth() > 768){
                
                 if(getWindowHeight() >= 600 && getWindowHeight() <= 768){
                  $('#main').height(height_dispo + 100).width(width_dispo);
                 }
                 else
                  $('#main').height(height_dispo).width(width_dispo);
                 
                 $('.blog-featured_tours_home li').height(height_dispo);//.width(width_dispo);
               
            }else
              {  
               $('#main').height('auto').width('auto');
               $('.blog-featured_tours_home li').height('500px');
            }
           


    };

});

