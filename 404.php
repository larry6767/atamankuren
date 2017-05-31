<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('main'); ?>

      <section class="error-404 not-found" style="height: calc(100vh - 350px);display: flex;justify-content: center;align-items: center;">

          <h1 class="page-title" style="color:#671700;"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

      </section><!-- .error-404 -->

<?php get_footer('main'); ?>
