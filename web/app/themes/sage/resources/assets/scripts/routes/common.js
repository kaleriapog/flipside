
export default {
  init() {
    // Script for header scroll bg
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height > 15){
      $('header').addClass('header-bg');
      } else{
      $('header').removeClass('header-bg');
    }
    });

     // JavaScript for icon menu

    $('.accordion__content-item .accordion__content').slideDown();   
    $('.icon-menu-mob-wrapp').on('click', function (){
      $('.header__navigation').toggleClass('open-menu');
      $('.main').toggleClass('hide');
    });
      
    // JavaScript for accordion

    $(function() {     
      $('.accordion__content-item').eq(0).toggleClass('accordion-open');
    
      $('#accordion .accordion__content-title').on('click', function(){
        $('#accordion .accordion__content-description').not( $(this).next() );    
        $('.accordion__content-item').removeClass('accordion-open');
        $(this).next().parent().addClass('accordion-open');
      });
    
    });

    // $(document).ready(function () {
    //   $('.accordion__content-item').click(function () {
    //     $(this).toggleClass('accordion-open');
    //     $('.accordion__content-item').not(this).removeClass('accordion-open');
    //   });
    // });       
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
