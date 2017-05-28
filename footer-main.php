<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atamankuren
 */

?>

    </main>
    <footer class="main-footer">
      <img src="<?php echo get_template_directory_uri(); ?>/build/img/footer-logo.svg" alt="atamankuren" class="main-footer__logo">

      <?php
      if ( have_posts() ) : query_posts('cat=1');
        while ( have_posts() ) : the_post(); ?>

        <div class="main-footer__text">Мы в социальных сетях:</div>
        <div class="main-footer__social-block">
          <a href="<?php echo get_field('vk'); ?>" target="_blank" class="main-footer__button main-footer__button--vk">vk</a>
          <a href="<?php echo get_field('inst'); ?>" target="_blank" class="main-footer__button main-footer__button--inst">inst</a>
        </div>
        <div class="main-footer__text">По вопросам сотрудничества свяжитесь с нами</div>
        <a href="tel:<?php echo get_field('footer_phone_link'); ?>" class="main-footer__phone-link"><?php echo get_field('footer_phone_number'); ?></a>

        <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>

      <div class="main-footer__copyright">&copy; 2001 - <?php echo date('Y'); ?> ООО "<?php bloginfo('name'); ?>"</div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/1.1/index.xml"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/build/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/build/js/lightbox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/build/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
