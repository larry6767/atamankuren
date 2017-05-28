<?php get_header('main'); ?>
<section class="first-screen-slider x-first-screen-slide">

  <?php
    if ( have_posts() ) : query_posts('cat=6');
    while ( have_posts() ) : the_post(); ?>

      <div class="first-screen-slider__item" style="background-image: url('<?php echo get_field('main_first_screen_background'); ?>');"></div>

      <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>

</section>
<section class="restaurants x-restaurants" id="restaurants">
  <img src="<?php echo get_template_directory_uri(); ?>/img/our-restaurants.svg" alt="" class="restaurants__title">
  <div class="restaurants__wrapper">
    <?php get_template_part('template-parts/main-restaurant-item'); ?>
  </div>
</section>
<section class="holidays" style="background-image: url('<?php echo get_field('organization_background'); ?>');">
  <div class="holidays__title-block">
    <img src="<?php echo get_template_directory_uri(); ?>/img/organization.svg" class="holidays__title" alt="Организация праздников">
    <div class="holidays__text">
      <?php echo get_field('organization_text'); ?>
    </div>
  </div>
  <div class="holidays__features-wrapper">
    <div class="feature">
      <div class="feature__img feature__img--1" style="background-image: url('<?php echo get_field('organization_image_1'); ?>');">
      </div>
      <div class="feature__text-wrapper">
        <div class="feature__title"><?php echo get_field('organization_title_1'); ?></div>
        <div class="feature__text"><?php echo get_field('organization_text_1'); ?></div>
      </div>
    </div>
    <div class="feature feature--tablet-last">
      <div class="feature__img feature__img--2" style="background-image: url('<?php echo get_field('organization_image_2'); ?>');"></div>
      <div class="feature__text-wrapper">
        <div class="feature__title"><?php echo get_field('organization_title_1'); ?></div>
        <div class="feature__text"><?php echo get_field('organization_text_1'); ?></div>
      </div>
    </div>
    <div class="feature">
      <div class="feature__img feature__img--3" style="background-image: url('<?php echo get_field('organization_image_3'); ?>');"></div>
      <div class="feature__text-wrapper">
        <div class="feature__title"><?php echo get_field('organization_title_1'); ?></div>
        <div class="feature__text"><?php echo get_field('organization_text_1'); ?></div>
      </div>
    </div>
  </div>
</section>
<section class="hotel">
  <div class="hotel__title-wrapper x-link-hotel">
    <svg class="hotel__frame">
      <g mask="url(#mask4)">
        <image class="hotel__title-img" xlink:href="<?php echo get_template_directory_uri(); ?>/img/hotel.svg" width="100%" height="100%">
      </g>
      <mask id="mask4">
          <circle r="130" cx="150" cy="150" class="hotel__frame-mask"></circle>
      </mask>
      <circle r="135" cx="150" cy="150" class="hotel__frame-border"></circle>
      <circle r="130" cx="150" cy="150" class="hotel__frame-border hotel__frame-border--pink"></circle>
    </svg>
  </div>
  <div class="hotel__photo"
        style="background-image: url(<?php echo get_field('hotel_block_photo_1'); ?>);"></div>
  <div class="hotel__photo hotel__photo--mobile-none"
        style="background-image: url(<?php echo get_field('hotel_block_photo_2'); ?>);"></div>
  <div class="hotel__photo"
        style="background-image: url(<?php echo get_field('hotel_block_photo_3'); ?>);"></div>
  <div class="hotel__photo hotel__photo--mobile-none"
        style="background-image: url(<?php echo get_field('hotel_block_photo_4'); ?>);"></div>
</section>
<?php get_footer('main'); ?>
