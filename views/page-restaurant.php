<?php
/**
 * Template Name: restaurant
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

get_header('main'); ?>
  <div class="x-restaurants-page">
    <section class="restaurants-first-screen">
      <div class="restaurants-first-screen__parallax" style="background-image: url('<?php echo get_field('restaurant_parallax'); ?>');" data-type="parallax" data-depth="0.70"></div>
      <div class="restaurants-first-screen__parallax-bg"></div>
    </section>
    <section class="restaurants-description">
      <div class="restaurants-description__logo-wrapper">
        <img class="restaurants-description__arch" src="<?php echo get_template_directory_uri(); ?>/img/restaurants/arch.svg">
        <img src="<?php echo get_field('restaurant_logo'); ?>" alt="<?php the_title(); ?>" class="restaurants-description__logo" style="<?php echo get_field('restaurant_logo_css'); ?>">
      </div>
      <div class="restaurants-description__contacts">
        <?php echo get_field('restaurant_adress'); ?>
        <br>
        <a href="tel:<?php echo get_field('restaurant_number-link'); ?>" class="restaurants-description__link"><?php echo get_field('restaurant_number'); ?></a>
      </div>
      <div class="restaurants-description__text restaurants-description__text--mb">
        <?php echo get_field('restaurant_description'); ?>
      </div>
      <div class="restaurants-description__text restaurants-description__text--hidden x-more-text">
        <?php echo get_field('restaurant_description_more'); ?>
      </div>
      <div class="restaurants-description__more x-more"></div>
    </section>
    <section class="restaurants-menu">
      <div class="restaurants-menu__slider x-restaurants-menu-slider">

      <?php
      $restaurant_category = 'cat=' . get_field('restaurant_category');
      if ( have_posts() ) : query_posts($restaurant_category);
        while ( have_posts() ) : the_post(); ?>

        <div class="restaurants-menu__item" style="background-image: url('<?php echo get_field('restaurant_menu_slider') ?>');"></div>

        <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>

      </div>
      <div class="restaurants-menu__list-wrapper">
        <div class="restaurants-menu__list">
          <a href="docs/ataman_menu.pdf" target="_blank" class="restaurants-menu__link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurants/menu.svg" alt="" class="restaurants-menu__img">
            Основное меню
          </a>
          <a href="docs/ataman_menu.pdf" target="_blank" class="restaurants-menu__link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurants/menu.svg" alt="" class="restaurants-menu__img">
            Винная карта
          </a>
          <a href="docs/ataman_bar.pdf" target="_blank" class="restaurants-menu__link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurants/menu.svg" alt="" class="restaurants-menu__img">
            Меню бара
          </a>
        </div>
      </div>
    </section>
    <section class="restaurants-gallery x-restaurants-gallery" id="restaurants-gallery">
      <img src="img/restaurants/gallery-title.svg" alt="" class="restaurants-gallery__title">
      <div class="restaurants-gallery__wrapper">
        <!-- @include ../blocks/restaurants/restaurants-item.html -->
      </div>
    </section>
  </div>
<?php get_footer('main'); ?>
