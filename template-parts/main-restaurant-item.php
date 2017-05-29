<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */


$restaurants = get_field('main_restaurant');
foreach ($restaurants as $key => $restaurant) { ?>

  <div class="restaurants__item">
    <a href="<?php echo $restaurant['main_restaurant_link']; ?>" class="restaurants__frame-wrapper">
      <svg class="restaurants__frame">
        <g mask="url(#mask<?php echo $key; ?>)">
          <image class="restaurants__img" xlink:href="<?php echo $restaurant['main_restaurant_photo']; ?>" width="100%" height="100%">
        </g>
        <mask id="mask<?php echo $key; ?>">
            <circle r="160" cx="200" cy="200" class="restaurants__frame-mask"></circle>
        </mask>
        <circle r="170" cx="200" cy="200" class="restaurants__frame-border"></circle>
      </svg>
      <div class="restaurants__description">
        <?php echo $restaurant['main_restaurant_text']; ?>
      </div>
      <div class="restaurants__logo <?php echo $restaurant['main_restaurant_logo_class']; ?>" style="background-image: url('<?php echo $restaurant['main_restaurant_logo']; ?>');"></div>
    </a>
    <div class="restaurants__text"><?php echo $restaurant['main_restaurant_adress']; ?></div>
    <a href="tel:<?php echo $restaurant['main_restaurant_phone_link']; ?>" class="restaurants__phone-link"><?php echo $restaurant['main_restaurant_phone']; ?></a>
  </div>

<?php } ?>
