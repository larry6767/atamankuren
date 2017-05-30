<?php
/**
 * Template Name: news
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

get_header('main'); ?>
  <section class="news">
    <div class="news__list">

      <?php
      $news = get_field('news');
      foreach ($news as $key => $item) { ?>

      <div class="news__item">
        <div class="news__photo" style="background-image: url('<?php echo $item['news_photo']; ?>');"></div>
        <div class="news__text-block">
          <div class="news__title">
            <?php echo $item['news_title']; ?>
          </div>
          <div class="news__text">
            <?php echo $item['news_text']; ?>
          </div>
          <div class="news__date">
            <?php echo $item['news_date']; ?>
          </div>
        </div>
      </div>

    <?php } ?>

    </div>
    <div class="news__filter"></div>
    <div class="news__background"></div>
  </section>
<?php get_footer('main'); ?>
