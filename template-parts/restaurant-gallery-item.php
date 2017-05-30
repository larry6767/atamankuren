<?php
/**
 * Template part for displaying page content in page-restaurant.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

$restaurant_gallery = get_field('restaurant_gallery');
foreach ($restaurant_gallery as $key => $restaurant_album) { ?>

  <div class="restaurants-gallery__item x-room">
    <div class="restaurants-gallery__frame-wrapper x-room-album">
      <svg class="restaurants-gallery__frame">
        <g mask="url(#mask<?php echo $key ?>)">
          <image class="restaurants-gallery__img" xlink:href="<?php echo $restaurant_album['restaurant_photos'][0]['url']; ?>" width="100%" height="100%">
        </g>
        <mask id="mask<?php echo $key ?>">
            <circle r="120" cx="150" cy="150" class="restaurants-gallery__frame-mask"></circle>
        </mask>
        <circle r="127" cx="150" cy="150" class="restaurants-gallery__frame-border"></circle>
      </svg>
      <div class="restaurants-gallery__description">
        <?php echo count($restaurant_album['restaurant_photos']); ?> фото
      </div>
      <img class="restaurants-gallery__weave" src="<?php echo get_template_directory_uri(); ?>/img/hotel/weave.svg">
    </div>
    <div class="restaurants-gallery__img-list">

    <?php
    foreach ($restaurant_album['restaurant_photos'] as $key => $restaurant_photo) { ?>

      <a href="<?php echo $restaurant_photo['url']; ?>" class="restaurants-gallery__img-item-preview <?php if ($key == 0) { echo 'x-target-lightbox';}?>" data-lightbox="<?php echo $restaurant_album['restaurant_album_name']; ?>" data-title="<?php echo $restaurant_photo['description']; ?>">
        <img class="restaurants-gallery__img-item" src="<?php echo $restaurant_photo['url']; ?>" alt="photo">
      </a>

    <?php } ?>

    </div>
    <div class="restaurants-gallery__room-title"><?php echo $restaurant_album['restaurant_album_name']; ?></div>
  </div>

<?php } ?>
