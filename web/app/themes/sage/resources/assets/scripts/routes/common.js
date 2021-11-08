
export default {
  init() {
    // JavaScript for 
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height > 15){
      $('header').addClass('header-bg');
      } else{
      $('header').removeClass('header-bg');
      }
      });

       // JavaScript for icon menu
      $('.icon-menu-mob-wrapp').on('click', function (){
        $('.header__navigation').toggleClass('open-menu');
        $('.main').toggleClass('hide');
      });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
