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
    autoplaySpeed: 5000
  });

  // restaurants section

  var $restaurantsContext = $('.x-restaurants');
  var maskSize = getMaskSize();

  $('.x-restaurant-frame', $restaurantsContext).on('mouseenter', function() {
    changeFrame.call(this, 'increase', 5, maskSize);
  });

  $('.x-restaurant-frame', $restaurantsContext).on('mouseleave', function() {
    changeFrame.call(this, 'decrease', 5, maskSize);
  });

  function getMaskSize() {
    var $mask = $('.x-frame-mask', $restaurantsContext);
    var maskSize = $mask.attr('r');
    return maskSize;
  }

  function changeFrame(action, quantity, initialMaskSize) {
    var $localContext = $(this).closest('.x-restaurant-item');
    var $border = $('.x-frame-border', $localContext);
    var $mask = $('.x-frame-mask', $localContext);
    var borderSize = $border.attr('r');
    var maskSize = $mask.attr('r');

    var maxMaskSize = +initialMaskSize + quantity;

    for (var i = 0; i < quantity; i++) {
      (function(i) {
        if (action === 'increase') {
          var localBorderSize = +borderSize + (i + 1);
          var localMaskSize = +maskSize + (i + 1);
        } else if (action === 'decrease') {
          localBorderSize = +borderSize - (i + 1);
          localMaskSize = +maskSize - (i + 1);
        } else {
          return;
        }

        if (localMaskSize < initialMaskSize || localMaskSize > maxMaskSize) {
          return;
        }

        setTimeout(function() {

          $border.attr('r', localBorderSize);
          $mask.attr('r', localMaskSize);
        }, i * 20);
      })(i);
    }
  }
});
