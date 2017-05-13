$(document).ready(function() {

  var $headerContext = $('.x-header');
  var $burgerMenu = $('.x-burger-menu', $headerContext);

  $burgerMenu.on('click', function() {
    $('.x-mobile-navigation', $headerContext).slideToggle('mobile-navigation--active');
    setTimeout(function () {
      $burgerMenu.toggleClass('main-navigation__burger-menu--active');
    }, 300);
  });

  // first-screen-slider

  $('.x-first-screen-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false
  });

  $('.x-scroll').click(function() {
    if (location.href.substring(location.href.lastIndexOf('/')) === '/') {
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
          duration: 500,
          easing: "swing"
      });
      return false;
    }
  });
});
