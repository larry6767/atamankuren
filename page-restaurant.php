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
      <div class="restaurants-first-screen__parallax" style="background-image: url('<?php echo get_field('restaurant_photo'); ?>');" data-type="parallax" data-depth="0.70"></div>
      <div class="restaurants-first-screen__parallax-bg"></div>
    </section>
    <section class="restaurants-description">
      <div class="restaurants-description__logo-wrapper">
        <img class="restaurants-description__arch" src="<?php echo get_template_directory_uri(); ?>/img/restaurants/arch.svg">
        <img src="<?php echo get_field('restaurant_logo'); ?>" alt="<?php the_title(); ?>" class="restaurants-description__logo <?php echo get_field('restaurant_logo_css'); ?>">
      </div>
      <div class="restaurants-description__contacts">
        <?php echo get_field('restaurant_adress'); ?>
        <br>
        <a href="tel:<?php echo get_field('restaurant_phone_link'); ?>" class="restaurants-description__link"><?php echo get_field('restaurant_phone'); ?></a>
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
      $restaurant_slider_gallery = get_field('restaurant_slider_gallery');
      foreach ($restaurant_slider_gallery as $key => $item) { ?>

        <div class="restaurants-menu__item" style="background-image: url('<?php echo $item['url']; ?>');"></div>

      <?php } ?>

      </div>
      <div class="restaurants-menu__list-wrapper">
        <div class="restaurants-menu__list">

          <?php
          $restaurant_menu = get_field('restaurant_menu');
          foreach ($restaurant_menu as $key => $item) { ?>

            <a href="<?php echo $item['restaurant_pdf']; ?>" target="_blank" class="restaurants-menu__link">
              <svg class="restaurants-menu__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 512"><style>.menu-0{fill:#fff}</style><path class="menu-0" d="M435.2 0H25.6C11.5 0 0 11.5 0 25.6v460.8C0 500.5 11.5 512 25.6 512h409.6c14.1 0 25.6-11.5 25.6-25.6V25.6c0-14.1-11.5-25.6-25.6-25.6zm-93.9 59.7v409.6c0 14.1-11.5 25.6-25.6 25.6H25.6c-4.7 0-8.5-3.8-8.5-8.5V25.6c0-4.7 3.8-8.5 8.5-8.5h290.1c14.1 0 25.6 11.5 25.6 25.6v17zm102.4 426.7c0 4.7-3.8 8.5-8.5 8.5h-85.6c5.4-7.2 8.8-16 8.8-25.6v-51.2H384c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-25.6V384h42.7c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-42.7v-17.1H384c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-25.6v-17.1h42.7c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-42.7v-34.1h34.1c14.1 0 25.6-11.5 25.6-25.6V76.8c0-14.1-11.5-25.6-25.6-25.6h-34.1v-8.5c0-9.6-3.3-18.4-8.8-25.6h85.6c4.7 0 8.5 3.8 8.5 8.5v460.8zm-85.3-238.9V68.3h34.1c4.7 0 8.5 3.8 8.5 8.5v162.1c0 4.7-3.8 8.5-8.5 8.5h-34.1z"/><path class="menu-0" d="M304.3 87c-1.8-1.6-4.2-2.4-6.7-2.1l-1.1.1c-.7.1-1.4.2-2.1.2-11.8 0-21.3-9.6-21.3-21.3 0-.7.1-1.5.2-2.2l.1-1c.3-2.4-.5-4.9-2.1-6.7-1.6-1.8-4-2.9-6.4-2.9H93.4c-2.4 0-4.8 1-6.4 2.9-1.6 1.8-2.4 4.3-2.1 6.7l.1 1c.1.7.2 1.5.2 2.2 0 11.8-9.6 21.3-21.3 21.3-.7 0-1.4-.1-2.1-.2h-1c-2.4-.3-4.9.5-6.7 2.1-1.8 1.6-2.9 4-2.9 6.4v325.1c0 2.4 1 4.8 2.9 6.4 1.8 1.6 4.3 2.4 6.7 2.1l1.1-.1c.7-.1 1.4-.2 2.1-.2 11.8 0 21.3 9.6 21.3 21.3 0 .7-.1 1.5-.2 2.2l-.1 1c-.3 2.4.5 4.9 2.1 6.7 1.6 1.8 4 2.9 6.4 2.9H265c2.4 0 4.8-1 6.4-2.9 1.6-1.8 2.4-4.3 2.1-6.7l-.1-1c-.1-.7-.2-1.5-.2-2.2 0-11.8 9.6-21.3 21.3-21.3.7 0 1.4.1 2.1.2l1.1.1c2.4.4 4.9-.5 6.7-2.1 1.8-1.6 2.9-4 2.9-6.4V93.4c-.1-2.4-1.1-4.7-3-6.4zm-14.2 322.8c-17.8 2-31.9 16.1-33.9 33.9h-154c-2-17.8-16.1-31.9-33.9-33.9V102.2c17.8-2 31.9-16.1 33.9-33.9h154.1c2 17.8 16.1 31.9 33.9 33.9v307.6z"/><path class="menu-0" d="M247.5 307.2H102.4c-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5h145.1c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5zM102.4 358.4h42.7c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5h-42.7c-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5zM247.5 341.3h-68.3c-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5h68.3c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5zM247.5 375.5h-42.7c-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5h42.7c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5zM170.7 375.5h-68.3c-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5h68.3c4.7 0 8.5-3.8 8.5-8.5s-3.8-8.5-8.5-8.5zM110.9 170.7c4.7 0 8.5-3.8 8.5-8.5v-17.1c0-4.7-3.8-8.5-8.5-8.5s-8.5 3.8-8.5 8.5v17.1c0 4.7 3.8 8.5 8.5 8.5zM179.2 230.4c28.2 0 51.2-23 51.2-51.2s-23-51.2-51.2-51.2-51.2 23-51.2 51.2 23 51.2 51.2 51.2zm0-85.3c18.8 0 34.1 15.3 34.1 34.1s-15.3 34.1-34.1 34.1-34.1-15.3-34.1-34.1 15.3-34.1 34.1-34.1z"/><path class="menu-0" d="M247.5 179.2c-4.7 0-8.5 3.8-8.5 8.5 0 32.9-26.8 59.7-59.7 59.7s-59.7-26.8-59.7-59.7c0-4.7-3.8-8.5-8.5-8.5s-8.5 3.8-8.5 8.5c0 42.4 34.5 76.8 76.8 76.8s76.8-34.4 76.8-76.8c-.2-4.7-4-8.5-8.7-8.5zM247.5 136.5c-4.7 0-8.5 3.8-8.5 8.5v17.1c0 4.7 3.8 8.5 8.5 8.5s8.5-3.8 8.5-8.5V145c0-4.7-3.8-8.5-8.5-8.5z"/></svg>
              <?php echo $item['restaurant_link_text']; ?>
            </a>

          <?php } ?>

        </div>
      </div>
    </section>
    <section class="restaurants-gallery x-restaurants-gallery" id="restaurants-gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/img/restaurants/gallery-title.svg" alt="" class="restaurants-gallery__title">
      <div class="restaurants-gallery__wrapper">

        <?php get_template_part('template-parts/restaurant-gallery-item'); ?>

      </div>
    </section>
  </div>
<?php get_footer('main'); ?>
