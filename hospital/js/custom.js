
$(document).ready(function() {

  // Smooth scrolling
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, 'easeInOutExpo');

          if ( $(this).parents('.nav-menu').length ) {
            $('.nav-menu .menu-active').removeClass('menu-active');
            $(this).closest('li').addClass('menu-active');
          }

          if ( $('body').hasClass('mobile-nav-active') ) {
              $('body').removeClass('mobile-nav-active');
              $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
              $('#mobile-body-overly').fadeOut();
          }
          return false;
        }
      }
    });
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {opacity:'show'},
    speed: 400
  });

  // Mobile Navigation
  if( $('#nav-menu-container').length ) {
      var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav'});
      $mobile_nav.find('> ul').attr({ 'class' : '', 'id' : '' });
      $('body').append( $mobile_nav );
      $('body').prepend( '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>' );
      $('body').append( '<div id="mobile-body-overly"></div>' );
      $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

      $(document).on('click', '.menu-has-children i', function(e){
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
      });

      $(document).on('click', '#mobile-nav-toggle', function(e){
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
      });

      $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
             if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
          }
      });
  } else if ( $("#mobile-nav, #mobile-nav-toggle").length ) {
      $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  // Counting numbers

  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Tooltip & popovers
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();

  // Background image via data tag
  $('[data-block-bg-img]').each(function() {
    // @todo - invoke backstretch plugin if multiple images
    var $this = $(this),
      bgImg = $this.data('block-bg-img');

      $this.css('backgroundImage','url('+ bgImg + ')').addClass('block-bg-img');
  });

  // jQuery counterUp
  if(jQuery().counterUp) {
    $('[data-counter-up]').counterUp({
      delay: 20,
    });
  }

  //Scroll Top link
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrolltop').fadeIn();
    } else {
      $('.scrolltop').fadeOut();
    }
  });

  $('.scrolltop, #logo a').click(function(){
    $("html, body").animate({
      scrollTop: 0
    }, 1000, 'easeInOutExpo');
    return false;
  });
  $("body").delegate(".del","click",function(event){
    var pid=$(this).attr('pid');
    $.ajax({
      url:"",
      method :"POST",
      data :{delete:1,pid:pid},
      success : function(data){
       
      } 
    })
  })
 $("body").delegate(".pdetial","click",function(){
     $("#bill").show();
     var pname=$("#pname").val();  
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{pdetial:1,pname:pname},
         success : function(data){
            $('#presult').html(data);
         }
      })
      
    })
  $("body").delegate("#dd","click",function(){
     $("#ddetail").show();
     $("#billdet").hide();
     $("#bill").hide();
     $("#ptreport").hide();
     $("#pdreport").hide();
     $("#pdtreport").hide();
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{dd:1},
         success : function(data){
           
            $('#dresult').html(data);
             
         }
      })
    
    })
  $("body").delegate("#tpr","click",function(){
     $("#ptreport").show();
     $("#billdet").hide();
     $("#bill").hide();
     $("#ddetail").hide();
     $("#pdreport").hide();
     $("#pdtreport").hide();
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{tpr:1},
         success : function(data){
            $('#ptresult').html(data);
             
         }
      })
    
    })
   $("body").delegate(".pddetial","click",function(){
     $("#pdtreport").show();
     var pdate=$("#pdate").val();  
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{pddetial:1,pdate:pdate},
         success : function(data){
            $('#pdtresult').html(data);
         }
      })
      
    })
   $("body").delegate("#pr","click",function(){
     $("#pdreport").show();
     $("#ddetail").hide();
     $("#ptreport").hide();
     $("#billdet").hide();
     $("#bill").hide();
    
    })
   $("body").delegate("#bd","click",function(){
     $("#billdet").show();
     $("#ddetail").hide();
     $("#ptreport").hide();
    $("#pdreport").hide();
     $("#pdtreport").hide();

    
    })
    $("body").delegate(".bill","click",function(){
     var pid=$(this).attr('pid'); 
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{print:1,pid:pid},
         success : function(data){
          alert(data)
         }
      })
      
    })
});
