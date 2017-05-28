<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atamankuren
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/build/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&amp;subset=cyrillic" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>
  <header class="x-header">
    <nav class="main-navigation">
      <!-- @include ./header-mobile.html -->
      <div class="main-navigation__wrapper">
        <ul class="main-navigation__list">
          <li class="main-navigation__item">
            <a class="main-navigation__link x-header-link
            <?php if (is_front_page()) {?>
              main-navigation__link--active
            <?php }?>
            " href="<?php echo home_url(); ?>">Главная</a>
          </li>
          <li class="main-navigation__item">
            <a class="main-navigation__link x-header-link x-scroll" href="#restaurants" data-href="./restaurants.html">Рестораны</a>
          </li>
          <li class="main-navigation__item">
            <a class="main-navigation__link x-header-link x-scroll
            <?php if (is_page('hotel')) {?>
              main-navigation__link--active
            <?php }?>"
            href="hotel">Гостиница</a>
          </li>
        </ul>

        <div class="main-navigation__logo-wrapper">
          <a class="main-navigation__link x-header-link" href="<?php echo home_url(); ?>">
            <img class="main-navigation__logo" src="<?php echo get_template_directory_uri(); ?>/build/img/logo.svg" alt="atamankuren">
          </a>
        </div>

        <ul class="main-navigation__list">
          <li class="main-navigation__item main-navigation__item--long">
            <a class="main-navigation__link x-header-link x-scroll" href="#organization" data-href="./index.html">Организация праздников</a>
          </li>
          <li class="main-navigation__item main-navigation__item--tablet-hide">
            <a class="main-navigation__link x-header-link" href="./news.html" data-href="./news.html">Новости</a>
          </li>
          <li class="main-navigation__item main-navigation__item--more x-more-link">
            <div class="main-navigation__link x-header-link">еще</div>
            <ul class="navigation-more x-more-block">
              <li class="navigation-more__item navigation-more__item--tablet-show">
                <a class="main-navigation__link x-header-link" href="./news.html">Новости</a>
              </li>
              <li class="navigation-more__item">
                <a class="main-navigation__link x-header-link" href="./contacts.html" data-href="./contacts.html">Контакты</a>
              </li>
              <li class="navigation-more__item">
                <a class="main-navigation__link x-header-link" href="./vacancies.html" data-href="./vacancies.html">Вакансии</a>
              </li>
            </ul>
          </li>
          <li class="main-navigation__burger-menu x-burger-menu">
            <div class="main-navigation__burger"></div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
