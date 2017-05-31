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
<style>
  .load-container {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #fff;
    z-index: 9999;
  }

  .load8 .loader {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -4.3em;
    margin-top: -4.3em;
    font-size: 10px;
    text-indent: -9999em;
    border-top: 0.6em solid rgba(255, 255, 255, 0.2);
    border-right: 0.6em solid rgba(255, 255, 255, 0.2);
    border-bottom: 0.6em solid rgba(255, 255, 255, 0.2);
    border-left: 0.6em solid #e9dfd1;
    -webkit-animation: load8 1.1s infinite linear;
    animation: load8 1.1s infinite linear;
  }

  .load8 .loader, .load8 .loader:after {
    border-radius: 50%;
    width: 8em;
    height: 8em;
  }

  @-webkit-keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>

<?php wp_head(); ?>
</head>
<body>
  <!-- PRELOADER -->
  <div class="load-container load8">
    <div class="loader">Loading...</div>
  </div>
  <!-- END / PRELOADER -->
  <header class="x-header">
    <nav class="main-navigation">
      <?php get_template_part('template-parts/header-mobile'); ?>
      <div class="main-navigation__wrapper">
        <ul class="main-navigation__list">
          <li class="main-navigation__item">
            <a class="main-navigation__link
            <?php if (is_front_page()) { echo 'main-navigation__link--active'; } ?>" href="<?php echo home_url(); ?>">Главная</a>
          </li>
          <li class="main-navigation__item">
            <a class="main-navigation__link x-scroll" href="<?php if (!is_front_page()) { echo home_url(); } ?>#restaurants">Рестораны</a>
          </li>
          <li class="main-navigation__item">
            <a class="main-navigation__link x-scroll
            <?php if (is_page('hotel')) { echo 'main-navigation__link--active'; } ?>"
            href="<?php if (is_front_page()) { echo '#'; } ?>hotel">Гостиница</a>
          </li>
        </ul>

        <div class="main-navigation__logo-wrapper">
          <a class="main-navigation__link " href="<?php echo home_url(); ?>">
            <img class="main-navigation__logo" src="<?php echo get_template_directory_uri(); ?>/build/img/logo.svg" alt="atamankuren">
          </a>
        </div>

        <ul class="main-navigation__list">
          <li class="main-navigation__item main-navigation__item--long">
            <a class="main-navigation__link x-scroll" href="<?php if (!is_front_page()) { echo home_url(); } ?>#organization">Организация праздников</a>
          </li>
          <li class="main-navigation__item main-navigation__item--tablet-hide">
            <a class="main-navigation__link <?php if (is_page('news')) { echo 'main-navigation__link--active'; } ?>" href="news">Новости</a>
          </li>
          <li class="main-navigation__item main-navigation__item--more x-more-link">
            <div class="main-navigation__burger-menu main-navigation__burger-menu--more">
              <div class="main-navigation__burger main-navigation__burger--more"></div>
            </div>
            <ul class="navigation-more x-more-block">
              <li class="navigation-more__item navigation-more__item--tablet-show">
                <a class="main-navigation__link <?php if (is_page('news')) { echo 'main-navigation__link--active'; } ?>" href="news">Новости</a>
              </li>
              <li class="navigation-more__item">
                <a class="main-navigation__link <?php if (is_page('contacts')) { echo 'main-navigation__link--active'; } ?>" href="contacts">Контакты</a>
              </li>
              <li class="navigation-more__item">
                <a class="main-navigation__link <?php if (is_page('vacancies')) { echo 'main-navigation__link--active'; } ?>" href="vacancies">Вакансии</a>
              </li>
            </ul>
          </li>
          <li class="main-navigation__burger-menu main-navigation__burger-menu--mobile x-burger-menu">
            <div class="main-navigation__burger"></div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
