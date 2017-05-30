<?php
/**
 * Template Name: hotel
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

get_header('main'); ?>
<div class="x-hotel-page">
  <section class="hotel-first-screen">
    <div class="hotel-first-screen__parallax" style="background-image: url('<?php echo get_field('hotel_photo'); ?>');" data-type="parallax" data-depth="0.70"></div>
    <div class="hotel-first-screen__parallax-bg"></div>
  </section>
  <section class="hotel-description">
    <img class="hotel-description__title" src="<?php echo get_template_directory_uri(); ?>/img/hotel/hotel-title.svg">
    <div class="hotel-description__contacts">
      <?php echo get_field('hotel_adress'); ?>
      <br>
      <a href="tel:+<?php echo get_field('hotel_phone_link'); ?>" class="hotel-description__link"><?php echo get_field('hotel_phone'); ?></a>
    </div>
    <div class="hotel-description__text hotel-description__text--mb">
      <?php echo get_field('hotel_description'); ?>
    </div>
    <div class="hotel-description__text hotel-description__text--hidden x-more-text">
      <?php echo get_field('hotel_description_more'); ?>
    </div>
    <div class="hotel-description__more x-more"></div>
  </section>

  <section class="hotel-spa">
    <div class="hotel-spa__slider x-hotel-spa-slider">

      <?php
      $hotel_slider_gallery = get_field('hotel_slider_gallery');
      foreach ($hotel_slider_gallery as $key => $item) { ?>

      <div class="hotel-spa__item" style="background-image: url('<?php echo $item['url']; ?>');"></div>

      <?php } ?>

    </div>
    <div class="hotel-spa__text-block">
      <div class="hotel-spa__title"><?php echo get_field('hotel_spa_title'); ?></div>
      <div class="hotel-spa__text">
        <?php echo get_field('hotel_spa_description'); ?>
      </div>
    </div>
  </section>

  <section class="hotel-rooms x-hotel-rooms" id="hotel-rooms">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hotel/rooms-title.svg" alt="" class="hotel-rooms__title">
    <div class="hotel-rooms__wrapper">
      <?php get_template_part('template-parts/hotel-item'); ?>
    </div>
  </section>
</div>
<?php get_footer('main'); ?>
