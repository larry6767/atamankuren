<?php
/**
 * Template Name: vacancies
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

get_header('main'); ?>
  <section class="vacancies-promo">
    <div class="vacancies-promo__wrapper">
      <div class="vacancies-promo__photo" style="background-image: url('<?php echo get_field('vacancies_photo') ?>');"></div>
      <div class="vacancies-promo__text-block">
        <div class="vacancies-promo__title"><?php echo get_field('vacancies_title'); ?></div>
        <div class="vacancies-promo__text">
          <?php echo get_field('vacancies_text'); ?>
          <br>
          <a class="vacancies-promo__link" href="mailto:<?php echo get_field('vacancies_mail'); ?>"><?php echo get_field('vacancies_mail'); ?></a>
          <br>
          <?php echo get_field('vacancies_post_text'); ?>
        </div>
      </div>
    </div>
    <div class="vacancies-promo__filter"></div>
  </section>
  <div class="vacancies">
    <ul class="vacancies__list">

      <?php
      $vacancies = get_field('vacancies');
      foreach ($vacancies as $key => $item) { ?>

        <li class="vacancies__item">
          <div class="vacancies__title"><?php echo $item['vacancies_caption']; ?></div>
          <div class="vacancies__description">
            <?php echo $item['vacancies_description']; ?>
          </div>
        </li>

      <?php } ?>

    </ul>
  </div>
<?php get_footer('main'); ?>
