var $headerContext = $('.x-header');

$('.x-burger', $headerContext).on('click', function() {
  $('.mobile-navigation', $headerContext).slideToggle('mobile-navigation--active');
})
