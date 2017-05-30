<?php
/**
 * Template part for displaying page content in header-main.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */
?>

<ul class="main-navigation__mobile-navigation mobile-navigation x-mobile-navigation">
  <li class="mobile-navigation__item">
    <a href="<?php echo home_url(); ?>" data-href="./" class="mobile-navigation__link <?php if (is_front_page()) { echo 'main-navigation__link--active'; } ?>">Главная</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="#restaurants" data-href="./restaurants.html" class="mobile-navigation__link x-scroll">Рестораны</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="hotel" data-href="./hotel.html" class="mobile-navigation__link <?php if (is_page('hotel')) { echo 'main-navigation__link--active'; } ?>">Гостиница</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="#organization" data-href="./index.html" class="mobile-navigation__link x-scroll">Организация праздников</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="news" data-href="./news.html" class="mobile-navigation__link <?php if (is_page('news')) { echo 'main-navigation__link--active'; } ?>">Новости</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="contacts" data-href="./contacts.html" class="mobile-navigation__link <?php if (is_page('contacts')) { echo 'main-navigation__link--active'; } ?>">Контакты</a>
  </li>
  <li class="mobile-navigation__item">
    <a href="vacancies" data-href="./vacancies.html" class="mobile-navigation__link <?php if (is_page('vacancies')) { echo 'main-navigation__link--active'; } ?>">Вакансии</a>
  </li>
</ul>
