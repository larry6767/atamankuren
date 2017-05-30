<?php get_header('main'); ?>
<section class="first-screen-slider x-first-screen-slider">

  <?php $sliders = get_field('main_page_slider');
    foreach ($sliders as $slider => $key) { ?>

      <div class="first-screen-slider__item" style="background-image: url('<?php echo $key['main_page_slider_photo']; ?>');"></div>

   <?php } ?>

</section>



<section class="restaurants x-restaurants" id="restaurants">
  <img src="<?php echo get_template_directory_uri(); ?>/img/our-restaurants.svg" alt="" class="restaurants__title">
  <div class="restaurants__wrapper">
    <?php get_template_part('template-parts/main-restaurant-item'); ?>
  </div>
</section>



<section class="holidays" style="background-image: url('<?php echo get_field('organization_bg'); ?>');">
  <div class="holidays__title-block">
    <img src="<?php echo get_template_directory_uri(); ?>/img/organization.svg" class="holidays__title" alt="Организация праздников">
    <div class="holidays__text">
      <?php echo get_field('organization_text'); ?>
    </div>
  </div>

  <div class="holidays__features-wrapper">

  <?php
  $organization_items = get_field('organization_item');
  foreach ($organization_items as $key => $item) { ?>

    <div class="feature <?php if ($item['organization_item_mobile_last']) { echo 'feature--tablet-last'; } ?>">
      <div class="feature__img feature__img--2" style="background-image: url('<?php echo $item['organization_item_photo']; ?>');"></div>
      <div class="feature__text-wrapper">
        <div class="feature__title"><?php echo $item['organization_item_title']; ?></div>
        <div class="feature__text"><?php echo $item['organization_item_text']; ?></div>
      </div>
    </div>

  <?php } ?>

  </div>
</section>



<section class="hotel">
  <div class="hotel__title-wrapper x-link-hotel">
    <svg class="hotel__frame">
      <g mask="url(#mask_hotel)">
        <image class="hotel__title-img" xlink:href="<?php echo get_template_directory_uri(); ?>/img/hotel.svg" width="100%" height="100%">
      </g>
      <mask id="mask_hotel">
          <circle r="130" cx="150" cy="150" class="hotel__frame-mask"></circle>
      </mask>
      <circle r="135" cx="150" cy="150" class="hotel__frame-border"></circle>
      <circle r="130" cx="150" cy="150" class="hotel__frame-border hotel__frame-border--pink"></circle>
    </svg>
  </div>

  <?php
  $hotel_photos = get_field('main_hotel_photos');
  foreach ($hotel_photos as $key => $item) { ?>

    <div class="hotel__photo <?php if ($item['main_hotel_mobile_none']) { echo 'hotel__photo--mobile-none'; } ?>" style="background-image: url('<?php echo $item['main_hotel_photo']; ?>');"></div>

  <?php } ?>

</section>
<?php get_footer('main'); ?>
