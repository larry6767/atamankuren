<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

$restaurants_i = 0;

if ( have_posts() ) : query_posts('cat=5');
  while ( have_posts() ) : the_post(); ?>

    <div class="restaurants__item">
      <a href="<?php get_field('restauratns_page_link'); ?>" class="restaurants__frame-wrapper">
        <svg class="restaurants__frame">
          <g mask="url(#mask<?php echo $restaurants_i; ?>)">
            <image class="restaurants__img" xlink:href="<?php echo get_field('restaurants_background'); ?>" width="100%" height="100%">
          </g>
          <mask id="mask<?php echo $restaurants_i; ?>">
              <circle r="160" cx="200" cy="200" class="restaurants__frame-mask"></circle>
          </mask>
          <circle r="170" cx="200" cy="200" class="restaurants__frame-border"></circle>
        </svg>
        <div class="restaurants__description">
          <?php the_content(); ?>
        </div>
        <div class="restaurants__logo <?php echo get_field('restaurants_css_class'); ?>" style="background-image: url('<?php echo get_field('restaurants_logo'); ?>');"></div>
      </a>
      <div class="restaurants__text"><?php echo get_field('restaurants_adress'); ?></div>
      <a href="tel:<?php echo get_field('restaurants_phone_link'); ?>" class="restaurants__phone-link"><?php echo get_field('restaurants_phone'); ?></a>
    </div>

    <?php
    $restaurants_i++;
  endwhile;
endif;
wp_reset_query();
?>
