var $headerContext = $('.x-header');
var $burgerMenu = $('.x-burger-menu', $headerContext);

$burgerMenu.on('click', function() {
  $('.x-mobile-navigation', $headerContext).slideToggle('mobile-navigation--active');
  setTimeout(function () {
    $burgerMenu.toggleClass('main-navigation__burger-menu--active');
  }, 300);
});
