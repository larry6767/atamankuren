<?php
/**
 * Template part for displaying page content in page-hotel.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

$hotel_gallery = get_field('hotel_gallery');
foreach ($hotel_gallery as $key => $hotel_album) { ?>

  <div class="hotel-rooms__item x-room">
    <div class="hotel-rooms__frame-wrapper x-room-album">
      <svg class="hotel-rooms__frame">
        <g mask="url(#mask<?php echo $key ?>)">
          <image class="hotel-rooms__img" xlink:href="<?php echo $hotel_album['hotel_photos'][0]['url']; ?>" width="100%" height="100%">
        </g>
        <mask id="mask<?php echo $key ?>">
            <circle r="160" cx="200" cy="200" class="hotel-rooms__frame-mask"></circle>
        </mask>
        <circle r="170" cx="200" cy="200" class="hotel-rooms__frame-border"></circle>
      </svg>
      <div class="hotel-rooms__description">
        <?php echo count($hotel_album['hotel_photos']); ?> фото
      </div>
      <img class="hotel-rooms__weave" src="<?php echo get_template_directory_uri(); ?>/img/hotel/weave.svg">
    </div>
    <div class="hotel-rooms__img-list">

    <?php
    foreach ($hotel_album['hotel_photos'] as $key => $hotel_photo) { ?>

      <a href="<?php echo $hotel_photo['url']; ?>" class="hotel-rooms__img-item-preview <?php if ($key == 0) { echo 'x-target-lightbox';}?>" data-lightbox="<?php echo substr($hotel_album['hotel_album_name'], 1, -1) ?>" data-title="<?php echo $hotel_photo['description']; ?>">
        <img class="hotel-rooms__img-item" src="<?php echo $hotel_photo['url']; ?>" alt="photo">
      </a>

    <?php } ?>

    </div>
    <div class="hotel-rooms__room-title">
      Номер категории<br>
      <?php echo $hotel_album['hotel_album_name']; ?>
    </div>
    <div class="hotel-rooms__text">
      <?php echo $hotel_album['hotel_album_description']; ?>
    </div>
  </div>

<?php } ?>
