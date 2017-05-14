$(document).ready(function() {

  var $headerContext = $('.x-header');

  // header active class
  var $headerLinks = $('.x-header-link', $headerContext);

  $headerLinks.each(function(i) {
    var url = location.href.substring(location.href.lastIndexOf('/'));
    var href = $(this).attr('href') + '';
    href = href.substring(href.indexOf('.') + 1);

    console.log(url, href);
    if (url === href) {
      $(this).addClass('main-navigation__link--active');
    }
  });

  // header-mobile
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

  // scroll main-page

  $('.x-scroll').on('click', function() {
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
