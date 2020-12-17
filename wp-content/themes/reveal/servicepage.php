<?php
/**
 * Template Name: Servicepage
 */
get_header(); ?>
<section class="service-page">

  <?php
  while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
      </div>

  <?php
  endwhile;
  wp_reset_query();
  ?>

</section>
<?php get_footer(); ?>
